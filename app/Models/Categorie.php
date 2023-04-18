<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCategorie
 */
class Categorie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function produits() {
        $this->hasMany(Produit::class);
    }
}
