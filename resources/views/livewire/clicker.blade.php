
<div>
    @if (session('success'))
    <div class="bg-success, p-2">{{ session('success') }}</div>
    @endif
    <form wire:submit="createUser" action="post">

        <input wire:model="name" type="text" placeholder="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <input wire:model="email" type="email" placeholder="email">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <input wire:model="password" type="password" placeholder="pass">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <button>create</button>
    </form>

    <div>
        @foreach ($users as $user)
        <div>
            <p>{{ $user->name }}</p>
        </div>
        @endforeach
    </div>

    {{ $users->links() }}
</div>
