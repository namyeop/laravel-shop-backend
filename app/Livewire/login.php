<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = 'default@default.com';
    public $password;
    public $token;

    public function updatingPassword()
    {
        if ($this->password < 8) {
            $this->addError('password', 'Password must be at least 8 characters.');
        } else {
            $this->removeError('password');
        }
    }

    public function login()
    {
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return;
        }

        $user = Auth::user();

        $this->token = $user->createToken('web')->plainTextToken;

        $this->addError('email', 'Email or password is incorrect.');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
