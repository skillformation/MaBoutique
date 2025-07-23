<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Recupérer les produits depuis la base de données
        return view('products.index');
    }

    public function show($id)
    {
        // Récupérer un produit spécifique par son ID
        return view('products.show', ['id' => $id]);
    }
}
