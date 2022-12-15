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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->bigIncrements('N_Pago');
            $table->bigInteger('id')->unsigned();
            $table->string('N_asociado')->nullable;
            $table->string('id_tipoPago')->nullable;

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('N_asociado')->references('N_asociado')->on('trabajadores');
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('id_tipoPago')->references('id_tipoPago')->on('tipo_pagos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transacciones');
    }
};
