@props(['for', 'value'])

<label for="{{ $for }}" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">{{ $value ?? $slot }}</label>
