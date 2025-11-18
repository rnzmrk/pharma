<div>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <form wire:submit.prevent="updateProfile" class="p-5 border mt-3 rounded shadow-lg bg-white">
                <h1 class="text-center mb-4">Profile</h1>

                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" wire:model.defer="fullname" placeholder="Enter full name">
                    @error('fullname')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" wire:model.defer="email" placeholder="Enter email">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" rows="2" wire:model.defer="address" placeholder="Enter address"></textarea>
                    @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" wire:model.defer="phone" placeholder="Enter phone number">
                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Password <small class="text-muted">(leave blank to keep current)</small></label>
                    <input type="password" class="form-control" wire:model.defer="password" placeholder="New password">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <button class="btn btn-primary w-100" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
