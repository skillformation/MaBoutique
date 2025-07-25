<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Panel;
use App\Models\Product;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //Protéger l'accés à fillaments 
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->role === 'admin';
    }
   
    
    //gestion des produits 

    //les produit du panier de l'utilisateur
  
    public function cartProduct(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'carts','user_id', 'product_id')
        ->withPivot(['quantity', 'price'])
        ->withTimestamps();
    }
    
    //Verifier si le produit est dans le panier
    public function hasProductInCart(Product $product): bool
    {
        return $this->cartProduct()->where('product_id', $product->id)->exists();
    }

    //Ajouter un produit au panier
    public function addProductToCart(Product $product, int $quantity): void
    {
        $this->cartProduct()->attach($product->id, [
            'quantity' => $quantity,
            'price' => $product->price,
        ]);
    }


    //Mettre à jour la quantité d'un produit dans le panier
    public function updateProductQuantityInCart(Product $product, int $quantity): void
    {
        $this->cartProduct()->updateExistingPivot($product->id, [
            'quantity' => $quantity,
            'price' => $product->price,
        ]);
    }


    //Supprimer un produit du panier
    public function removeProductFromCart(Product $product): void
    {
        $this->cartProduct()->detach($product->id);
    }


    //Vider le panier de l'utilisateur
    public function clearCart(): void
    {
        $this->cartProduct()->detach();
    }
  

    
    
}
