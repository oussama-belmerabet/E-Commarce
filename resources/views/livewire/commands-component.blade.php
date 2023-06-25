<div class="commands-container m-5">
    <h1 class="text-2xl font-bold m-4">Commands</h1>
    @if (session()->has('message'))
    <div class="alert alert-success mb-4">
        {{ session('message') }}
    </div>
    @endif

    <ul class="list-group">
        @foreach ($commands as $command)
            <li class="list-group-item d-flex justify-content-between align-items-center py-4 px-6 rounded-lg mb-4">
                <div class="flex-grow-1 command-details">
                    <strong>Command ID:</strong> {{ $command->id }}<br>
                    <strong>Date:</strong> {{ $command->Date }}<br>
                    <strong>Livraison:</strong> {{ $command->livraison }}<br>
                    <strong>Montant Total:</strong> {{ $command->montant_total }}<br>
                    <strong>Montant Hors Taxe:</strong> {{ $command->montant_hors_taxe }}<br>
                    <strong>État:</strong> {{ $command->etat }}<br>
                    <strong>Numéro de Facture:</strong> {{ $command->numéro_de_facture }}<br>
                    <strong>Droit de Timbre:</strong> {{ $command->droit_de_timbre }}<br>
                </div>
                <div class="command-actions">
                    <button wire:click="acceptCommand({{ $command->id }})" class="rounded btn btn-success">Accept</button>

                    <button wire:click="refuseCommand({{ $command->id }})" class="btn btn-danger">Refuse</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
