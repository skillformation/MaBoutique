
@extends('layouts.product')
@section('content')
    {{--

    <section id="products" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Nos Produits Phares</h2>
            <div class="flex justify-end mb-8 space-x-4">
                <select class="border border-gray-300 rounded-md py-2 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option>Trier par : Pertinence</option>
                    <option>Trier par : Prix croissant</option>
                    <option>Trier par : Prix décroissant</option>
                    <option>Trier par : Nouveauté</option>
                </select>
                </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x300/667eea/ffffff?text=Smartphone+X" alt="Smartphone X" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-25 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                            <button class="bg-white text-gray-800 py-2 px-4 rounded-full text-sm font-semibold hover:bg-gray-100 transition-colors duration-300">
                                Voir le produit
                            </button>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Smartphone X</h3>
                        <p class="text-gray-600 text-sm mb-3">Un smartphone puissant avec un excellent appareil photo.</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-2xl font-bold text-indigo-600">$799.99</span>
                            <button class="bg-indigo-600 text-white py-2 px-4 rounded-full text-sm font-semibold hover:bg-indigo-700 transition-colors duration-300">
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x300/4299e1/ffffff?text=Casque+Audio+Pro" alt="Casque Audio Pro" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-25 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                            <button class="bg-white text-gray-800 py-2 px-4 rounded-full text-sm font-semibold hover:bg-gray-100 transition-colors duration-300">
                                Voir le produit
                            </button>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Casque Audio Pro</h3>
                        <p class="text-gray-600 text-sm mb-3">Casque sans fil avec réduction de bruit active.</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-2xl font-bold text-indigo-600">$199.50</span>
                            <button class="bg-indigo-600 text-white py-2 px-4 rounded-full text-sm font-semibold hover:bg-indigo-700 transition-colors duration-300">
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x300/a3e635/ffffff?text=T-shirt+Coton+Bio" alt="T-shirt Coton Bio" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-25 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                            <button class="bg-white text-gray-800 py-2 px-4 rounded-full text-sm font-semibold hover:bg-gray-100 transition-colors duration-300">
                                Voir le produit
                            </button>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">T-shirt Coton Bio</h3>
                        <p class="text-gray-600 text-sm mb-3">T-shirt confortable en coton 100% biologique.</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-2xl font-bold text-indigo-600">$25.00</span>
                            <button class="bg-indigo-600 text-white py-2 px-4 rounded-full text-sm font-semibold hover:bg-indigo-700 transition-colors duration-300">
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x300/ef4444/ffffff?text=Le+Seigneur+des+Anneaux" alt="Le Seigneur des Anneaux" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-25 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                            <button class="bg-white text-gray-800 py-2 px-4 rounded-full text-sm font-semibold hover:bg-gray-100 transition-colors duration-300">
                                Voir le produit
                            </button>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Le Seigneur des Anneaux</h3>
                        <p class="text-gray-600 text-sm mb-3">Livre de fantasy épique.</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-2xl font-bold text-indigo-600">$18.50</span>
                            <button class="bg-indigo-600 text-white py-2 px-4 rounded-full text-sm font-semibold hover:bg-indigo-700 transition-colors duration-300">
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>

    --}}
    <x-category />

@endsection