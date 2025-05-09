<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-blue-50 to-blue-100 relative overflow-hidden">
        <!-- Hearts Background -->
        <div class="hearts-container absolute inset-0 pointer-events-none"></div>
        
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg border border-blue-200">
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <div class="flex items-center">
                    <div class="h-12 w-12 mr-2">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="Tina--Streamline-Simple-Icons">
                            <desc>Tina Streamline Icon: https://streamlinehq.com</desc>
                            <title>Tina</title>
                            <path d="M14.46 10.662c1.166 -0.965 1.683 -6.666 2.188 -8.715 0.505 -2.05 2.593 -1.946 2.593 -1.946s-0.542 0.944 -0.321 1.648c0.221 0.704 1.736 1.333 1.736 1.333l-0.327 0.861s-0.682 -0.087 -1.088 0.725c-0.406 0.812 0.261 8.853 0.261 8.853s-2.44 4.813 -2.44 6.845 0.962 3.734 0.962 3.734l-1.35 0s-1.98 -2.356 -2.386 -3.533c-0.406 -1.178 -0.243 -2.355 -0.243 -2.355s-2.152 -0.122 -4.061 0c-1.908 0.122 -3.181 1.762 -3.41 2.68 -0.23 0.917 -0.325 3.208 -0.325 3.208l-1.067 0c-0.65 -2.004 -1.166 -2.722 -0.886 -3.734 0.776 -2.804 0.623 -4.394 0.444 -5.102 -0.18 -0.708 -1.395 -1.326 -1.395 -1.326 0.595 -1.213 1.203 -1.796 3.817 -1.857 2.613 -0.06 6.132 -0.354 7.298 -1.319Zm-5.183 8.209s0.136 3.708 1.392 5.129l-1.256 0c-1.464 -1.3 -1.74 -3.852 -1.74 -3.852 0.081 -0.324 0.965 -1.069 1.604 -1.277Z" fill="#245e8e" stroke-width="1"></path>
                        </svg>
                    </div>
                    <h1 class="font-dancing text-blue-600 text-3xl">Mi Amor</h1>
                </div>
            </div>
            
            <h2 class="text-center font-dancing text-2xl text-blue-600 mb-6">Bienvenido</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-blue-600" />
                    <x-text-input id="email" class="block mt-1 w-full border-blue-200 focus:border-blue-400 focus:ring-blue-400 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-blue-600" />

                    <x-text-input id="password" class="block mt-1 w-full border-blue-200 focus:border-blue-400 focus:ring-blue-400 rounded-md shadow-sm"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-blue-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                        <span class="ms-2 text-sm text-blue-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                        

                    <button type="submit" class="ms-3 inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        {{ __('Log in') }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>
            </form>
            
            
            
            <!-- Decorative Heart -->
            <div class="absolute -bottom-2 -right-2 text-blue-500 text-4xl transform rotate-12">♥</div>
        </div>
    </div>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap');
        
        .font-dancing {
            font-family: 'Dancing Script', cursive;
        }
        
        /* Hearts animation */
        .hearts-container {
            overflow: hidden;
            z-index: 0;
        }
        
        .heart {
            position: absolute;
            width: 20px;
            height: 20px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%234a90e2' width='24px' height='24px'%3E%3Cpath d='M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z'/%3E%3C/svg%3E") no-repeat center center;
            opacity: 0.7;
            animation: float 10s linear infinite;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.7;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
    
    <script>
        // Create floating hearts
        document.addEventListener('DOMContentLoaded', function() {
            const heartsContainer = document.querySelector('.hearts-container');
            
            function createHeart() {
                const heart = document.createElement('div');
                heart.classList.add('heart');
                
                // Random position
                heart.style.left = Math.random() * 100 + 'vw';
                heart.style.top = '100%';
                
                // Random size
                const size = Math.random() * 15 + 10;
                heart.style.width = size + 'px';
                heart.style.height = size + 'px';
                
                // Random animation duration
                heart.style.animationDuration = Math.random() * 15 + 5 + 's';
                
                heartsContainer.appendChild(heart);
                
                // Remove heart after animation completes
                setTimeout(() => {
                    heart.remove();
                }, 20000);
            }
            
            // Create hearts at intervals
            setInterval(createHeart, 500);
            
            // Initial hearts
            for (let i = 0; i < 10; i++) {
                setTimeout(createHeart, 100 * i);
            }
        });
    </script>
</x-guest-layout>
