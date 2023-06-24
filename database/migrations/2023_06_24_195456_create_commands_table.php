<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('commands', function (Blueprint $table) {
            $table->id();
            $table->date('Date');
            $table->string('livraison');
            $table->decimal('montant_total', 8, 2);
            $table->decimal('montant_hors_taxe', 8, 2);
            $table->string('etat');
            $table->string('numéro_de_facture');
            $table->decimal('droit_de_timbre', 8, 2);
            $table->unsignedBigInteger('client_idClient');
            $table->unsignedBigInteger('livraison_id');
            $table->unsignedBigInteger('gerant_id');
            $table->timestamps();

            $table->foreign('client_idClient')->references('idClient')->on('clients');
            $table->foreign('livraison_id')->references('id')->on('livraisons');
            $table->foreign('gerant_id')->references('id')->on('gerants');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('commands');
    }
};
