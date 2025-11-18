<?php

namespace App\Livewire\Pharma\History;

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

        return view('livewire.pharma.history.index', [
            'orders' => $orders,
        ]);
    }
}
