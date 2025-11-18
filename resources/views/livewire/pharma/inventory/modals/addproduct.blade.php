<div>
    <!------add Product------->
    <div wire:ignore.self class="modal fade" id="addProduct" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store"   >
                    <div>
                        <label for="form-control">Product Name</label>
                        <input wire:model="product_name"  type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input wire:model="product_description" type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Price</label>
                        <input wire:model="product_price" type="number" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Stock</label>
                        <input wire:model="product_stock" type="number" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Category</label>
                        <select wire:model="category_id" class="form-control">
                            <option value="">-- select category --</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Image URL</label>
                        <input wire:model="product_image" type="file" class="form-control">

                        @error('product_image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button wire:click="store" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
</div>
