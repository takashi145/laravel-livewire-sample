<div>
    <form wire:submit.prevent="login" class="py-3">
        @if (session()->has('error'))
            <div class="bg-red-500 text-white p-4 mb-4 rounded">
                {{ session('error') }}
            </div>
        @endif

        <div class="mb-4">
            <x-label for="email">{{ __('Email') }}</x-label>
            <x-input type="email" name="email" placeholder="メールアドレスを入力してください" wire:model="email" required />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="mb-6">
            <x-label for="password">{{ __('Password') }}</x-label>
            <x-input type="password" name="password" placeholder="パスワードを入力してください" wire:model="password" required />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="mb-6">
            <div class="flex items-center justify-between">
                <x-label for="remember">
                    <input type="checkbox" class="shadow focus:shadow-outline" id="remember" wire:model="remember">
                    <span class="ml-2">{{ __('Remember Me')}}</span>
                </x-label>
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
