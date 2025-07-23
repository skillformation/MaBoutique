

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackam Boutique - Navigation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Styles personnalisés pour le menu mobile et la barre de recherche */

        /* Menu Mobile (slide-in depuis la gauche) */
        .mobile-menu {
            transition: transform 0.3s ease-out;
            transform: translateX(-100%); /* Masqué à gauche par défaut */
        }
        .mobile-menu.open {
            transform: translateX(0); /* Visible */
        }
        
        /* Barre de recherche full-width pour Mobile/Tablette (apparaît en dessous de la nav) */
        .search-overlay {
            transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }
        .search-overlay.open {
            max-height: 60px; /* Hauteur suffisante pour l'input */
            opacity: 1;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-900 bg-white">

    <nav class="bg-white border-b border-gray-100 fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between h-20">

            <div class="flex items-center space-x-6 lg:space-x-8">
                <button id="menu-button" class="flex items-center text-gray-800 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <span class="ml-2 hidden sm:inline">Menu</span>
                </button>

                <div class="hidden lg:flex items-center space-x-2 w-72">
                    <svg class="h-5 w-5 text-gray-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" placeholder="Que recherchez-vous ?" class="flex-grow border-none focus:ring-0 placeholder-gray-500 text-gray-800 p-0 text-sm" />
                </div>
                <button id="search-mobile-button" class="lg:hidden text-gray-800 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
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

        <div id="mobile-menu" class="mobile-menu fixed inset-y-0 left-0 w-64 bg-white shadow-lg p-6 lg:hidden z-40">
            <div class="flex justify-end mb-6">
                <button id="close-mobile-menu" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
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

        <div id="search-overlay" class="search-overlay bg-white border-b border-gray-100 py-3 px-4 lg:hidden">
            <div class="container mx-auto flex items-center space-x-2">
                <svg class="h-5 w-5 text-gray-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Que recherchez-vous ?" class="flex-grow border-none focus:ring-0 placeholder-gray-500 text-gray-800 p-0 text-base" />
                <button id="close-search-overlay" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

   

    <script>
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMobileMenuButton = document.getElementById('close-mobile-menu');
        const searchMobileButton = document.getElementById('search-mobile-button');
        const searchOverlay = document.getElementById('search-overlay');
        const closeSearchOverlayButton = document.getElementById('close-search-overlay');
        const body = document.body;

        function toggleMobileMenu() {
            mobileMenu.classList.toggle('open');
            if (mobileMenu.classList.contains('open')) {
                body.style.overflow = 'hidden';
                if (searchOverlay.classList.contains('open')) {
                    searchOverlay.classList.remove('open');
                }
            } else {
                body.style.overflow = '';
            }
        }

        function toggleSearchOverlay() {
            searchOverlay.classList.toggle('open');
            if (searchOverlay.classList.contains('open')) {
                if (mobileMenu.classList.contains('open')) {
                    mobileMenu.classList.remove('open');
                    body.style.overflow = '';
                }
            }
        }

        menuButton.addEventListener('click', toggleMobileMenu);
        closeMobileMenuButton.addEventListener('click', toggleMobileMenu);

        searchMobileButton.addEventListener('click', toggleSearchOverlay);
        closeSearchOverlayButton.addEventListener('click', toggleSearchOverlay);

        document.addEventListener('click', (event) => {
            const isClickInsideMobileMenu = mobileMenu.contains(event.target) || menuButton.contains(event.target);
            if (!isClickInsideMobileMenu && mobileMenu.classList.contains('open')) {
                toggleMobileMenu();
            }
            const isClickInsideSearchOverlay = searchOverlay.contains(event.target) || searchMobileButton.contains(event.target);
            if (!isClickInsideSearchOverlay && searchOverlay.classList.contains('open') && window.innerWidth < 1024) { 
                if (event.target !== searchOverlay.querySelector('input')) {
                    toggleSearchOverlay();
                }
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                if (mobileMenu.classList.contains('open')) {
                    mobileMenu.classList.remove('open');
                    body.style.overflow = '';
                }
                if (searchOverlay.classList.contains('open')) {
                    searchOverlay.classList.remove('open');
                }
            }
        });

    </script>

</body>
</html>