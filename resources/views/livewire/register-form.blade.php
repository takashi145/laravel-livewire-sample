<div>
    <form wire:submit.prevent="register" class="py-6">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">{{ __('Name') }}</label>
            <input type="text" class="shadow appearance-none border rounded @error('name') border-red-500 @enderror w-full py-3 px-3 text-gray-700  leading-tight focus:ring-2 focus:outline-none focus:shadow-outline" id="name" placeholder="ユーザ名を入力してください" wire:model="name" required>
            @error('name')
                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">{{ __('Email') }}</label>
            <input type="email" class="shadow appearance-none border rounded @error('email') border-red-500 @enderror w-full py-3 px-3 text-gray-700  leading-tight focus:ring-2 focus:outline-none focus:shadow-outline" id="email" placeholder="メールアドレスを入力してください" wire:model="email" required>
            @error('email')
                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">{{ __('Password') }}</label>
            <input type="password" class="shadow appearance-none border rounded @error('password') border-red-500 @enderror  w-full py-3 px-3 text-gray-700 leading-tight focus:ring-2 focus:outline-none focus:shadow-outline" id="password" placeholder="パスワードを入力してください" wire:model="password" required>
            @error('password')
                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>
            <input type="password" class="shadow appearance-none border rounded @error('password_confirmation') border-red-500 @enderror  w-full py-3 px-3 text-gray-700 leading-tight focus:ring-2 focus:outline-none focus:shadow-outline" id="password_confirmation" placeholder="パスワードを再入力してください" wire:model="password_confirmation" required>
            @error('password_confirmation')
                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-start">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Register')}}
            </button>
        </div>
    </form>
</div>
