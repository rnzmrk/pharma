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
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser" >add users</button>
                </div>
            </div>
            <hr>7
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


        <!------add user modal------->
        <div class="modal" tabindex="-1" id="addUser">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div>
                            <label for="form-control">Fullname</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Phone</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Password</label>
                            <input type="text" class="form-control">
                        </div>
                        <div>
                            <label for="form-control">Role</label>
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

@endsection
