<?php

namespace App\Models;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'image_path',
        'is_primary',
    ];

    protected $casts = [
        'is_primary' => 'boolean',
    ];

    
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function image(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
    
}
