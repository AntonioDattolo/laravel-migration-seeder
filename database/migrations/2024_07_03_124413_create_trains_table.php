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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda",255);
            $table->string("stazione_di_partenza",255);
            $table->string("stazione_di_arrivo",255);
            $table->dateTime("orario_di_partenza");
            $table->dateTime("orario_di_arrivo");
            $table->decimal("codice_treno",5,0,false);
            $table->decimal("numero_di_carrozze",3,0,false);
            $table->boolean("in_orario");
            $table->boolean("cancellato");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
