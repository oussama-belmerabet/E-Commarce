<div class="rounded-lg md:w-2/3 p-4 my-4">
    @if ($LignePanier->isEmpty())
    <p class="text-gray-500">No products in the panier.</p>
    @else
    <div class="h-screen bg-gray-100 pt-20">
        <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
            <div class="rounded-lg md:w-2/3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix Unitaire</th>
                            <th>Montant</th>
                            <th>Montant TVA</th>
                            <th>Id Produit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($LignePanier as $item)
                        <tr>
                            <td><strong>{{ $item->produit }}</strong></td>
                            <td><strong>{{ $item->Quantité }}</strong></td>
                            <td><strong>${{ $item->PrixUnitaire }}</strong></td>
                            <td><strong>{{ $item->montant }}</strong></td>
                            <td><strong>{{ $item->montantTVA }}</strong></td>
                            <td><strong>{{ $item->idproduit }}</strong></td>
                            <td>
                                <button wire:click="suprimerP({{$item->idproduit}})"  class="btn btn-danger">Supprimer</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Sub total -->
            <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
                <div class="mb-2 d-flex justify-content-between">
                    <p class="text-gray-900">Subtotal</p>
                    <p class="text-gray-700"><span>$</span>{{$subtotal}}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <label class="form-check-label">
                        <input type="checkbox" wire:model="showShipping" class="form-check-input">
                        Shipping
                    </label>
                </div>

                @if($showShipping)
                <div class="d-flex justify-content-between">
                    <p class="text-gray-700">Shipping</p>
                    <p class="text-gray-700">${{ $shippingCost }}</p>
                </div>
                @endif

                <hr class="my-4" />

<div class="d-flex justify-content-between">
    <p class="text-lg font-bold">Total</p>
    <div class="">
        <p class="mb-1 text-lg font-bold">${{ $showShipping ? ($subtotal + $shippingCost) : $subtotal }} USD</p>
        <p class="text-sm text-gray-700">including VAT</p>
    </div>
</div>
                <div class="mt-4">
                    <a href="/shop" class="w-full btn btn-primary mb-2">Ajouter produit</a>
                    <button wire:click="annulerPanier" class="w-full btn btn-secondary">Annuler panier</button>
                </div>

                @if($showPaymentForm)
                <form>
                    <!-- Payment form fields -->
                    <div class="form-group">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" placeholder="Enter card number" wire:model="cardNumber" required>
                    </div>

                    <div class="form-group">
                        <label for="expiryDate">Expiry Date</label>
                        <input type="text" class="form-control" id="expiryDate" placeholder="Enter expiry date" wire:model="expiryDate" required>
                    </div>

                    <div class="form-group">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv" placeholder="Enter CVV" wire:model="cvv" required>
                    </div>
                    <button type="submit" wire:click.prevent="commander" class="btn btn-primary" :disabled="!formIsValid">Pay Now</button>
                </form>

    </form>
@else

    <button wire:click="showPaymentForm" type="button" class="btn btn-primary">Command</button>
@endif

                </div>
        </div>
    </div>
    @endif
</div>
