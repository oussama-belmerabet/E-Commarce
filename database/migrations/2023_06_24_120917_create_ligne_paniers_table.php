<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ligne_paniers', function (Blueprint $table) {
            $table->id('idLignePanier');
            $table->date('Date');
            $table->string('produit');
            $table->integer('Quantité');
            $table->float('PrixUnitaire', 10, 2);
            $table->float('montant', 10, 2);
            $table->float('montantTVA', 10, 2);
            $table->unsignedBigInteger('idPanier');
            $table->unsignedBigInteger('idproduit');

            $table->timestamps();

            $table->foreign('idPanier')->references('idPanier')->on('paniers')->onDelete('cascade');
            $table->foreign('idproduit')->references('id')->on('products')->onDelete('cascade');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('ligne_paniers');
    }
};
