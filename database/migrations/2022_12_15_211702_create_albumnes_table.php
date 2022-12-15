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
        Schema::create('albumnes', function (Blueprint $table) {
            $table->string('id_album',50)->primary();
            $table->string('N_asociado')->nullable;
            $table->string('nombre_album',50);


            $table->timestamps();
            $table->softDeletes();

            $table->foreign('N_asociado')->references('N_asociado')->on('trabajadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albumnes');
    }
};
