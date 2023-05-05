<div>
    <form wire:submit.prevent="register" class="py-3">
        <div class="mb-4">
            <x-label for="name">{{ __('Name') }}</x-label>
            <x-input type="text" id="name" placeholder="ユーザ名を入力してください" wire:model.debounce.500ms="name" required />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div class="mb-4">
            <x-label for="email">{{ __('Email') }}</x-label>
            <x-input type="email" id="email" placeholder="メールアドレスを入力してください" wire:model.debounce.500ms="email" required />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="mb-4">
            <x-label for="password">{{ __('Password') }}</x-label>
            <x-input type="password" id="password" placeholder="パスワードを入力してください" wire:model="password" required />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="mb-6">
            <x-label for="password">{{ __('Confirm Password') }}</x-label>
            <x-input type="password" id="password_confirmation" placeholder="パスワードを再入力してください" wire:model="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <div class=" flex items-center justify-between">
            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-500 hover:underline">{{ __('Already registered?') }}</a>
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Register')}}
            </button>
        </div>

    </form>
</div>
