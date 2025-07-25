<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Afficher le panier de l'utilisateur connecté
        $user = auth()->user();
    
        return view('products.cart');
    }

    //Ajouter un produit au panier a partir du produit selectionné
    public function addToCart(Product $product)
    {
        //Logique pour vérifier si le produit est déjà dans le panier
        $user = auth()->user();
        /* dd($user); */

        //recuperer les produits du panier de l'utilisateur
        $cartProducts = $user->cartProduct()->get();
      /*   dd($cartProducts); */

      //Afficcher les produits du panier de l'utilisateur a la vue
       return view('products.cart', compact('cartProducts'));

       

        if (!$user->hasProductInCart($product)) {
            $cart=Cart::create(['user_id' => auth()->id(),
            'product_id' => $product->id,
            'quantity' => 1,
            'price' => $product->price]);
        }

       return redirect()->route('cart.index')->with('success', 'Produit ajouté au panier avec succès!');
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
