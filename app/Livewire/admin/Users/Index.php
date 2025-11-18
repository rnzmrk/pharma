<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['userAdded' => '$refresh'];

    public $showEditModal = false;
    public $editUserId;
    public $editFullname = '';
    public $editEmail = '';
    public $editPhone = '';
    public $editAddress = '';
    public $editRole = 'customer';

    protected function rules(): array
    {
        return [
            'editFullname' => ['required', 'string', 'max:255'],
            'editEmail' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->editUserId),
            ],
            'editPhone' => ['nullable', 'string', 'max:20'],
            'editAddress' => ['nullable', 'string', 'max:255'],
            'editRole' => ['required', Rule::in(['customer', 'pharmacist', 'admin'])],
        ];
    }

    public function startEdit(int $userId): void
    {
        $user = User::find($userId);

        if (! $user) {
            return;
        }

        $this->editUserId = $user->id;
        $this->editFullname = $user->fullname;
        $this->editEmail = $user->email;
        $this->editPhone = $user->phone;
        $this->editAddress = $user->address;
        $this->editRole = $user->role;
        $this->showEditModal = true;
    }

    public function updateUser(): void
    {
        if (! $this->editUserId) {
            return;
        }

        $this->validate();

        $user = User::find($this->editUserId);

        if (! $user) {
            return;
        }

        $user->update([
            'fullname' => $this->editFullname,
            'email' => $this->editEmail,
            'phone' => $this->editPhone,
            'address' => $this->editAddress,
            'role' => $this->editRole,
        ]);

        session()->flash('message', 'User updated successfully!');

        $this->resetEditForm();
    }

    public function deleteUser(int $userId): void
    {
        $user = User::find($userId);

        if ($user) {
            $user->delete();
            session()->flash('message', 'User deleted successfully!');
        }
    }

    public function closeEditModal(): void
    {
        $this->resetEditForm();
    }

    private function resetEditForm(): void
    {
        $this->reset([
            'showEditModal',
            'editUserId',
            'editFullname',
            'editEmail',
            'editPhone',
            'editAddress',
            'editRole',
        ]);

        $this->editRole = 'customer';
    }

    public function render()
    {
        return view('livewire.admin.users.index', [
            'users' => User::latest()->get(),
        ]);
    }
}
