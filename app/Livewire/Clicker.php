<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver;

class Clicker extends Component
{

    use WithPagination;

    #[Rule('required|string|max:255')]
    public $name = "";

    #[Rule('required|email|unique:users')]
    public $email = "";

    #[Rule('required|min:6')]
    public $password = "";

    public function createUser(){

        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $this->reset('name', 'email', 'password');

        request()->session()->flash('success','User created successfully');
    }

    public function render()
    {
        $users = User::paginate(5);

        return view('livewire.clicker',[
            'users' => $users,
        ]);
    }

}
