<?php

namespace App\Livewire\Customer;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Profile extends Component
{
    public $userId;
    public $fullname = '';
    public $email = '';
    public $address = '';
    public $phone = '';
    public $password = '';

    public function mount(): void
    {
        $user = Auth::user();

        if ($user) {
            $this->userId = $user->id;
            $this->fullname = $user->fullname;
            $this->email = $user->email;
            $this->address = $user->address ?? '';
            $this->phone = $user->phone ?? '';
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
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'password' => ['nullable', 'string', 'min:6'],
        ];
    }

    public function updateProfile(): void
    {
        $this->validate();

        $user = $this->getUser();

        if (! $user) {
            session()->flash('message', 'Unable to locate your profile.');
            return;
        }

        $data = [
            'fullname' => $this->fullname,
            'email' => $this->email,
            'address' => $this->address,
            'phone' => $this->phone,
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
        return view('livewire.customer.profile');
    }
}
