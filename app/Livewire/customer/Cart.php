<?php

namespace App\Livewire\Customer;

use App\Models\Cart as CartModel;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    protected $listeners = ['cartUpdated' => '$refresh'];

    public function incrementItem(int $itemId): void
    {
        $item = $this->findUserItem($itemId);

        if ($item) {
            $item->increment('quantity');
            $this->dispatch('cartUpdated');
        }
    }

    public function decrementItem(int $itemId): void
    {
        $item = $this->findUserItem($itemId);

        if ($item && $item->quantity > 1) {
            $item->decrement('quantity');
        } elseif ($item) {
            $item->delete();
        }

        $this->dispatch('cartUpdated');
    }

    public function removeItem(int $itemId): void
    {
        $item = $this->findUserItem($itemId);

        if ($item) {
            $item->delete();
            $this->dispatch('cartUpdated');
        }
    }

    private function findUserItem(int $itemId): ?CartItem
    {
        $user = Auth::user();

        if (! $user) {
            return null;
        }

        return CartItem::whereHas('cart', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->find($itemId);
    }

    public function render()
    {
        $user = Auth::user();
        $cart = null;
        $items = collect();

        if ($user) {
            $cart = CartModel::firstOrCreate(['user_id' => $user->id]);
            $items = $cart->cartItems()->with('product')->get();
        }

        $total = $items->sum(function ($item) {
            return $item->quantity * $item->price_each;
        });

        return view('livewire.customer.cart', [
            'items' => $items,
            'total' => $total,
        ]);
    }
}
