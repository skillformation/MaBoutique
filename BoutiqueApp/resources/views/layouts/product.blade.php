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

    <x-header/>
    {{-- Contenu principal de la page --}}
    @yield('content')
        
    
    <x-footer/>

</body>
</html>