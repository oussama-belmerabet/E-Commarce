<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->increments('idVente');
            $table->date('Date');
            $table->string('Produit');
            $table->integer('Quantité');
            $table->decimal('Prix_unitaire', 8, 2);
            $table->decimal('montant', 8, 2);
            $table->decimal('montant_TVA', 8, 2);
            $table->unsignedBigInteger('command_id')->nullable();

            $table->foreign('command_id')->references('id')->on('commands');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ventes');
    }
};
