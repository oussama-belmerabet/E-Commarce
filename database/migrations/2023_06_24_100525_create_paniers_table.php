<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paniers', function (Blueprint $table) {
            $table->id('idPanier');
            $table->string('livraison');
            $table->decimal('montant_total');
            $table->decimal('montant_hors_taxe');
            $table->unsignedBigInteger('client_idClient');

            $table->foreign('client_idClient')->references('idClient')->on('clients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paniers');
    }
};
