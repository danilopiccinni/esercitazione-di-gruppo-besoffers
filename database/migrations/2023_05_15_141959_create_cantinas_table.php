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
        Schema::create('cantinas', function (Blueprint $table) {
            $table->id();

            $table->string('nome' , 50);
            $table->string('indirizzo' , 50);
            $table->string('comune', 50);
            $table->string('provincia', 2);
            $table->string('regione', 50);
            $table->string('nazione', 50);
            $table->string('telefono', 50);
            $table->string('email', 50);


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
        Schema::dropIfExists('cantinas');
    }
};
