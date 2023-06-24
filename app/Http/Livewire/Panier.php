<?php
namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Panier extends Component
{
    public function render()
    {
        $user = Auth::user();
        $client = $user->client;
        $panier = $client->paniers;

        $LignePanier = $panier->LignePanier;

        return view('livewire.panier', [
            'LignePanier' => $LignePanier,
        ]);
    }
}
