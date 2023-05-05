<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * ユーザーのログアウト処理を行い、ログインページにリダイレクトする
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request): RedirectResponse
    {
        Auth::logout();

        // セッションデータを無効化し、CSRFトークンを再生成する
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login');
    }
}
