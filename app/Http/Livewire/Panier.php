<?php
namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Command;
use App\Models\LignePanier;
use Illuminate\Support\Facades\DB;


class Panier extends Component
{

    public $shippingCost = 4.99;
    public $showShipping = true;
    public $showPaymentForm = false;

    public $cardNumber;
    public $expiryDate;
    public $cvv;

 

    public function getFormIsValidProperty()
    {
        return !empty($this->cardNumber) && !empty($this->expiryDate) && !empty($this->cvv);
    }

    public function showPaymentForm()
    {
        $this->showPaymentForm = true;
    }
    public function toggleShipping()
    {
        $this->showShipping = !$this->showShipping;
    }

    public $subtotal;
    public function mount()
    {
        $this->subtotal = $this->calculateSubtotal();
    }

    private function calculateSubtotal()
    {
        $subtotal = 0;
        foreach (auth()->user()->client->paniers->LignePanier as $item) {
            $subtotal += $item->PrixUnitaire*$item->Quantité;
        }
        return $subtotal;
    }
    public function commander()
    {
        if ($this->formIsValid) {
        $user = auth()->user();
        $client = $user->client;
        $idP = $client->paniers->idPanier;
        $command = $client->command()->create([
        'Date' => date('Y-m-d'),
        'livraison' => 'Some value',
        'montant_total' => 0,
        'montant_hors_taxe' => 0,
        'etat' => 'en attente',
        'numéro_de_facture' => auth()->user()->id,
        'droit_de_timbre' => 0,
        'panier_idPanier'=>$idP,
        ]);
        $panier = $client->paniers;
        $lignePaniers = $panier->lignePanier;
        return redirect('/shop');
    }
    }

    public function annulerPanier()
    {
        $panier = auth()->user()->client->paniers;
        foreach ($panier->LignePanier as $lignePanier) {
            $lignePanier->delete();
        }
        return redirect()->to('/panier');
    }

    public function suprimerP($id){
        $panier = auth()->user()->client->paniers;
        foreach ($panier->LignePanier as $lignePanier) {
            if($lignePanier->idproduit == $id){
            $lignePanier->delete();
            }
        }
        return redirect()->to('/panier');
    }

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
