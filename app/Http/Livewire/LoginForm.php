<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $email;
    public $password;
    public $remember = false;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials, $this->remember)) {
            return redirect()->intended('dashboard');
        } else {
            session()->flash('error', '認証に失敗しました。メールアドレスとパスワードを確認してください。');
        }
    }

    public function render()
    {
        return view('livewire.login-form')
            ->extends('layouts.guest');
    }
}
