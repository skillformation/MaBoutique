@props(['cartProduct'])
<div>
      <!-- Exemple d'article dans le panier -->
      <div class="cart-item flex flex-col sm:flex-row items-center bg-gray-50 p-4 rounded-lg shadow-sm" data-id="1" data-price="25.99">
        <img src="https://placehold.co/100x100/E0E7FF/4F46E5?text=Produit+1" alt="Produit 1" class="w-24 h-24 rounded-lg object-cover mb-4 sm:mb-0 sm:mr-6 flex-shrink-0">
        <div class="flex-grow text-center sm:text-left">
            <h2 class="text-lg font-semibold text-gray-800">{{$cartProduct->name}}</h2>
            <p class="text-xl font-bold text-gray-900 mt-1">€<span class="item-price">{{$cartProduct->price}}</span></p>
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
           
        <a href="{{ route('cart.remove', $cartProduct->id) }}" class="remove-item-btn bg-red-500 text-white hover:bg-red-600 rounded-md px-4 py-2 mt-4 sm:mt-0 sm:ml-6 transition-colors duration-200">
            Supprimer
        </a>    

    </div>
</div>