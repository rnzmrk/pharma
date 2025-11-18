<div class="container-fluid py-3">
    <div class="row g-4">
        <div class="col-lg-3">
            <div class="bg-white p-3 rounded shadow-sm h-100">
                <h5 class="mb-3 text-center">Categories</h5>
                <div class="small text-muted mb-2">Filter products by category.</div>
                <div class="d-flex flex-column gap-2" style="max-height: 60vh; overflow-y: auto;">
                    @foreach ($categories as $category)
                        <label class="form-check d-flex align-items-center gap-2">
                            <input type="checkbox" class="form-check-input"
                                wire:model.live="selectedCategories" value="{{ $category->id }}">
                            <span>{{ $category->cart_name ?? $category->category_name }}</span>
                        </label>
                    @endforeach
                </div>
                <button class="btn btn-outline-secondary w-100 mt-3" type="button" wire:click="applyFilters">Apply Filters</button>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="bg-white p-3 rounded shadow-sm">
                <div class="d-flex flex-column flex-md-row gap-2 align-items-md-center mb-3">
                    <form class="d-flex flex-grow-1 gap-2" wire:submit.prevent="applyFilters">
                        <input type="text" class="form-control" placeholder="Search" wire:model.defer="search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </form>
                    <div class="text-muted small ms-md-3">Showing {{ $products->total() }} items</div>
                </div>

                <div class="row g-3">
                    @forelse ($products as $product)
                        <div class="col-6 col-sm-4 col-xl-3">
                            <div class="card h-100 border-0 shadow-sm">
                                @if ($product->product_image)
                                    <img src="{{ asset('storage/' . $product->product_image) }}" class="card-img-top" alt="{{ $product->product_name }}"
                                        style="height: 140px; object-fit: cover;">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center"
                                        style="height: 140px;">No Image</div>
                                @endif
                                <div class="card-body p-3">
                                    <span class="badge bg-secondary-subtle text-dark mb-2">{{ $product->category?->cart_name }}</span>
                                    <h6 class="fw-semibold text-truncate">{{ $product->product_name }}</h6>
                                    <p class="small text-muted mb-2" style="min-height: 48px;">{{ Str::limit($product->product_description, 70) }}</p>
                                    <div class="fw-bold">₱{{ number_format($product->price, 2) }}</div>
                                    <small class="text-muted">Stock: {{ $product->stock }}</small>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5 text-muted">No products found for the selected filters.</div>
                    @endforelse
                </div>

                <div class="mt-3 d-flex justify-content-end">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
