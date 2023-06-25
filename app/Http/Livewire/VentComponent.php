<?php

namespace App\Http\Livewire;
use App\Models\Vente;
use Livewire\Component;

class VentComponent extends Component
{
    public function render()
    {
        $vents = Vente::all();
        return view('livewire.vent-component', [
            'vents' => $vents,
        ]);
    }
}
