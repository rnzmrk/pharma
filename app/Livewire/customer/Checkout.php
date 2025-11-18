<?php

namespace App\Livewire\Customer;

use App\Models\Cart as CartModel;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkout extends Component
{
    public $mode = '';
    public $conventionalFee = 0;
    public $address = '';

    protected $rules = [
        'mode' => ['required', 'in:cod,pickup'],
        'address' => ['required', 'string', 'max:255'],
    ];

    public function mount(): void
    {
        $user = Auth::user();
        if ($user) {
            $this->address = $user->address ?? '';
        }
    }

    public function render()
    {
        $user = Auth::user();
        $cart = null;
        $items = collect();

        if ($user) {
            $cart = CartModel::with(['cartItems.product'])->firstOrCreate(['user_id' => $user->id]);
            $items = $cart->cartItems;
        }

        $subtotal = $items->sum(function ($item) {
            return $item->quantity * $item->price_each;
        });

        $this->conventionalFee = match ($this->mode) {
            'cod' => 50,
            'pickup' => 20,
            default => 0,
        };

        $total = $subtotal + $this->conventionalFee;

        return view('livewire.customer.checkout', [
            'items' => $items,
            'subtotal' => $subtotal,
            'conventionalFee' => $this->conventionalFee,
            'total' => $total,
        ]);
    }

    public function confirmOrder()
    {
        $this->validate();

        $user = Auth::user();
        if (! $user) {
            session()->flash('message', 'Please log in to place an order.');
            return redirect()->route('login');
        }

        $cart = CartModel::with('cartItems')->where('user_id', $user->id)->first();

        if (! $cart || $cart->cartItems->isEmpty()) {
            session()->flash('message', 'Your cart is empty.');
            return;
        }

        $subtotal = $cart->cartItems->sum(function ($item) {
            return $item->quantity * $item->price_each;
        });

        $this->conventionalFee = match ($this->mode) {
            'cod' => 50,
            'pickup' => 20,
            default => 0,
        };

        $total = $subtotal + $this->conventionalFee;

        $order = Order::create([
            'user_id' => $user->id,
            'total_amount' => $total,
            'status' => 'pending',
        ]);

        foreach ($cart->cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price_each' => $item->price_each,
            ]);
        }

        $cart->cartItems()->delete();

        session()->flash('message', 'Order placed successfully!');
        return redirect()->route('customer.history');
    }
}
