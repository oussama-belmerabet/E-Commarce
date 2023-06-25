<?php

namespace App\Models;
use App\Models\Compte;
use App\Models\Panier;
use App\Models\User;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LignePanier extends Model
{
    use HasFactory;
    protected $table = 'ligne_paniers';
    protected $primaryKey = 'idLignePanier';
    protected $fillable = [
        'Date',
        'produit',
        'Quantité',
        'PrixUnitaire',
        'montant',
        'montantTVA',
        'panier_idPanier',
        'idproduit',
    ];


    public function panier()
    {
        return $this->belongsTo(Panier::class, 'idPanier');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'idproduit');
    }
}
