<?php

namespace App\Livewire\Admin\Users\Modals;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Adduser extends Component
{
    public $fullname = '';
    public $email = '';
    public $phone = '';
    public $address = '';
    public $password = '';
    public $role = 'customer';

    protected function rules(): array
    {
        return [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
            'role' => ['required', Rule::in(['customer', 'pharmacist', 'admin'])],
        ];
    }

    public function store(): void
    {
        $data = $this->validate();

        User::create($data);

        $this->reset(['fullname', 'email', 'phone', 'address', 'password']);
        $this->role = 'customer';

        session()->flash('message', 'User added successfully!');

        $this->dispatch('userAdded');
    }

    public function render()
    {
        return view('livewire.admin.users.modals.adduser');
    }
}
