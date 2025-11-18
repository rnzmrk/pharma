<div>
    <div class="row gap-2 justify-content-center gap-4 ">
            <!---categories-->
            <div class="col-md-2 bg-white p-3 rounded bg-secondary">

                <h5 class="text-center mb-3">CATEGORIES</h5>

                <hr>
                <div class="overflow-auto" style="max-height: 60vh;">
                    @forelse($categories as $category)
                        <div class="form-check mb-2" wire:key="category-{{ $category->id }}">
                            <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="category{{ $category->id }}" wire:model="selectedCategories">
                            <label class="form-check-label" for="category{{ $category->id }}">
                                {{ $category->cart_name }}
                            </label>
                        </div>
                    @empty
                        <p class="text-muted small">No categories available.</p>
                    @endforelse
                </div>

            </div>

            <!---shopping cards-->
            <div class="col-md-9 bg-white rounded">

                @if (session()->has('message'))
                    <div class="alert alert-success mt-3">{{ session('message') }}</div>
                @endif

                <!--search--->
                <div class="mb-3 d-flex pt-3 gap-2">
                    <input class="form-control" type="search" placeholder="Search products" aria-label="Search" wire:model.lazy="search" />
                    <button class="btn btn-primary" type="button" wire:click="applyFilters">Search</button>
                    @if($search)
                        <button class="btn btn-outline-secondary" type="button" wire:click="$set('search','')">Clear</button>
                    @endif
                </div>
                <hr>

                <!---cards--->
                <div class="container mb-5">
                    <div class="row g-3">

                        @forelse($products as $product)
                            <div class="col-sm-6 col-md-4 col-lg-3" wire:key="product-{{ $product->id }}">
                                <div class="card h-100 shadow-sm">
                                    @if($product->product_image)
                                        <img src="{{ asset('storage/' . $product->product_image) }}" class="card-img-top" alt="{{ $product->product_name }}" style="height: 180px; object-fit: cover;">
                                    @else
                                        <div class="bg-light text-center d-flex align-items-center justify-content-center" style="height: 180px;">
                                            <span class="text-muted">No image</span>
                                        </div>
                                    @endif
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $product->product_name }}</h5>
                                        <p class="card-text small text-muted flex-grow-1">{{ \Illuminate\Support\Str::limit($product->product_description, 80) }}</p>
                                        <div class="fw-bold mb-2">₱{{ number_format($product->product_price, 2) }}</div>
                                        <button class="btn btn-primary w-100" type="button" wire:click="addToCart({{ $product->id }})">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="alert alert-info text-center">No products found.</div>
                            </div>
                        @endforelse

                    </div>
                    <div class="mt-3">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>

        </div>
</div>
