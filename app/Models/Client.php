<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'idClient';

    protected $fillable = [
        'Commune',
        'Wilaya',
        'RC',
        'Adresse',
        'Tel',
        'Age',
        'Prénom',
        'Nom',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function paniers()
    {
        return $this->hasOne(Panier::class);
    }
}
