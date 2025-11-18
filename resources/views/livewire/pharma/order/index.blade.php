<div class="container py-4">
    <h1 class="mb-4">Orders</h1>

    @if (session('statusMessage'))
        <div class="alert alert-success">{{ session('statusMessage') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Order #</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Updated</th>
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
                                <td style="min-width: 220px;">
                                    <ul class="list-unstyled mb-0 small">
                                        @foreach ($order->orderItems as $item)
                                            <li class="mb-1">
                                                <strong>{{ $item->product?->product_name ?? 'Product removed' }}</strong>
                                                <span class="text-muted">· Qty: {{ $item->quantity }} @ ₱{{ number_format($item->price_each, 2) }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <select class="form-select form-select-sm" wire:model.defer="statusUpdates.{{ $order->id }}">
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status }}">{{ ucfirst($status) }}</option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-sm btn-primary" wire:click="updateStatus({{ $order->id }})">Update</button>
                                    </div>
                                    @error('statusUpdates.' . $order->id)
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </td>
                                <td class="fw-semibold">₱{{ number_format($order->total_amount, 2) }}</td>
                                <td>
                                    <small class="text-muted">{{ $order->updated_at?->diffForHumans() }}</small>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">No orders found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
