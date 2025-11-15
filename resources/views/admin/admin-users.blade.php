@extends('layouts.admin')

@section('title', 'Users')
@section('admin-main')

 <div class="container">

        <h1 class="text-center mb-5">Manage Users</h1>

        <div class="p-3 border rounded mb-5">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h6>users</h6>
                </div>
                <div>
                    <button class="btn btn-primary">add users</button>
                </div>
            </div>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">UserID</th>
                    <th scope="col">FullName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
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
                    <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection
