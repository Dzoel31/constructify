<nav class="bg-white border-gray-200">
    <div class="w-full  flex flex-wrap items-center justify-between p-2">
        <a href="{{ route('landing') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <h1 class="text-2xl text-[#4D869C] font-bold">Constructify</h1>
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="../images/blank-user.jpg" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                    @if(auth()->user())
                    <span class="block text-sm text-gray-900"> {{ $user->name }} </span>
                    <span class="block text-sm  text-gray-500 truncate"> {{ $user->email }}</span>
                    @endif
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    @if(auth()->user() && auth()->user()->role === 'admin')
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                    </li>
                    @if( !$user)
                    <li>
                        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign in</a>
                    </li>
                    @endif
                    @if(auth()->check())
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                    @endif
                </ul>
            </div>
            <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul x-data="{ currentRoute: '{{ Route::currentRouteName() }}' }" class="flex flex-col font-medium md:p-0 border-gray-200 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-80 dark:border-gray-700">
                <li>
                    <a href="{{ route('landing') }}" :class="{ 'font-bold text-white bg-[#4D869C]': currentRoute === 'landing', 'text-[#1a202c]': currentRoute !== 'landing' }" class="block py-2 px-3 text-[#1a202c] rounded hover:text-white md:hover:bg-transparent md:hover:text-[#2b6cb0] md:p-0 dark:text-[#4D869C] md:dark:hover:text-white dark:hover:bg-[#4D869C] dark:hover:text-white dark:border-gray-700" aria-current="page">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop') }}" :class="{ 'font-bold text-white bg-[#4D869C]': currentRoute === 'shop', 'text-[#1a202c]': currentRoute !== 'shop' }" class="block py-2 px-3 text-[#1a202c] rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-[#2b6cb0] md:p-0 dark:text-[#4D869C] md:dark:hover:text-white dark:hover:bg-[#4D869C] dark:hover:text-white dark:border-gray-700">
                        Shop
                    </a>
                </li>
                <li>
                    <a href="{{ route('history') }}" :class="{ 'font-bold text-white bg-[#4D869C]': currentRoute === 'history', 'text-[#1a202c]': currentRoute !== 'history' }" class="block py-2 px-3 text-[#1a202c] rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-[#2b6cb0] md:p-0 dark:text-[#4D869C] md:dark:hover:text-white dark:hover:bg-[#4D869C] dark:hover:text-white dark:border-gray-700">
                        History
                    </a>
                </li>
                <li>
                    <a href="{{ route('cart') }}" :class="{ 'font-bold text-white bg-[#4D869C]': currentRoute === 'cart', 'text-[#1a202c]': currentRoute !== 'cart' }" class="block py-2 px-3 text-[#1a202c] rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-[#2b6cb0] md:p-0 dark:text-[#4D869C] md:dark:hover:text-white dark:hover:bg-[#4D869C] dark:hover:text-white dark:border-gray-700">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>