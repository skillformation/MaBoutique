@extends('layouts.product')
@section('content')
@props(['product'])
{{-- @dd($cartProducts) --}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier d'Achat</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Personnalisation de la police Inter */
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Styles pour les transitions et les effets visuels */
        .cart-item {
            transition: all 0.3s ease-in-out;
        }
        .cart-item.removing {
            opacity: 0;
            transform: translateX(-20px);
        }
        .quantity-input::-webkit-outer-spin-button,
        .quantity-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .quantity-input {
            -moz-appearance: textfield; /* Firefox */
        }
    </style>
</head>
<body class="bg-gray-100 p-4 sm:p-6 lg:p-8">
    <div class="container mx-auto max-w-4xl bg-white rounded-xl shadow-lg p-6 md:p-8">
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 text-center">Votre Panier</h1>

        <!-- Conteneur des articles du panier -->
        <div id="cart-items-container" class="space-y-6 mb-8">
            

            
        @forelse ($cartProducts as $cartProduct)
          <x-item-cart :cartProduct="$cartProduct" />
        @empty
            Pas de produit
        @endforelse
            

           


        <!-- Résumé du panier -->
        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-3">
                <span class="text-gray-700 text-lg">Sous-total:</span>
                <span class="text-gray-900 text-lg font-semibold">€<span id="subtotal">0.00</span></span>
            </div>
            <div class="flex justify-between items-center mb-3">
                <span class="text-gray-700 text-lg">Livraison:</span>
                <span class="text-gray-900 text-lg font-semibold">€<span id="shipping">5.00</span></span>
            </div>
            <div class="border-t border-gray-200 my-4"></div>
            <div class="flex justify-between items-center">
                <span class="text-gray-900 text-xl font-bold">Total:</span>
                <span class="text-gray-900 text-xl font-bold">€<span id="total">0.00</span></span>
            </div>
            <button class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors duration-200 mt-6 shadow-md">
                Procéder au paiement
            </button>
        </div>
    </div>

    {{-- <script>
        // Obtenir les références des éléments DOM
        const cartItemsContainer = document.getElementById('cart-items-container');
        const subtotalSpan = document.getElementById('subtotal');
        const shippingSpan = document.getElementById('shipping');
        const totalSpan = document.getElementById('total');
        const addItemBtn = document.getElementById('add-item-btn');

        // Prix de livraison fixe
        const SHIPPING_COST = 5.00;

        // Liste des produits disponibles pour l'ajout aléatoire
        const availableProducts = [
            { id: 3, name: 'Baskets Urbaines', price: 75.00, details: 'Taille: 42, Couleur: Blanc', image: 'https://placehold.co/100x100/E0E7FF/4F46E5?text=Baskets' },
            { id: 4, name: 'Robe d\'Été Fleurie', price: 55.99, details: 'Taille: S, Couleur: Multicolore', image: 'https://placehold.co/100x100/E0E7FF/4F46E5?text=Robe' },
            { id: 5, name: 'Casquette Sport', price: 18.25, details: 'Taille: Unique, Couleur: Bleu Marine', image: 'https://placehold.co/100x100/E0E7FF/4F46E5?text=Casquette' },
            { id: 6, name: 'Sac à Dos Vintage', price: 62.00, details: 'Matériau: Cuir, Couleur: Marron', image: 'https://placehold.co/100x100/E0E7FF/4F46E5?text=Sac' }
        ];
        let nextProductId = 7; // Pour les nouveaux articles ajoutés

        /**
         * Met à jour le sous-total, les frais de livraison et le total du panier.
         */
        function updateCartSummary() {
            let subtotal = 0;
            // Parcourir tous les articles du panier
            document.querySelectorAll('.cart-item').forEach(item => {
                const price = parseFloat(item.dataset.price);
                const quantity = parseInt(item.querySelector('.quantity-input').value);
                subtotal += price * quantity;
            });

            const total = subtotal + SHIPPING_COST;

            // Mettre à jour les éléments HTML avec les nouvelles valeurs
            subtotalSpan.textContent = subtotal.toFixed(2);
            shippingSpan.textContent = SHIPPING_COST.toFixed(2);
            totalSpan.textContent = total.toFixed(2);
        }

        /**
         * Gère le clic sur les boutons d'augmentation/diminution de quantité.
         * @param {Event} event - L'objet événement du clic.
         */
        function handleQuantityChange(event) {
            const button = event.target.closest('.quantity-btn');
            if (!button) return; // S'assurer que le clic est sur un bouton de quantité

            const itemDiv = button.closest('.cart-item');
            const quantityInput = itemDiv.querySelector('.quantity-input');
            let currentQuantity = parseInt(quantityInput.value);

            if (button.classList.contains('increase-quantity')) {
                quantityInput.value = currentQuantity + 1;
            } else if (button.classList.contains('decrease-quantity')) {
                if (currentQuantity > 1) { // Ne pas descendre en dessous de 1
                    quantityInput.value = currentQuantity - 1;
                }
            }
            updateCartSummary(); // Recalculer le total après le changement de quantité
        }

        /**
         * Gère la saisie directe dans le champ de quantité.
         * @param {Event} event - L'objet événement de saisie.
         */
        function handleQuantityInput(event) {
            const input = event.target;
            let value = parseInt(input.value);
            if (isNaN(value) || value < 1) {
                input.value = 1; // S'assurer que la quantité est au moins 1
            }
            updateCartSummary(); // Recalculer le total après la saisie
        }

        /**
         * Gère le clic sur le bouton de suppression d'article.
         * @param {Event} event - L'objet événement du clic.
         */
        function handleRemoveItem(event) {
            const button = event.target.closest('.remove-item-btn');
            if (!button) return;

            const itemDiv = button.closest('.cart-item');
            // Ajouter une classe pour l'animation de suppression
            itemDiv.classList.add('removing');

            // Attendre la fin de l'animation avant de supprimer l'élément
            itemDiv.addEventListener('transitionend', () => {
                itemDiv.remove(); // Supprimer l'élément du DOM
                updateCartSummary(); // Recalculer le total
            }, { once: true }); // S'assurer que l'écouteur n'est déclenché qu'une seule fois
        }

        /**
         * Crée un nouvel élément de panier HTML.
         * @param {Object} product - L'objet produit avec id, name, price, details, image.
         * @returns {HTMLElement} L'élément div représentant l'article du panier.
         */
        function createCartItemElement(product) {
            const itemDiv = document.createElement('div');
            itemDiv.classList.add('cart-item', 'flex', 'flex-col', 'sm:flex-row', 'items-center', 'bg-gray-50', 'p-4', 'rounded-lg', 'shadow-sm');
            itemDiv.dataset.id = product.id;
            itemDiv.dataset.price = product.price.toFixed(2);

            itemDiv.innerHTML = `
                <img src="${product.image}" alt="${product.name}" class="w-24 h-24 rounded-lg object-cover mb-4 sm:mb-0 sm:mr-6 flex-shrink-0">
                <div class="flex-grow text-center sm:text-left">
                    <h2 class="text-lg font-semibold text-gray-800">${product.name}</h2>
                    <p class="text-gray-600">${product.details}</p>
                    <p class="text-xl font-bold text-gray-900 mt-1">€<span class="item-price">${product.price.toFixed(2)}</span></p>
                </div>
                <div class="flex items-center mt-4 sm:mt-0 sm:ml-6 space-x-2">
                    <button class="quantity-btn decrease-quantity bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-full w-8 h-8 flex items-center justify-center text-lg font-bold transition-colors duration-200">
                        -
                    </button>
                    <input type="number" value="1" min="1" class="quantity-input w-16 text-center border border-gray-300 rounded-md py-1 px-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <button class="quantity-btn increase-quantity bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-full w-8 h-8 flex items-center justify-center text-lg font-bold transition-colors duration-200">
                        +
                    </button>
                </div>
                <button class="remove-item-btn bg-red-500 text-white hover:bg-red-600 rounded-md px-4 py-2 mt-4 sm:mt-0 sm:ml-6 transition-colors duration-200">
                    Supprimer
                </button>
            `;

            // Attacher les écouteurs d'événements aux nouveaux boutons et inputs
            itemDiv.querySelector('.quantity-btn.decrease-quantity').addEventListener('click', handleQuantityChange);
            itemDiv.querySelector('.quantity-btn.increase-quantity').addEventListener('click', handleQuantityChange);
            itemDiv.querySelector('.quantity-input').addEventListener('input', handleQuantityInput);
            itemDiv.querySelector('.remove-item-btn').addEventListener('click', handleRemoveItem);

            return itemDiv;
        }

        /**
         * Ajoute un nouvel article aléatoire au panier.
         */
        function addRandomItem() {
            const randomIndex = Math.floor(Math.random() * availableProducts.length);
            const productToAdd = { ...availableProducts[randomIndex] }; // Copier l'objet
            productToAdd.id = nextProductId++; // Assigner un ID unique

            const newItemElement = createCartItemElement(productToAdd);
            cartItemsContainer.appendChild(newItemElement);
            updateCartSummary(); // Mettre à jour le résumé après l'ajout
        }

        // Attacher les écouteurs d'événements initiaux aux articles existants
        document.querySelectorAll('.cart-item').forEach(item => {
            item.querySelector('.quantity-btn.decrease-quantity').addEventListener('click', handleQuantityChange);
            item.querySelector('.quantity-btn.increase-quantity').addEventListener('click', handleQuantityChange);
            item.querySelector('.quantity-input').addEventListener('input', handleQuantityInput);
            item.querySelector('.remove-item-btn').addEventListener('click', handleRemoveItem);
        });

        // Attacher l'écouteur d'événement au bouton "Ajouter un article aléatoire"
        addItemBtn.addEventListener('click', addRandomItem);

        // Mettre à jour le résumé du panier au chargement de la page
        updateCartSummary();
    </script> --}}
</body>
</html>


@endsection