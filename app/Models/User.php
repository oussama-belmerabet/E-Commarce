<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Panier;
use App\Models\Client;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'age',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function boot()
    {
    parent::boot();

    static::created(function ($user) {
        $client = new Client;

        $client->Commune = 'Default Commune';
        $client->Wilaya = 'Default Wilaya';
        $client->RC = 'Default RC';
        $client->Adresse = 'Default Adresse';
        $client->Tel = 'Default Tel';
        $client->Age = 0;
        $client->Prénom = 'Default Prénom';
        $client->Nom = 'Default Nom';

        $user->client()->save($client);

        $panier = new Panier;
        $panier->livraison = 'Default Livraison';
        $panier->montant_total = 0;
        $panier->montant_hors_taxe = 0;
        //$panier->idClient = $client->idClient;

        $client->paniers()->save($panier);
    });
    }

    public function client(){
        return $this->hasOne(Client::class);
    }
}
