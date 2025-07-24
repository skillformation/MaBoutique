<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   //generation de la table carts   
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Liaison avec la table users
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Liaison avec la table products
            $table->unsignedInteger('quantity')->default(1); // Quantité du produit dans le panier
            $table->decimal('price', 10, 2); // Prix du produit au moment de l'ajout au panier
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
