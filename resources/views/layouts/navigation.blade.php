<nav x-data="{ open: false }" class="bg-gradient-to-r from-blue-50 to-blue-100 border-b border-blue-200">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo Centered -->
            <div class="flex-1 flex justify-center items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <!-- Llama Logo -->
                    <div class="h-9 w-9 mr-2">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="Tina--Streamline-Simple-Icons" height="24" width="24"><desc>Tina Streamline Icon: https://streamlinehq.com</desc><title>Tina</title><path d="M14.46 10.662c1.166 -0.965 1.683 -6.666 2.188 -8.715 0.505 -2.05 2.593 -1.946 2.593 -1.946s-0.542 0.944 -0.321 1.648c0.221 0.704 1.736 1.333 1.736 1.333l-0.327 0.861s-0.682 -0.087 -1.088 0.725c-0.406 0.812 0.261 8.853 0.261 8.853s-2.44 4.813 -2.44 6.845 0.962 3.734 0.962 3.734l-1.35 0s-1.98 -2.356 -2.386 -3.533c-0.406 -1.178 -0.243 -2.355 -0.243 -2.355s-2.152 -0.122 -4.061 0c-1.908 0.122 -3.181 1.762 -3.41 2.68 -0.23 0.917 -0.325 3.208 -0.325 3.208l-1.067 0c-0.65 -2.004 -1.166 -2.722 -0.886 -3.734 0.776 -2.804 0.623 -4.394 0.444 -5.102 -0.18 -0.708 -1.395 -1.326 -1.395 -1.326 0.595 -1.213 1.203 -1.796 3.817 -1.857 2.613 -0.06 6.132 -0.354 7.298 -1.319Zm-5.183 8.209s0.136 3.708 1.392 5.129l-1.256 0c-1.464 -1.3 -1.74 -3.852 -1.74 -3.852 0.081 -0.324 0.965 -1.069 1.604 -1.277Z" fill="#245e8e" stroke-width="1"></path></svg>
                    </div>
                    <span class="font-dancing text-blue-600 text-xl">Mi Amor</span>
                </a>
            </div>

            <!-- Settings Dropdown -->
            <div class="flex items-center">
                <!-- Heart Animation -->
                <div class="mr-4 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 animate-pulse" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                </div>
                
                <div class="hidden sm:flex sm:items-center">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="inline-flex items-center px-3 py-2 border border-blue-200 text-sm leading-4 font-medium rounded-md text-blue-600 bg-white hover:text-blue-800 hover:bg-blue-50 focus:outline-none transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            {{ __('Cerrar Sesión') }}
                        </button>
                    </form>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-blue-500 hover:text-blue-700 hover:bg-blue-100 focus:outline-none focus:bg-blue-100 focus:text-blue-700 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-blue-200 bg-blue-50">
            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                            class="text-blue-600">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            {{ __('Cerrar Sesión') }}
                        </span>
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap');
        
        .font-dancing {
            font-family: 'Dancing Script', cursive;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }
        
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
</nav>
