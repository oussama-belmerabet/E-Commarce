<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Panier;
use App\Models\LignePanier;

class ShopComponent extends Component
{
    use WithPagination;
    public $search;
    protected  $products;

    public function render()
    {
        $this->products = $this->getProducts();
        return view('livewire.shop-component', [
            'products' => $this->getProducts()
        ]);

    }

    public function getProducts()
    {
        if (!empty($this->search)) {
            return Product::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        }

        return Product::paginate(10);
    }

}
