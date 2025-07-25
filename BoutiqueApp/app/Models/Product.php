<?php

namespace App\Models;


use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'stock',
        'sku',
        'is_active',
    ];
    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
        'is_active' => 'boolean',
    ];

    //Relation catégorie avec les produits
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function image(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    
}
