<div>
    <div class="container my-4 bg-white p-4 rounded shadow-sm">
        <h1 class="text-center mb-5">Checkout</h1>

        @if ($items->isEmpty())
            <div class="text-center py-5 text-muted">Your cart is empty. <a href="{{ route('customer.cart') }}">Go back to cart.</a></div>
        @else
            <div class="row">
                <div class="col-md-6">
                    @foreach ($items as $item)
                        <div class="mb-3 border rounded p-3 shadow-sm">
                            <div class="d-flex gap-3 align-items-center">
                                @if($item->product?->product_image)
                                    <img src="{{ asset('storage/' . $item->product->product_image) }}" alt="{{ $item->product?->product_name }}" class="img-fluid" style="height:120px;width:120px;object-fit:cover;">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center" style="height:120px;width:120px;">No image</div>
                                @endif
                                <div>
                                    <h5 class="mb-1">{{ $item->product?->product_name }}</h5>
                                    <p class="text-muted mb-1">₱{{ number_format($item->price_each, 2) }}</p>
                                    <p class="mb-0">Qty: {{ $item->quantity }}</p>
                                    <p class="fw-semibold mb-0">Subtotal: ₱{{ number_format($item->quantity * $item->price_each, 2) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-6">
                    <div class="border rounded p-4 shadow-sm">
                        <h5 class="mb-3">Order Details</h5>
                        <div class="mb-4">
                            <label class="form-label">Mode</label>
                            <select class="form-select" wire:model.live="mode">
                                <option value="">Select mode</option>
                                <option value="cod">Cash on Delivery</option>
                                <option value="pickup">Pick-up</option>
                            </select>
                            @if($mode === 'cod')
                                <small class="text-muted">Conventional fee: ₱50</small>
                            @elseif($mode === 'pickup')
                                <small class="text-muted">Conventional fee: ₱20</small>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" rows="3" wire:model="address" placeholder="Enter delivery or pick-up address"></textarea>
                        </div>

                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>Subtotal</span>
                            <strong>₱{{ number_format($subtotal, 2) }}</strong>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Conventional Fee</span>
                            <strong>₱{{ number_format($conventionalFee, 2) }}</strong>
                        </div>
                        <div class="d-flex justify-content-between fs-5 mt-2">
                            <span>Total</span>
                            <strong>₱{{ number_format($total, 2) }}</strong>
                        </div>

                        <button class="btn btn-success w-100 mt-4" type="button" wire:click="confirmOrder">Confirm Order</button>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
