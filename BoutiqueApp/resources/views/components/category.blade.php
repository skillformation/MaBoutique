<div>
    {{-- <section id="categories" class="py-16 bg-gray-50 mt-20"> <div class="container mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-12">Découvrez nos Collections</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <a href="#electronique" class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:shadow-xl hover:scale-105 transition-all duration-300">
                <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Électronique" alt="Catégorie Électronique" class="w-full h-64 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Électronique</h3>
                </div>
            </a>
            <a href="#vetements" class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:shadow-xl hover:scale-105 transition-all duration-300">
                <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Vêtements" alt="Catégorie Vêtements" class="w-full h-64 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Vêtements</h3>
                </div>
            </a>
            <a href="#livres" class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:shadow-xl hover:scale-105 transition-all duration-300">
                <img src="https://via.placeholder.com/600x400/e67e22/ffffff?text=Livres" alt="Catégorie Livres" class="w-full h-64 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Livres</h3>
                </div>
            </a>
            <a href="#maison-jardin" class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:shadow-xl hover:scale-105 transition-all duration-300">
                <img src="https://via.placeholder.com/600x400/27ae60/ffffff?text=Maison+%26+Jardin" alt="Catégorie Maison & Jardin" class="w-full h-64 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Maison & Jardin</h3>
                </div>
            </a>
            <a href="#sports-loisirs" class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:shadow-xl hover:scale-105 transition-all duration-300">
                <img src="https://via.placeholder.com/600x400/f1c40f/ffffff?text=Sports+%26+Loisirs" alt="Catégorie Sports & Loisirs" class="w-full h-64 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Sports & Loisirs</h3>
                </div>
            </a>
            <a href="#maison" class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:shadow-xl hover:scale-105 transition-all duration-300">
                <img src="https://via.placeholder.com/600x400/7f8c8d/ffffff?text=Maison" alt="Catégorie Maison" class="w-full h-64 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Maison</h3>
                </div>
            </a>
        </div>
    </div>
</section> --}}




<section class="mb-16">
    <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">Nos Catégories Populaires</h2>
    <div class="flex flex-wrap justify-center gap-4">
        @forelse ($categories as $category)
        <a href="#" class="inline-block bg-indigo-100 text-indigo-800 font-semibold px-6 py-3 rounded-full hover:bg-indigo-200 transition-colors duration-200 shadow-sm hover:shadow-md">
            {{$category['name']}}
        </a>


        @empty
            Pas de categorie
        @endforelse
        
    </div>
</section> 

@foreach ($categories as $category)
    <section id="category-{{ $category->id }}" class="py-16 bg-gray-50 mt-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-12">{{ $category->name }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($category->products as $product)
                    <a href="{{ route('products.show', $product->id) }}" class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:shadow-xl hover:scale-105 transition-all duration-300">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h3>
                            <p class="text-gray-600 mt-2">{{ $product->description }}</p>
                            <span class="text-indigo-600 font-bold mt-4">${{ number_format($product->price, 2) }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endforeach
</div>