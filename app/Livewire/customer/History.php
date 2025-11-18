<?php

namespace App\Livewire\Customer;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class History extends Component
{
    public function render()
    {
        $orders = collect();

        if (Auth::check()) {
            $orders = Order::with(['orderItems.product'])
                ->where('user_id', Auth::id())
                ->where('status', 'completed')
                ->latest()
                ->get();
        }

        return view('livewire.customer.history', [
            'orders' => $orders,
        ]);
    }
}
        