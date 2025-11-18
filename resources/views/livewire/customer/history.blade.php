<div class="container py-4">
    <h1 class="text-center mb-4">Order History</h1>

    @if ($orders->isEmpty())
        <div class="text-center text-muted py-5">
            <p class="mb-1">No completed orders yet.</p>
            <a href="{{ route('customer.products') }}" class="btn btn-outline-primary btn-sm">Browse Products</a>
        </div>
    @else
        <div class="row g-4">
            @foreach ($orders as $order)
                <div class="col-12 col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fw-semibold">Order #{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</div>
                                <small class="text-muted">Completed on {{ $order->updated_at?->format('M d, Y h:i A') }}</small>
                            </div>
                            <span class="badge text-bg-success text-uppercase">{{ $order->status }}</span>
                        </div>
                        <div class="card-body">
                            @foreach ($order->orderItems as $item)
                                <div class="d-flex gap-3 mb-3 pb-3 border-bottom">
                                    @if ($item->product?->product_image)
                                        <img src="{{ asset('storage/' . $item->product->product_image) }}" alt="{{ $item->product?->product_name }}"
                                            class="rounded" style="width: 70px; height: 70px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                            style="width: 70px; height: 70px;">No Image</div>
                                    @endif

                                    <div class="flex-grow-1">
                                        <div class="fw-semibold">{{ $item->product?->product_name ?? 'Product removed' }}</div>
                                        <small class="text-muted">₱{{ number_format($item->price_each, 2) }} · Qty: {{ $item->quantity }}</small>
                                    </div>

                                    <div class="text-end">
                                        <div class="fw-semibold">₱{{ number_format($item->price_each * $item->quantity, 2) }}</div>
                                        <small class="text-muted">Line total</small>
                                    </div>
                                </div>
                            @endforeach

                            <div class="d-flex justify-content-between mt-3">
                                <span class="text-muted">Total Paid</span>
                                <span class="fw-bold">₱{{ number_format($order->total_amount, 2) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
