<div>
    


<section class="mb-16">
    <h2 class="text-3xl font-bold text-center mb-10 text-gray-900">Nos Catégories Populaires</h2>
    <div class="flex flex-wrap justify-center gap-4">
        @forelse ($categories as $category)
        <a href="#" class="inline-block bg-indigo-100 text-indigo-800 font-semibold px-6 py-3 rounded-full hover:bg-indigo-200 transition-colors duration-200 shadow-sm hover:shadow-md">
            {{$category['name']}}
        </a>
        @empty
            <p class="text-center text-gray-600">Pas de catégorie</p>
        @endforelse
    </div>
</section>


{{-- <h1 class="text-center text-4xl font-semibold mt-20 mb-10">Explorez une sélection de créations de la Maison</h1>

<div class="flex flex-wrap justify-center gap-8 px-4">
    @foreach ($categories as $category)
        <div class="w-full sm:w-1/2 lg:w-1/4 flex flex-col items-center">
            
            @if ($category->products->isNotEmpty())
                <a href="{{ route('products.show', $category->products->first()->id) }}" class="block bg-white rounded-lg shadow-md overflow-hidden transform hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <img src="{{ asset('storage/' . $category->products->first()->image) }}" alt="{{ $category->products->first()->name }}" class="w-full h-96 object-cover">
                </a>
            @else
               
                <div class="w-full h-96 bg-gray-200 rounded-lg shadow-md flex items-center justify-center text-gray-500">
                    No image available
                </div>
            @endif
            <h3 class="text-xl font-semibold text-gray-800 mt-4">{{ $category->name }}</h3>
        </div>
    @endforeach
</div> --}}
</div>