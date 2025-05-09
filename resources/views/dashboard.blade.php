<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-600 leading-tight font-dancing">
            {{ __('Nuestro Espacio') }}
        </h2>
    </x-slot>

    <div class="py-12 relative overflow-hidden">
        <!-- Floating Hearts Background -->
        <div class="hearts-container absolute inset-0 pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Envelope Animation -->
            <div class="flex justify-center items-center min-h-[70vh]">
                <div class="envelope-container" id="envelope-container">
                    <div class="envelope">
                        <div class="envelope-front">
                            <div class="envelope-flap"></div>
                            <div class="envelope-pocket"></div>
                            <div class="envelope-heart">♥</div>
                        </div>
                        <div class="letter" id="letter">
                            <div class="letter-content">
                                <h2 class="font-dancing text-3xl text-blue-600 mb-6">Bienvenida Mi Amor</h2>
                                <p class="mb-4 text-lg">Cada día que pasa te quiero más. Este es nuestro espacio especial para compartir momentos y recuerdos juntos.</p>
                                <p class="mb-6 italic text-lg">"Eres la persona que ilumina mis días. Cada momento contigo es un tesoro que guardo en mi corazón."</p>
                                <div class="text-right mt-8">
                                    <span class="font-dancing text-blue-600 text-xl">Con amor ♥</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="envelope-instructions" id="envelope-instructions">
                        Haz clic para abrir
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Fullscreen Letter Overlay -->
        <div class="letter-overlay" id="letter-overlay">
            <div class="letter-fullscreen" id="letter-fullscreen">
                <div class="letter-close-btn" id="letter-close-btn">×</div>
                <div class="letter-fullscreen-content">
                    <h2 class="font-dancing text-4xl text-blue-600 mb-8">Para Meu Amor</h2>
                    <p class="mb-6 text-xl">Feliz Aniversário, Meu Amor</p>
                    
                    <p class="mb-4">Escrevo essa carta de forma digital para lembrar para você todos os dias da minha vida o quanto eu amo você, o quanto eu gosto de você e como eu te quero cada dia mais.</p>
                    
                    <p class="mb-4">Você foi quem mudou a minha vida para melhor, trouxe alegria, bons momentos, boas memórias, bons corações e muitos amores.</p>
                    
                    <p class="mb-4">Gosto de cada lembrança que você me traz, cada memória, seja nós no esquimo, andando, no ponto de ônibus, ou quando nos amamos, comendo besteira no shopping Ibituruna, ouvir você reclamar atentamente e não saber o que dizer - cada momento desse me traz uma paz interior que só você é capaz de me passar e capaz de me amar.</p>
                    
                    <p class="mb-4">Eu sei que você foi enviada por Deus e só você é capaz de me proporcionar o que proporciona, pois meu amor por você ultrapassa a barreira da luz tal qual uma Millennium Falcon.</p>
                    
                    <p class="mb-4">Gosto de como sorri das minhas besteiras, de quando está brava, de como é nerdola, de como ama, de como sente nostalgia, de como se sente à vontade para me amar da melhor forma possível.</p>
                    
                    <p class="mb-6">Te amo muito, meu amor!</p>
                    
                    <div class="text-right mt-10">
                        <span class="font-dancing text-blue-600 text-2xl">Com amor ♥</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom styles for the romantic dashboard */
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
        
        /* Envelope styling */
        .envelope-container {
            position: relative;
            cursor: pointer;
            perspective: 1000px;
            width: 300px;
            height: 200px;
            margin: 0 auto;
            transition: transform 0.3s ease;
        }
        
        .envelope-container:hover {
            transform: scale(1.02);
        }
        
        .envelope {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.8s ease;
        }
        
        .envelope-container.envelope-open .envelope {
            transform: rotateX(180deg);
        }
        
        .envelope-front {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            background-color: #e6f0ff;
            border: 2px solid #4a90e2;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .envelope-flap {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background-color: #4a90e2;
            clip-path: polygon(0 0, 100% 0, 50% 100%);
            transform-origin: top;
            transition: transform 0.4s ease;
            z-index: 2;
        }
        
        .envelope-container.envelope-open .envelope-flap {
            transform: rotateX(180deg);
        }
        
        .envelope-pocket {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80%;
            background-color: #c1d8f7;
            border-top: 2px solid #4a90e2;
            border-radius: 0 0 8px 8px;
        }
        
        .envelope-heart {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #ff6b8b;
            font-size: 24px;
            z-index: 3;
        }
        
        .letter {
            position: absolute;
            width: 90%;
            height: 120%;
            top: -10%;
            left: 5%;
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transform: rotateX(180deg);
            backface-visibility: hidden;
            z-index: 1;
            transition: all 0.8s ease;
            overflow: hidden;
        }
        
        .envelope-container.envelope-open .letter {
            opacity: 0;
            transition-delay: 0.2s;
        }
        
        .letter-content {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        
        .envelope-instructions {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #4a90e2;
            opacity: 0.8;
        }
        
        /* Fullscreen letter overlay */
        .letter-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        
        .letter-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .letter-fullscreen {
            position: relative;
            width: 90%;
            max-width: 800px;
            height: auto;
            max-height: 80vh;
            background-color: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            opacity: 0;
            transition: transform 0.5s ease, opacity 0.5s ease;
            overflow-y: auto;
        }
        
        .letter-overlay.active .letter-fullscreen {
            transform: scale(1);
            opacity: 1;
            transition-delay: 0.2s;
        }
        
        .letter-close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 30px;
            color: #4a90e2;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        
        .letter-close-btn:hover {
            color: #ff6b8b;
        }
        
        .letter-fullscreen-content {
            padding: 10px;
        }
        
        /* Animation for letter appearance */
        @keyframes letterAppear {
            0% {
                transform: translateY(50px) scale(0.8);
                opacity: 0;
            }
            100% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }
        
        .letter-overlay.active .letter-fullscreen-content {
            animation: letterAppear 0.8s ease forwards;
            animation-delay: 0.4s;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .letter-fullscreen {
                padding: 30px 20px;
                width: 95%;
            }
            
            .letter-fullscreen-content h2 {
                font-size: 1.75rem;
            }
            
            .letter-fullscreen-content p {
                font-size: 1rem;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heartsContainer = document.querySelector('.hearts-container');
            const envelopeContainer = document.getElementById('envelope-container');
            const envelopeInstructions = document.getElementById('envelope-instructions');
            const letterOverlay = document.getElementById('letter-overlay');
            const letterCloseBtn = document.getElementById('letter-close-btn');
            let isOpen = false;
            let isAnimating = false;
            
            // Envelope click handler
            envelopeContainer.addEventListener('click', function() {
                if (!isAnimating) {
                    isAnimating = true;
                    isOpen = !isOpen;
                    
                    if (isOpen) {
                        envelopeContainer.classList.add('envelope-open');
                        envelopeInstructions.textContent = 'Haz clic para cerrar';
                        
                        // Show the fullscreen letter after a short delay
                        setTimeout(function() {
                            letterOverlay.classList.add('active');
                            document.body.style.overflow = 'hidden'; // Prevent scrolling
                        }, 600);
                    } else {
                        envelopeContainer.classList.remove('envelope-open');
                        envelopeInstructions.textContent = 'Haz clic para abrir';
                        letterOverlay.classList.remove('active');
                        document.body.style.overflow = ''; // Restore scrolling
                    }
                    
                    setTimeout(function() {
                        isAnimating = false;
                    }, 1000);
                }
            });
            
            // Close button click handler
            letterCloseBtn.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent event bubbling
                
                if (!isAnimating) {
                    isAnimating = true;
                    isOpen = false;
                    
                    letterOverlay.classList.remove('active');
                    envelopeContainer.classList.remove('envelope-open');
                    envelopeInstructions.textContent = 'Haz clic para abrir';
                    document.body.style.overflow = ''; // Restore scrolling
                    
                    setTimeout(function() {
                        isAnimating = false;
                    }, 1000);
                }
            });
            
            // Close letter when clicking outside the letter content
            letterOverlay.addEventListener('click', function(e) {
                if (e.target === letterOverlay) {
                    letterCloseBtn.click();
                }
            });
            
            // Create floating hearts function
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
            
            // Add keyboard support to close the letter with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && isOpen) {
                    letterCloseBtn.click();
                }
            });
        });
    </script>
</x-app-layout>