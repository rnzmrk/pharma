<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order as OrderModel;
use Livewire\Component;

class Index extends Component
{
    public array $statusUpdates = [];

    protected array $statuses = [
        'pending',
        'paid',
        'shipped',
        'ready to pickup',
        'completed',
        'cancelled',
    ];

    public function render()
    {
        $orders = OrderModel::with(['user', 'orderItems.product'])->latest()->get();

        foreach ($orders as $order) {
            if (! isset($this->statusUpdates[$order->id])) {
                $this->statusUpdates[$order->id] = $order->status;
            }
        }

        return view('livewire.admin.order.index', [
            'orders' => $orders,
            'statuses' => $this->statuses,
        ]);
    }

    public function updateStatus(int $orderId): void
    {
        $status = $this->statusUpdates[$orderId] ?? null;

        if (! in_array($status, $this->statuses, true)) {
            $this->addError('statusUpdates.' . $orderId, 'Invalid status selected.');
            return;
        }

        $order = OrderModel::findOrFail($orderId);
        $order->status = $status;
        $order->save();

        session()->flash('statusMessage', 'Order #' . str_pad($order->id, 5, '0', STR_PAD_LEFT) . ' updated to ' . strtoupper($status) . '.');
    }
}
