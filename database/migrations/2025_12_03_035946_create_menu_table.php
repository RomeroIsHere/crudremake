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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');//Price is Down to Peso only, no Cented Prices
            $table->string('filepath');//NameOfTheJPG
            $table->boolean('isVegan');
            $table->boolean('hasGluten');
            $table->timestamps();//Logging Creation and Modification
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
