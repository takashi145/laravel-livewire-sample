<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex border-r pr-4 mr-6">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-white text-xl">
                        <x-application-logo />
                    </a>
                </div>
            </div>

            <div x-data="{dropdown: false}" class="flex items-center order-2">
                <button type="button" x-on:click="dropdown = !dropdown" class="flex mr-3 text-gray-700 dark:text-gray-300 hover:underline md:mr-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
                <div x-show="dropdown" x-on:click.away="dropdown = false" class="z-50 absolute top-10 right-4 my-4 text-base w-40 list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">{{ __('Profile') }}</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                                <button type="submit" class="flex justify-start w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">{{ __('Logout')}}</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="w-full flex justify-start items-center order-1">
                <ul class="flex flex-row p-4 md:p-0 md:space-x-8 md:mt-0">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:text-blue-700 md:p-0 dark:text-white dark:hover:text-blue-500 dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:text-blue-700 md:p-0 dark:text-white dark:hover:text-blue-500 dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:text-blue-700 md:p-0 dark:text-white dark:hover:text-blue-500 dark:border-gray-700">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>