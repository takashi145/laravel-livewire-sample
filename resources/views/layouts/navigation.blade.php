<nav class="bg-white shadow dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-3 sm:px-6">
        <div class="flex items-center justify-between h-16">
            <div class="flex pr-4 mr-6">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class=" inline-block text-white text-xl">
                        <x-application-logo class="w-10 h-10" />
                    </a>
                </div>
            </div>

            <div x-data="{dropdown: false, open_menu: false}" x-cloak class="max-w-7xl flex items-center order-2 relative">
                <button type="button" x-on:click="dropdown = !dropdown" class="flex text-gray-700 dark:text-gray-300 hover:scale-110 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
                <div x-show="dropdown" x-on:click.away="dropdown = false" class="z-50 absolute top-4 right-3 my-4 text-base w-40 list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600">
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

                <button class="md:hidden" x-on:click="open_menu = !open_menu">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-white hover:scale-110">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                <div x-show="open_menu" x-on:click="open_menu = false" class="md:hidden fixed inset-0 bg-black/50 z-40"></div>

                <div :class="[open_menu ? 'translate-x-0' : 'translate-x-full']" class="md:hidden fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform bg-white w-3/4 dark:bg-gray-600/80">
                    <h5 class="border-b w-full pb-2 inline-flex items-center mb-4 text-xl font-semibold text-gray-500 dark:text-gray-300">
                        Menu
                    </h5>
                    <button type="button" x-on:click="open_menu = false" class="z-50 text-gray-600 dark:text-gray-300 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <ul class="px-4 space-y-4">
                        <li>
                            <a href="#" class="w-6 h-6 text-gray-500 hover:underline transition duration-75 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">- Home</a>
                        </li>
                        <li>
                            <a href="#" class="w-6 h-6 text-gray-500 hover:underline transition duration-75 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">- About</a>
                        </li>
                        <li>
                            <a href="#" class="w-6 h-6 text-gray-500 hover:underline transition duration-75 dark:text-gray-300 group-hover:text-gray-900 dark:group-hover:text-white">- Services</a>
                        </li>
                    </ul>
                    
                </div>
                
            </div>
            
            <div class="hidden w-full md:flex justify-start items-center order-1">
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
