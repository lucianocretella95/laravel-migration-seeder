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
            $table->string("Azienda");
            $table->string("stazione di partenza");
            $table->string("stazione di arrivo");
            $table->string("orario di partenza");
            $table->dateTime("orario di arrivo");
            $table->string("codice treno");
            $table->smallInteger("Numero carrozze");
            $table->boolean("in orario");
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
