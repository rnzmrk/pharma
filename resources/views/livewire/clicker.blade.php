
<div>
    <form wire:submit="createUser" action="post">
        <input wire:model="name" type="text" placeholder="name">
        <input wire:model="email" type="email" placeholder="email">
        <input wire:model="password" type="password" placeholder="pass">

        <button>create</button>
    </form>

    <div>
        @foreach ($users as $user)
        <div>
            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>
            <p>{{ $user->password }}</p>
        </div>
        @endforeach
    </div>
</div>
