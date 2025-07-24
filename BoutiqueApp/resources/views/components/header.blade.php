
    

    <nav class="bg-white border-b border-gray-100 fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between h-20">
    
            <div class="flex items-center space-x-6 lg:space-x-8">
                <button id="menu-button" class="flex items-center text-gray-800 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <span class="ml-2 hidden sm:inline">Menu</span>
                </button>
            </div>
    
            <a href="#" class="absolute left-1/2 -translate-x-1/2 text-3xl font-bold tracking-wider text-gray-900 uppercase">
                BLACKAM BOUTIQUE
            </a>
    
            <div class="flex items-center space-x-6 lg:space-x-8">
                <a href="#" class="text-gray-800 hover:text-gray-900 transition-colors duration-300 hidden md:inline">Contactez-nous</a>
                
                <button class="text-gray-800 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <button class="text-gray-800 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </button>
                <button class="relative text-gray-800 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span class="absolute -top-1 -right-1 bg-gray-900 text-white text-xs font-medium rounded-full h-4 w-4 flex items-center justify-center">0</span>
                </button>
            </div>
        </div>
    
        <div id="off-canvas-menu" class="off-canvas-menu fixed inset-y-0 left-0 w-64 bg-white shadow-lg p-6 z-40">
            <div class="flex justify-end mb-6">
                <button id="close-menu" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
    
            <div class="flex items-center space-x-2 mb-6 border-b border-gray-200 pb-4">
                <svg class="h-5 w-5 text-gray-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Que recherchez-vous ?" class="flex-grow border-none focus:ring-0 placeholder-gray-500 text-gray-800 p-0 text-base" />
            </div>
    
            <ul class="space-y-4 text-gray-800 text-lg">
                <li><a href="#" class="block hover:text-gray-900">Accueil</a></li>
                <li><a href="#" class="block hover:text-gray-900">Nouveautés</a></li>
                <li><a href="#" class="block hover:text-gray-900">Catégories</a></li>
                <li><a href="#" class="block hover:text-gray-900">Promotions</a></li>
                <li class="border-t border-gray-200 pt-4 mt-4"><a href="#" class="block hover:text-gray-900">Mon Compte</a></li>
                <li><a href="#" class="block hover:text-gray-900">Contactez-nous</a></li>
            </ul>
        </div>
    </nav>
    
    <script>
        const menuButton = document.getElementById('menu-button');
        const offCanvasMenu = document.getElementById('off-canvas-menu');
        const closeMenuButton = document.getElementById('close-menu');
        const body = document.body;
    
        function toggleOffCanvasMenu() {
            offCanvasMenu.classList.toggle('open');
            if (offCanvasMenu.classList.contains('open')) {
                body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
            } else {
                body.style.overflow = ''; // Restore scrolling
            }
        }
    
        menuButton.addEventListener('click', toggleOffCanvasMenu);
        closeMenuButton.addEventListener('click', toggleOffCanvasMenu);
    
        // Close menu when clicking outside (on desktop)
        document.addEventListener('click', (event) => {
            const isClickInsideMenu = offCanvasMenu.contains(event.target) || menuButton.contains(event.target);
            if (!isClickInsideMenu && offCanvasMenu.classList.contains('open')) {
                toggleOffCanvasMenu();
            }
        });
    
        // Handle closing menu on resize if it was open (good practice)
        window.addEventListener('resize', () => {
            if (offCanvasMenu.classList.contains('open')) {
                toggleOffCanvasMenu();
            }
        });
    </script>
    
    <style>
        /* Basic styling for the off-canvas menu to slide in/out */
        .off-canvas-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
    
        .off-canvas-menu.open {
            transform: translateX(0);
        }
    </style>
