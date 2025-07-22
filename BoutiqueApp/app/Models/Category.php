<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * Les attributs qui peuvent être assignés en masse.
     * @var array<int, string>
     */
    protected $fillable = [
        'name', // Le nom de la catégorie, doit être unique pour éviter les doublons.
    ];

    //Relation avec les produits et cette catégorie
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    
}
