<div class="container">
    <h1 class="text-center mb-4">Vents</h1>
    <div class="row justify-content-center">
        @foreach ($vents as $vent)
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ID: {{ $vent->idVente }}</h5>
                    <p class="card-text">Date: {{ $vent->Date }}</p>
                    <p class="card-text">Produit: {{ $vent->Produit }}</p>
                    <p class="card-text">Quantité: {{ $vent->Quantité }}</p>
                    <p class="card-text">Prix unitaire: {{ $vent->Prix_unitaire }}</p>
                    <p class="card-text">Montant: {{ $vent->montant }}</p>
                    <p class="card-text">Montant TVA: {{ $vent->montant_TVA }}</p>
                    <p class="card-text">#Command_id: {{ $vent->Command_id }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
