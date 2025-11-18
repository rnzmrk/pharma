<?php

namespace App\Livewire\Admin\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Index extends Component
{
    public $userId;
    public $fullname = '';
    public $email = '';
    public $password = '';

    public function mount(): void
    {
        $user = Auth::user() ?? User::first();

        if ($user) {
            $this->userId = $user->id;
            $this->fullname = $user->fullname;
            $this->email = $user->email;
        }
    }

    protected function rules(): array
    {
        return [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->userId),
            ],
            'password' => ['nullable', 'string', 'min:6'],
        ];
    }

    public function updateProfile(): void
    {
        $this->validate();

        $user = $this->getUser();

        if (! $user) {
            session()->flash('message', 'Unable to locate user profile.');
            return;
        }

        $data = [
            'fullname' => $this->fullname,
            'email' => $this->email,
        ];

        if ($this->password) {
            $data['password'] = Hash::make($this->password);
        }

        $user->update($data);

        $this->reset('password');

        session()->flash('message', 'Profile updated successfully!');
    }

    private function getUser(): ?User
    {
        if ($this->userId) {
            return User::find($this->userId);
        }

        return Auth::user();
    }

    public function render()
    {
        return view('livewire.admin.profile.index');
    }
}
