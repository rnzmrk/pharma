<div>
    <h1 class="text-center mb-5">Manage Users</h1>

    <div class="p-3 border rounded mb-5">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h6>Users</h6>
            </div>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">Add User</button>
            </div>
        </div>
        <hr>

        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">UserID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Role</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone ?? '—' }}</td>
                            <td>{{ $user->address ?? '—' }}</td>
                            <td class="text-capitalize">{{ $user->role }}</td>
                            <td>{{ $user->created_at?->format('Y-m-d') }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning me-2" wire:click="startEdit({{ $user->id }})">
                                    Edit
                                </button>
                                <button class="btn btn-sm btn-danger"
                                        onclick="confirm('Delete this user?') || event.stopImmediatePropagation()"
                                        wire:click="deleteUser({{ $user->id }})">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @livewire('admin.users.modals.adduser')

    @if($showEditModal)
        <div class="modal fade show" style="display: block;" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" wire:click="closeEditModal"></button>
                    </div>
                    <form wire:submit.prevent="updateUser">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Fullname</label>
                                <input type="text" class="form-control" wire:model.defer="editFullname">
                                @error('editFullname')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" wire:model.defer="editEmail">
                                @error('editEmail')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" wire:model.defer="editPhone">
                                @error('editPhone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" wire:model.defer="editAddress">
                                @error('editAddress')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select class="form-select" wire:model.defer="editRole">
                                    <option value="customer">Customer</option>
                                    <option value="pharmacist">Pharmacist</option>
                                    <option value="admin">Admin</option>
                                </select>
                                @error('editRole')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" wire:click="closeEditModal">Cancel</button>
                            <button type="submit" class="btn btn-primary">
                                <span wire:loading.remove wire:target="updateUser">Save changes</span>
                                <span wire:loading wire:target="updateUser">Saving...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
