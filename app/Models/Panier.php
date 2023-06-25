<?php

namespace App\Models;
use App\Models\Compte;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\LignePanier;
use App\Models\Command;

class Panier extends Model
{
    use HasFactory;
    protected $table = 'paniers';
    protected $primaryKey = 'idPanier';
    protected $fillable = [
        'livraison',
        'montant_total',
        'montant_hors_taxe',
        'MontantToidClienttal'

    ];

    public function client(){
        return $this->belongsTo(Client::class, 'client_idClient', 'idPanier');
    }
    public function LignePanier(){
        return $this->hasMany(LignePanier::class);
    }
    public function command(){
        return $this->hasOne(Command::class);
    }
}
