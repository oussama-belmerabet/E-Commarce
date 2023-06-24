<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\LignePanier;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;


class DetailsComponent extends Component
{
    public $slug;
    public $product;
    public $Quantité;

    public function incrementQuantity()
{
    $this->Quantité++;
}

public function decrementQuantity()
{
    if ($this->Quantité > 1) {
        $this->Quantité--;
    }
}


    public function mount($slug)
    {
        $this->product = Product::where('slug', $slug)->first();
    }

    public function addToCart()
    {

        $user = Auth::user();
        $client = $user->client;
        $lignePanier = new LignePanier();
        $lignePanier->Date = now();
        $lignePanier->produit = $this->product->name;
        $lignePanier->Quantité =$this->Quantité;
        $lignePanier->PrixUnitaire = $this->product->price ?: 0;
        $lignePanier->montant = $this->product->price ?: 0;
        $lignePanier->montantTVA = 0; // You can adjust this value based on your logic
        $lignePanier->panier_idPanier =$client->paniers->idPanier; // Replace with the appropriate Panier ID
        $lignePanier->idproduit = $this->product->id;
        $lignePanier->save();
        session()->flash('success_message', 'Product added to cart successfully.');
        return back();
    }
    public function render()
    {
        $product = Product::where('slug' , $this->slug)->first();
        $rproducts = Product::where('category_id' , $product->category_id)->inRandomOrder()->limit(4)->get();
        $nproducts = Product::latest()->take(4)->get();

        return view('livewire.details-component', ['product'=>$product , 'rproducts'=>$rproducts , 'nproducts'=>$nproducts]);
    }

}
