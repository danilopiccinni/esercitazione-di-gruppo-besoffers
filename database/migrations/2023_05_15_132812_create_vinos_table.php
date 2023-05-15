<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinos', function (Blueprint $table) {
            $table->id();

            $table->string('nome' , 50);
            $table->year('annata');
            $table->string('cantina', 50);
            $table->enum('colore', ['rosso','rose','bianco']);
            $table->enum('tipologia', ['fermo', 'frizzante' , 'passito']);
            $table->float('gradazione', 3, 1);
            $table->float('estratto', 3, 1);
            $table->float('acidita', 3, 1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vinos');
    }
};
