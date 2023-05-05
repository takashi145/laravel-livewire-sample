<div>
    <form wire:submit.prevent="login" class="py-3">
        @if (session()->has('error'))
            <div class="bg-red-500 text-white p-4 mb-4 rounded">
                {{ session('error') }}
            </div>
        @endif

        <div class="mb-4">
            <label for="email" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">{{ __('Email') }}</label>
            <input type="email" class="shadow appearance-none border rounded @error('email') border-red-500 @enderror w-full py-3 px-3 text-gray-700  leading-tight focus:ring-2 focus:outline-none focus:shadow-outline" id="email" placeholder="メールアドレスを入力してください" wire:model="email" required>
            @error('email')
                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">{{ __('Password') }}</label>
            <input type="password" class="shadow appearance-none border rounded @error('password') border-red-500 @enderror  w-full py-3 px-3 text-gray-700 leading-tight focus:ring-2 focus:outline-none focus:shadow-outline" id="password" placeholder="パスワードを入力してください" wire:model="password" required>
        </div>

        <div class="mb-6">
            <div class="flex items-center justify-between">
                <label for="remember" class="block text-gray-700 dark:text-gray-200 text-sm font-bold">
                    <input type="checkbox" class="shadow focus:shadow-outline" id="remember" wire:model="remember">
                    <span class="ml-2">{{ __('Remember Me')}}</span>
                </label>
            </div>
        </div>

        <div class="flex items-center justify-between">
            <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-500 hover:underline">{{ __("Don't have an account?") }}</a>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Login')}}
            </button>
        </div>
    </form>
</div>
