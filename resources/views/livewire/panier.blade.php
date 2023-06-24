<div class="rounded-lg md:w-2/3">
    @if ($LignePanier->isEmpty())
    <p class="text-gray-500">No products in the panier.</p>
    @else
    <div class="h-screen bg-gray-100 pt-20">
        <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
            <div class="rounded-lg md:w-2/3">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix Unitaire</th>
                            <th>Montant</th>
                            <th>Montant TVA</th>
                            <th>Id Panier</th>
                            <th>Id Produit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($LignePanier as $item)
                        <tr>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->produit }}</td>
                            <td>{{ $item->Quantité }}</td>
                            <td>{{ $item->PrixUnitaire }}</td>
                            <td>{{ $item->montant }}</td>
                            <td>{{ $item->montantTVA }}</td>
                            <td>{{ $item->panier_idPanier }}</td>
                            <td>{{ $item->idproduit }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Sub total -->
            <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
                <div class="mb-2 flex justify-between">
                    <p class="text-gray-700">Subtotal</p>
                    <p class="text-gray-700">$129.99</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-gray-700">Shipping</p>
                    <p class="text-gray-700">$4.99</p>
                </div>
                <hr class="my-4" />
                <div class="flex justify-between">
                    <p class="text-lg font-bold">Total</p>
                    <div class="">
                        <p class="mb-1 text-lg font-bold">$134.98 USD</p>
                        <p class="text-sm text-gray-700">including VAT</p>
                    </div>
                </div>
                <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">commander</button>
            </div>
        </div>
    </div>

    @endif
</div>