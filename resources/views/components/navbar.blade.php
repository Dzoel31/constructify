<nav class="flex justify-between items-center px-0 py-2.5" x-data="{ isOpen: false }">
    <div class="text-[#4D869C] ml-5">
        <a class="font-bold text-xl no-underline hover:text-[#4D869C]" href="/">Constructify</a>
    </div>
    <div>
        <a class="text-[#4D869C] no-underline text-xl px-5 py-0 hover:text-black hover:trasition[-0.3s]" href="/">Home</a>
        <a class="text-[#4D869C] no-underline text-xl px-5 py-0 hover:text-black hover:trasition[-0.3s]" href="/shop">Shop</a>
        <a class="text-[#4D869C] no-underline text-xl px-5 py-0 hover:text-black hover:trasition[-0.3s]" href="/history">History</a>
    </div>
    <div class="flex items-center mr-5">
        <a class="text-[#4D869C] no-underline text-xl px-5 py-0 hover:text-black hover:transition[-0.3s]" href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
        <div class="relative ml-3">
            <div>
                <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full  text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 hover:text-[#4D869C]" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    @if ( $user )
                    <p class="text-xl"> {{ $user->name }}</p>
                    @else
                    <i class="text-2xl fa-solid fa-user-circle text-[#4D869C]"></i>
                    @endif
                </button>
            </div>

            <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                @if ( $user && $user->role == 'admin')
                    <a href="/admin/dashboard" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
                @endif

                @if ( !$user )
                <a href="/login" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Login</a>
                @endif
        
                @if (auth()->check())
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="block px-4 py-2 text-sm text-gray-700">
                        @csrf
                        <button type="submit" role="menuitem" tabindex="-1" class="w-full text-left">Logout</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</nav>