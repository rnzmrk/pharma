<div>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <form wire:submit.prevent="updateProfile" class="p-5 border mt-3 rounded shadow-lg">
                <h1 class="text-center mb-3">PROFILE</h1>

                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="mb-3">
                    <x-label for="fullname" value="Full Name"/>
                    <x-input type="text" name="fullname" placeholder="Enter Full Name" wire:model.defer="fullname"/>
                    @error('fullname')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <x-label for="email" value="Email"/>
                    <x-input type="email" name="email" placeholder="Enter Email" wire:model.defer="email" />
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <x-label for="password" value="Password"/>
                    <x-input type="password" name="password" placeholder="" wire:model.defer="password"/>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <x-button class="w-100">
                        <span wire:loading.remove wire:target="updateProfile">UPDATE</span>
                        <span wire:loading wire:target="updateProfile">Saving...</span>
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</div>
