<?php

namespace App\Http\Livewire;

use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginForm extends Component
{
    public $email;
    public $password;
    public $remember = false;

    /**
     * ログイン処理
     */
    public function login(): RedirectResponse
    {
        $this->validate([
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        // 認証を試行し、成功した場合はホームページへリダイレクト
        if (Auth::attempt($credentials, $this->remember)) {
            return redirect()->intended('home');
        } else {
            // 失敗した場合はエラーメッセージを表示
            session()->flash('error', '認証に失敗しました。メールアドレスとパスワードを確認してください。');
        }
    }

    public function render(): View
    {
        return view('livewire.login-form')
            ->extends('layouts.guest');
    }
}
