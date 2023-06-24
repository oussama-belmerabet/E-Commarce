<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Gerant;
use App\Models\Livraison;

class Command extends Model
{
    use HasFactory;
    protected $fillable = [
        'Date',
        'livraison',
        'montant_total',
        'montant_hors_taxe',
        'etat',
        'numéro_de_facture',
        'droit_de_timbre',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_idClient');
    }

    public function livraison()
    {
        return $this->belongsTo(Livraison::class, 'livraison_id');
    }

    public function gerant()
    {
        return $this->belongsTo(Gerant::class, 'gerant_id');
    }
}
