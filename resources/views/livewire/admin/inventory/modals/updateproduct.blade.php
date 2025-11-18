<div>
    @if($showModal)
    <div class="modal show" tabindex="-1" style="display: block;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Product</h5>
                    <button type="button" wire:click="$set('showModal', false)" class="btn-close"></button>
                </div>
                <form wire:submit.prevent="update">
                    <div class="modal-body">
                        <!-- Name Field -->
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" wire:model="product_name" class="form-control">
                            @error('product_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea wire:model="product_description" class="form-control" rows="3"></textarea>
                            @error('product_description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Price Field -->
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" step="0.01" wire:model="product_price" class="form-control">
                            </div>
                            @error('product_price') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Stock Field -->
                        <div class="mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" wire:model="product_stock" class="form-control" min="0">
                            @error('product_stock') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Image Field -->
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" wire:model="product_image" class="form-control">
                            @error('product_image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Category Dropdown -->
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select wire:model="category_id" class="form-select">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                   
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif
</div>