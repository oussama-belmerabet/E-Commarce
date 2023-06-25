<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Command;
use App\Models\Vente;

class CommandsComponent extends Component
{
    public $commands;

    public function mount()
    {
        $this->loadCommands();
    }

    public function loadCommands()
    {
        $this->commands = Command::all();
    }

    public function refuseCommand($commandId)
    {
        $command = Command::find($commandId);

        if ($command) {
            $command->delete();
            $this->loadCommands();
            session()->flash('message', 'Command refused successfully.');
        }
    }

    public function acceptCommand($commandId)
    {
        $command = Command::findOrFail($commandId);
        foreach ($command->panier->LignePanier as $prod) {
            Vente::create([
                'Date' => $command->Date,
                'Produit' => $prod->produit,
                'Quantité' => $prod->Quantité,
                'Prix_unitaire' => $prod->PrixUnitaire,
                'montant' => $prod->montant,
                'montant_TVA' => $prod->montantTVA,
                'Command_id' => $command->id,
            ]);
        }

        $command->etat = 'Accepter';
        $command->save();
        session()->flash('message', 'Command Accepted successfully.');
    }

    
    public function render()
    {
        return view('livewire.commands-component', [
            'commands' => $this->commands,
        ]);
    }

}
