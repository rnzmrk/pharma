<div class="container py-4">
    <h1 class="mb-4">Completed Orders</h1>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Order #</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Total Paid</th>
                            <th>Completed At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <td class="fw-semibold">#{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</td>
                                <td>
                                    <div>{{ $order->user?->fullname ?? 'N/A' }}</div>
                                    <small class="text-muted">{{ $order->user?->email }}</small>
                                </td>
                                <td style="min-width: 250px;">
                                    <ul class="list-unstyled mb-0 small">
                                        @foreach ($order->orderItems as $item)
                                            <li class="mb-1">
                                                <strong>{{ $item->product?->product_name ?? 'Product removed' }}</strong>
                                                <span class="text-muted">· Qty: {{ $item->quantity }} @ ₱{{ number_format($item->price_each, 2) }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="fw-semibold">₱{{ number_format($order->total_amount, 2) }}</td>
                                <td><small class="text-muted">{{ $order->updated_at?->format('M d, Y h:i A') }}</small></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">No completed orders recorded.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
