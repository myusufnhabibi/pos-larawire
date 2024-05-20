<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $valid = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($valid)) {
            return redirect(route('home'), true);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
