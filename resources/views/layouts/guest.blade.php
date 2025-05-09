<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Para Mi Amor') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dancing-script:400,500,600,700|quicksand:400,500,600,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap');
            
            :root {
                --color-primary: #4a90e2;
                --color-secondary: #87cefa;
                --color-accent: #e0f7ff;
                --color-white: #ffffff;
                --color-light: #f0f8ff;
                --color-text: #2c3e50;
            }
            
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
            
            /* Form styling */
            input, select, textarea {
                border-color: var(--color-secondary) !important;
            }
            
            input:focus, select:focus, textarea:focus {
                border-color: var(--color-primary) !important;
                box-shadow: 0 0 0 2px rgba(74, 144, 226, 0.25) !important;
            }
            
            button[type="submit"] {
                background-color: var(--color-primary) !important;
            }
            
            button[type="submit"]:hover {
                background-color: #3a80d2 !important;
            }
            
            a {
                color: var(--color-primary) !important;
            }
            
            a:hover {
                color: #3a80d2 !important;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-blue-50 to-blue-100 relative overflow-hidden">
            <!-- Hearts Background -->
            <div class="hearts-container absolute inset-0 pointer-events-none"></div>
            
            <div class="mb-6">
                <a href="/" class="flex items-center">
                   
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-2 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg border border-blue-200 relative">
                {{ $slot }}
                
                <!-- Decorative Heart -->
               
            </div>
            
            
        </div>
        
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
    </body>
</html>
