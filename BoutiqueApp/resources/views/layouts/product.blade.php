<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Boutique d'Élégance - Concours Meilleur Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Personnalisation Tailwind si nécessaire, ou extension de la configuration */
        :root {
            --color-primary-500: #6366f1; /* Exemple de couleur primaire (indigo-500) */
            --color-primary-600: #4f46e5; /* Exemple de couleur primaire au hover */
        }
        .container {
            max-width: 1200px; /* Adaptez à votre préférence de largeur de contenu */
        }
        /* Styles pour le menu mobile (à activer avec JS) */
        .mobile-menu {
            transition: transform 0.3s ease-out;
            transform: translateX(100%); /* Masqué par défaut */
        }
        .mobile-menu.open {
            transform: translateX(0); /* Visible */
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'indigo': { // Définition de la palette indigo pour correspondre aux exemples
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                            950: '#1e1b4b',
                        },
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-50">

    <x-header/>
    {{-- Contenu principal de la page --}}
    @yield('content')
        
    
    <x-footer/>

</body>
</html>