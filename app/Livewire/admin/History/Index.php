<?php

namespace App\Livewire\Admin\History;

use App\Models\Order;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $orders = Order::with(['user', 'orderItems.product'])
            ->where('status', 'completed')
            ->latest()
            ->get();

        return view('livewire.admin.history.index', [
            'orders' => $orders,
        ]);
    }
}
