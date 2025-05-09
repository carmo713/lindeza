<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Para Mi Amor</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dancing-script:400,500,600,700|quicksand:400,500,600,700" rel="stylesheet" />
    
    <style>
        /* Base styles */
        :root {
            --color-primary: #4a90e2;
            --color-secondary: #87cefa;
            --color-accent: #e0f7ff;
            --color-white: #ffffff;
            --color-light: #f0f8ff;
            --color-text: #2c3e50;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, var(--color-light) 0%, var(--color-white) 100%);
            color: var(--color-text);
            min-height: 100vh;
            line-height: 1.6;
        }
        
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 2rem;
            display: flex;
        }
        
        /* Header */
        header {
            text-align: center;
            padding: 2rem 0;
            position: relative;
            width: 100%;
        }
        
        .title {
            font-family: 'Dancing Script', cursive;
            font-size: 3.5rem;
            color: var(--color-primary);
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .subtitle {
            font-size: 1.2rem;
            color: var(--color-text);
            margin-bottom: 2rem;
        }
        
        /* Hearts animation */
        .hearts {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
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
        
        /* Side photos */
        .side-photos {
            width: 20%;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
            height: 100vh;
            overflow-y: auto;
        }
        
        .photo-item {
            height: 200px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin-bottom: 1rem;
        }
        
        .photo-item:hover {
            transform: scale(1.05);
        }
        
        .photo-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Main content */
        .main-content {
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 3rem;
            padding: 0 2rem;
        }
        
        /* Poetry section */
        .poetry-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: var(--color-white);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(74, 144, 226, 0.2);
            max-width: 800px;
            width: 100%;
        }
        
        .love-message {
            font-family: 'Dancing Script', cursive;
            font-size: 1.8rem;
            color: var(--color-primary);
            text-align: center;
            margin-bottom: 1rem;
        }
        
        .love-description {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Footer */
        footer {
            text-align: center;
            padding: 2rem 0;
            margin-top: 3rem;
            color: var(--color-text);
            width: 100%;
        }
        
        .footer-heart {
            color: var(--color-primary);
            font-size: 1.5rem;
            animation: pulse 1s infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
        }
        
        /* Auth links */
        .auth-container {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            gap: 1.5rem;
        }
        
        .auth-link {
            padding: 0.75rem 1.5rem;
            background-color: var(--color-primary);
            color: var(--color-white);
            text-decoration: none;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(74, 144, 226, 0.2);
            display: flex;
            align-items: center;
        }
        
        .auth-link:hover {
            background-color: var(--color-secondary);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(74, 144, 226, 0.3);
        }
        
        .auth-link svg {
            margin-right: 0.5rem;
            width: 18px;
            height: 18px;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .container {
                flex-direction: column;
            }
            
            .side-photos {
                width: 100%;
                flex-direction: row;
                overflow-x: auto;
                padding: 0.5rem;
                height: auto;
            }
            
            .side-photos .photo-item {
                min-width: 150px;
                height: 150px;
            }
            
            .main-content {
                width: 100%;
                padding: 0;
            }
        }
        
        @media (max-width: 768px) {
            .title {
                font-size: 2.5rem;
            }
            
            .main-content {
                gap: 2rem;
            }
            
            .love-message {
                font-size: 1.5rem;
            }
            
            .auth-container {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="side-photos">
            <div class="photo-item">
                <img src="{{ asset('img/1.jpeg') }}" alt="Foto juntos">
            </div>
            <div class="photo-item">
                <img src="{{ asset('img/2.jpeg') }}" alt="Foto de amor">
            </div>
            <div class="photo-item">
                <img src="{{ asset('img/3.jpeg') }}" alt="Momentos juntos">
            </div>
            <div class="photo-item">
                <img src="{{ asset('img/4.jpeg') }}" alt="Sonrisas">
            </div>
            <div class="photo-item">
                <img src="{{ asset('img/5.jpeg') }}" alt="Abrazos">
            </div>
            
        </div>
        
        <div class="main-content">
            <header>
                <div class="hearts">
                    <!-- Hearts will be added with JavaScript -->
                </div>
                
                <h1 class="title">Para Mi Amor</h1>
                <p class="subtitle">Cada día te quiero más y más</p>
            </header>
            
            <section class="poetry-section">
                <h2 class="love-message">Soneto de Fidelidade</h2>
                <p class="love-description">
                    "De tudo ao meu amor serei atento<br>
                    Antes, e com tal zelo, e sempre, e tanto<br>
                    Que mesmo em face do maior encanto<br>
                    Dele se encante mais meu pensamento.<br>
                    <br>
                    Quero vivê-lo em cada vão momento<br>
                    E em seu louvor hei de espalhar meu canto<br>
                    E rir meu riso e derramar meu pranto<br>
                    Ao seu pesar ou seu contentamento<br>
                    <br>
                    E assim, quando mais tarde me procure<br>
                    Quem sabe a morte, angústia de quem vive<br>
                    Quem sabe a solidão, fim de quem ama<br>
                    <br>
                    Eu possa me dizer do amor (que tive):<br>
                    Que não seja imortal, posto que é chama<br>
                    Mas que seja infinito enquanto dure."
                </p>
                
                <div class="auth-container">
                    <a href="/login" class="auth-link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10 17 15 12 10 7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg>
                        Login
                    </a>
                    <a href="/register" class="auth-link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                        Register
                    </a>
                </div>
            </section>
            
            <footer>
                <p>Hecho con <span class="footer-heart">♥</span> para ti</p>
            </footer>
        </div>
        
        <div class="side-photos">
            <div class="photo-item">
                <img src="{{ asset('img/6.jpeg') }}" alt="Foto de nosotros">
            </div>
            <div class="photo-item">
                <img src="{{ asset('img/7.jpeg') }}" alt="Recuerdos">
            </div>
            <div class="photo-item">
                <img src="{{ asset('img/11.jpeg') }}" alt="Cariño">
            </div>
            <div class="photo-item">
                <img src="{{ asset('img/9.jpeg') }}" alt="Viajes">
            </div>
            <div class="photo-item">
                <img src="{{ asset('img/10.jpeg') }}" alt="Aventuras">
            </div>
        </div>
    </div>
    <script>
        // Create floating hearts
        const heartsContainer = document.querySelector('.hearts');
        
        function createHeart() {
            const heart = document.createElement('div');
            heart.classList.add('heart');
            
            // Random position
            heart.style.left = Math.random() * 100 + 'vw';
            heart.style.top = '100%';
            
            // Random size
            const size = Math.random() * 20 + 10;
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
        setInterval(createHeart, 300);
        
        // Initial hearts
        for (let i = 0; i < 20; i++) {
            setTimeout(createHeart, 100 * i);
        }
    </script>
</body>
</html>