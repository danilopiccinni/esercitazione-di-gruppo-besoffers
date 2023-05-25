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
        Schema::create('vino_vitigno', function (Blueprint $table) {
            $table->unsignedBigInteger('vino_id');
            $table->unsignedBigInteger('vitigno_id');

            $table->foreign('vino_id')->references('id')->on('vinos')->onDelete('cascade');
            $table->foreign('vitigno_id')->references('id')->on('vitignos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vino_vitigno');
    }
};
