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
            $table->string('Azienda', 20);
            $table->string('Stazione di partenza', 30);
            $table->string('Stazione di arrivo', 30);
            $table->string('Orario di partenza',6);
            $table->string('Orario di arrivo',6);
            $table->int('codice treno')->unsigned();
            $table->tinyInteger('Numero Carrozze')->unsigned();
            $table->tinyInteger('In orario')->unsigned()->default(1);
            $table->tinyInteger('Cancellato')->unsigned()->default(1);
            $table->string('Stazione di partenza', 30);
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
