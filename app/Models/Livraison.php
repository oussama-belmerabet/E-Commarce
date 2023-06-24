<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Command;

class Livraison extends Model
{
    use HasFactory;
    protected $fillable = ['PrixKg', 'Num_wilaya', 'Quantite'];
    
    public function command(){
        return $this->hasMany(Command::class);
    }
}
