<div class="container"> <!-- SINGLE ROOT ELEMENT -->
    <h1 class="text-center mb-5">Inventory</h1>

    <div class="p-3 border rounded mb-5">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h6>Products</h6>
            </div>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product</button>
            </div>
        </div>
        <hr>
        @if(session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ProductID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_description }}</td>
                    <td>{{ number_format($product->product_price, 2) }}</td>
                    <td>{{ $product->product_stock }}</td>
                    <td>{{ $product->category ? $product->category->category_name : 'N/A' }}</td>
                    <td>
                        @if($product->product_image)
                            <img src="{{ asset('storage/' . $product->product_image) }}" width="60" height="60" class="img-thumbnail">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <button wire:click="editProduct({{ $product->id }})" class="btn btn-warning btn-sm">
                            Edit
                        </button>
                        <button wire:click="deleteProduct({{ $product->id }})" class="btn btn-danger btn-sm" 
                                onclick="return confirm('Are you sure you want to delete this product?')">
                            Delete
                        </button>
                    </td>  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h1 class="text-center mb-5">Add Categories</h1>

    <div class="p-3 border rounded mb-5">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h6>Categories</h6>
            </div>
            <div class="flex-grow-1 ms-3">
                <form wire:submit.prevent="saveCategory" class="d-flex gap-2">
                    <input type="text"
                           class="form-control"
                           placeholder="Category name"
                           wire:model.defer="category_name">
                    <button type="submit" class="btn btn-primary">
                        {{ $editing_category_id ? 'Update' : 'Add' }}
                    </button>
                    @if($editing_category_id)
                        <button type="button" wire:click="cancelEditCategory" class="btn btn-secondary">
                            Cancel
                        </button>
                    @endif
                </form>
            </div>
        </div>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CategoryId</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->cart_name }}</td>
                        <td>{{ $category->created_at?->format('Y-m-d') }}</td>
                        <td>
                            <button type="button"
                                    wire:click="editCategory({{ $category->id }})"
                                    class="btn btn-warning btn-sm">
                                Edit
                            </button>
                            <button type="button"
                                    wire:click="deleteCategory({{ $category->id }})"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this category?')">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h1 class="text-center mb-5">Stocks</h1>

    <div class="p-3 border rounded mb-5">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h6>Stocks history</h6>
            </div>
            <div class="flex-grow-1 ms-3">
                <form wire:submit.prevent="saveStock" class="row g-2">
                    <div class="col-md-4">
                        <select wire:model="stock_product_id" class="form-select">
                            <option value="">Select product</option>
                            @foreach($products as $productItem)
                                <option value="{{ $productItem->id }}">{{ $productItem->product_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="number"
                               wire:model="stock_change"
                               class="form-control"
                               placeholder="Quantity (e.g. 10 or -5)">
                    </div>
                    <div class="col-md-1 d-grid">
                        <button type="submit" class="btn btn-primary">
                            {{ $editing_stock_id ? 'Update' : 'Add' }}
                        </button>
                    </div>
                    @if($editing_stock_id)
                        <div class="col-md-1 d-grid">
                            <button type="button" wire:click="cancelEditStock" class="btn btn-secondary">Cancel</button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">StockID</th>
                    <th scope="col">ProductID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stocks as $stock)
                    <tr>
                        <th scope="row">{{ $stock->id }}</th>
                        <td>{{ $stock->product_id }}</td>
                        <td>{{ $stock->product?->product_name }}</td>
                        <td>{{ $stock->quantity }}</td>
                        <td>{{ $stock->created_at?->format('Y-m-d H:i') }}</td>
                        <td>
                            <button type="button"
                                    wire:click="editStock({{ $stock->id }})"
                                    class="btn btn-warning btn-sm">
                                Edit
                            </button>
                            <button type="button"
                                    wire:click="deleteStock({{ $stock->id }})"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this stock record?')">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Modals --}}
    @livewire('admin.inventory.modals.addproduct')
    @include('livewire.admin.inventory.modals.updateproduct')
</div>
