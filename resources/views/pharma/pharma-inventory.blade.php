@extends('layouts.pharmacist')

@section('title', 'Inventory')

@section('pharma-main')

     <div class="container">

        <h1 class="text-center mb-5">Inventory</h1>

        <div class="p-3 border rounded mb-5">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h6>Products</h6>
                </div>
                <div>
                    <button class="btn btn-primary">add products</button>
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
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>@social</td>
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
                    <button class="btn btn-primary">add categories</button>
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
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>@social</td>
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
                    <button class="btn btn-primary">add stocks</button>
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
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>@social</td>
                    <td>Mark</td>
                    <td>Mark</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection
