<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Command;

class Vente extends Model
{
    use HasFactory;
    protected $primaryKey = 'idVente';

    protected $fillable = [
        'Date',
        'Produit',
        'Quantité',
        'Prix_unitaire',
        'montant',
        'montant_TVA',
        'command_id'
    ];

    public function command()
    {
        return $this->belongsTo(Command::class, 'command_id');
    }
}
