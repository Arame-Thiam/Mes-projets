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
        Schema::create('demandeS', function (Blueprint $table) {
            $table->id();
            $table->string('type_demande');
            $table->string('etat_demande');
            $table->string('montant_demande');
            $table->string('type_paiement');
            $table->string('date_demande');
            $table->foreignId('user_id')->constrained()->ondelete('cascade');
            $table->foreignId('lignes_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande');
    }
};
