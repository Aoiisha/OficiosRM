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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('N_solicitud');
            $table->bigInteger('id')->unsigned();
            $table->string('id_tipoSol')->nullable;
            $table->string('descripcion');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_tipoSol')->references('id_tipoSol')->on('tipo_solicitudes');
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
};
