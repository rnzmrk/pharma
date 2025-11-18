<?php

namespace App\Livewire\Customer;

use App\Models\Order as OrderModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        $orders = collect();

        if (Auth::check()) {
            $orders = OrderModel::with(['orderItems.product'])
                ->where('user_id', Auth::id())
                ->whereIn('status', ['pending', 'paid', 'shipped', 'ready to pickup', 'cancelled'])
                ->latest()
                ->get();
        }

        return view('livewire.customer.order', [
            'orders' => $orders,
        ]);
    }
}
