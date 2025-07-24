<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {   //Recupérer des 10 produits avec le modèle Product
        $products = Product::latest()->take(10)->get();
        
        /* $products = Product::pagination(10); // Récupérer les 10 premiers produits avec la pagination(Solution 2) */
        
       /*  Vérifier si la variable $products 
        dd($products); */
      
        // Recupérer les produits depuis la base de données
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        // Récupérer un produit spécifique par son ID
        return view('products.show', ['id' => $id]);
    }
}
