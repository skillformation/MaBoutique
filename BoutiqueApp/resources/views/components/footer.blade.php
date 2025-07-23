<div>
    <footer class="bg-gray-800 text-gray-300 py-12">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">À Propos</h3>
                <p class="text-sm">Votre boutique en ligne dédiée à l'art de vivre et aux produits de qualité, conçue pour l'excellence et la beauté.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Liens Rapides</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-sm hover:text-white transition-colors duration-300">Accueil</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition-colors duration-300">Catégories</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition-colors duration-300">Nouveautés</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition-colors duration-300">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Aide & Support</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-sm hover:text-white transition-colors duration-300">FAQ</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition-colors duration-300">Livraison & Retours</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition-colors duration-300">Politique de Confidentialité</a></li>
                    <li><a href="#" class="text-sm hover:text-white transition-colors duration-300">Conditions Générales</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Suivez-nous</h3>
                <div class="flex space-x-4 mb-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 .995-2h1.005V3.027A19.587 19.587 0 0014.288 3c-2.488 0-4.162 1.583-4.162 4.015v2.485H7.5v4H10V21h4v-7.5z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8C2 4.6 4.6 2 7.8 2zm-.2 2A4.8 4.8 0 003 7.6v8.8C3 19.4 4.6 21 7.6 21h8.8c3 0 4.6-1.6 4.6-4.4V7.6C21 4.6 19.4 3 16.4 3H7.6zM12 7a5 5 0 100 10 5 5 0 000-10zm0 8a3 3 0 110-6 3 3 0 010 6zM17.5 4c-.7 0-1.3.6-1.3 1.3s.6 1.3 1.3 1.3 1.3-.6 1.3-1.3-.6-1.3-1.3-1.3z"/></svg>
                    </a>
                    </div>
                <h3 class="text-xl font-semibold text-white mb-4">Newsletter</h3>
                <form>
                    <input type="email" placeholder="Votre email" class="w-full p-2 rounded-md bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 mb-2">
                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition-colors duration-300">S'inscrire</button>
                </form>
            </div>
        </div>
        <div class="text-center text-sm text-gray-500 mt-8">
            © 2025 [Nom de votre boutique]. Tous droits réservés.
        </div>
    </footer>

    <script>
        // Logique pour le menu mobile
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMobileMenuButton = document.getElementById('close-mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.add('open');
            mobileMenu.classList.remove('translateX(100%)'); // Supprime la classe de masquage
            document.body.style.overflow = 'hidden'; // Empêche le défilement du corps
        });

        closeMobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
            mobileMenu.classList.add('translateX(100%)'); // Masque le menu
            document.body.style.overflow = ''; // Rétablit le défilement
        });

        // Fermer le menu mobile lors d'un clic sur un lien
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                mobileMenu.classList.add('translateX(100%)');
                document.body.style.overflow = '';
            });
        });

        // Fermer le menu mobile en cliquant en dehors
        document.addEventListener('click', (event) => {
            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target) && mobileMenu.classList.contains('open')) {
                mobileMenu.classList.remove('open');
                mobileMenu.classList.add('translateX(100%)');
                document.body.style.overflow = '';
            }
        });

        // Gestion du contenu dynamique (pour référence future si tu utilises JS pour charger les produits)
        const productsData = [
            // Ici tu peux charger tes données de produits
            // Par exemple:
            // { id: 2, category_id: 1, name: 'Smartphone X', description: 'Un smartphone puissant...', price: '799.99', imageUrl: '...' },
            // ...
        ];

        // Fonction pour afficher les produits (exemple)
        function displayProducts(products) {
            const productsGrid = document.querySelector('#products .grid');
            if (!productsGrid) return;
            productsGrid.innerHTML = ''; // Vide la grille existante

            products.forEach(product => {
                const productCard = `
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                        <div class="relative overflow-hidden">
                            <img src="${product.imageUrl || 'https://via.placeholder.com/400x300/cccccc/ffffff?text=Image+Produit'}" alt="${product.name}" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black bg-opacity-25 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                                <button class="bg-white text-gray-800 py-2 px-4 rounded-full text-sm font-semibold hover:bg-gray-100 transition-colors duration-300">
                                    Voir le produit
                                </button>
                            </div>
                        </div>
                        <div class="p-5">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">${product.name}</h3>
                            <p class="text-gray-600 text-sm mb-3">${product.description || ''}</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-2xl font-bold text-indigo-600">$${product.price}</span>
                                <button class="bg-indigo-600 text-white py-2 px-4 rounded-full text-sm font-semibold hover:bg-indigo-700 transition-colors duration-300">
                                    Ajouter au panier
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                productsGrid.innerHTML += productCard;
            });
        }

        // Appelle la fonction pour afficher les produits au chargement (si tu as tes données JS)
        // displayProducts(productsData);
    </script> 
</div>