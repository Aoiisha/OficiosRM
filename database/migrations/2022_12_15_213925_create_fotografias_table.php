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
        Schema::create('fotografias', function (Blueprint $table) {
            $table->string('id_foto',50)->primary();
            $table->string('id_album',50)->nullable;
            $table->string('ruta_image');


            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_album')->references('id_album')->on('albumnes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotografias');
    }
};
