<div>
    <div class="bg-white container mb-4 p-4 rounded shadow-sm">

        <h1 class="text-center mb-4">My Cart</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        @if ($items->isEmpty())
            <div class="text-center py-5 text-muted">Your cart is empty.</div>
        @else
            @foreach ($items as $item)
                <div class="row justify-content-center align-items-center mb-3">
                    <div class="col-md-10 rounded border shadow-sm h-100 p-3 bg-light">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-3">
                                @if($item->product?->product_image)
                                    <img src="{{ asset('storage/' . $item->product->product_image) }}" alt="{{ $item->product?->product_name }}" class="img-fluid" style="height: 160px; object-fit: cover;">
                                @else
                                    <div class="bg-white border text-center d-flex align-items-center justify-content-center" style="height: 160px;">
                                        <span class="text-muted">No image</span>
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-5 text-center">
                                <h6>{{ $item->product?->product_name }}</h6>
                                <p class="mb-1 text-muted">{{ \Illuminate\Support\Str::limit($item->product?->product_description, 80) }}</p>
                                <p class="fw-bold mb-0">₱{{ number_format($item->price_each, 2) }}</p>
                            </div>

                            <div class="col-md-4 text-center">
                                <div class="d-flex justify-content-center align-items-center gap-2 mb-3">
                                    <button class="btn btn-outline-secondary btn-sm" wire:click="decrementItem({{ $item->id }})">-</button>
                                    <span class="px-2">{{ $item->quantity }}</span>
                                    <button class="btn btn-outline-secondary btn-sm" wire:click="incrementItem({{ $item->id }})">+</button>
                                </div>
                                <p class="fw-semibold">Subtotal: ₱{{ number_format($item->quantity * $item->price_each, 2) }}</p>
                                <button class="btn btn-danger btn-sm" wire:click="removeItem({{ $item->id }})">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="text-end mt-4">
                <h4>Total: ₱{{ number_format($total, 2) }}</h4>
                <a href="{{ route('customer.checkout') }}" class="btn btn-success mt-2">Proceed to Checkout</a>
            </div>
        @endif
    </div>
</div>
