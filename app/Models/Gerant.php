<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Command;

class Gerant extends Model
{
    use HasFactory;
    protected $fillable = ['Adresse', 'Tel', 'Age', 'Prénom', 'Nom', 'user_id'];

    // Define the relation with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function command(){
        return $this->hasMany(Command::class);
    }
}
