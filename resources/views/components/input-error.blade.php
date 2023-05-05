@props(['messages'])

@if($messages)
  @foreach ((array) $messages as $message)
    <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
  @endforeach
@enderror