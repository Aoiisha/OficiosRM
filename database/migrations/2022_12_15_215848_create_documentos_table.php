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
        Schema::create('documentos', function (Blueprint $table) {
            $table->string('codigo_doc',50)->primary();
            $table->string('detalle');
            $table->string('archivo');
            $table->string('N_asociado')->nullable;
            $table->string('id_tipoDoc')->nullable;

            //$table->timestamps();
            $table->softDeletes();

            $table->foreign('N_asociado')->references('N_asociado')->on('trabajadores');
            $table->foreign('id_tipoDoc')->references('id_tipoDoc')->on('tipo_documentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
};
