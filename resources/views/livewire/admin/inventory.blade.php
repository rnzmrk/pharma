<div>
    <h1 class="text-center mb-5">Inventory</h1>

        <div class="p-3 border rounded mb-5">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h6>Products</h6>
                </div>
                <div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">add products</button>
                </div>
            </div>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ProductID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h1 class="text-center mb-5">Add Categories</h1>

        <div class="p-3 border rounded mb-5">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h6>categories</h6>
                </div>
                <div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategory">add categories</button>
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
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h1 class="text-center mb-5">Stocks</h1>

        <div class="p-3 border rounded">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h6>stocks history</h6>
                </div>
                <div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStock">add stocks</button>
                </div>
            </div>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">StockID</th>
                    <th scope="col">ProductID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!------add Product------->
        <div class="modal" tabindex="-1" id="addProduct">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div>
                            <label for="form-control">Product Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Descripition</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Price</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Stock</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Category</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Image</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>

        <!------add Category------->
        <div class="modal" tabindex="-1" id="addCategory">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div>
                            <label for="form-control">Category Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>

        <!------add Stock------->
        <div class="modal" tabindex="-1" id="addStock">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Stock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div>
                            <label for="form-control">ProductID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Product Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Reason</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
</div>
