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
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->string('N_asociado',50)->primary();
            $table->bigInteger('id')->unsigned()->unique();
            $table->string('id_trabajo')->nullable;

            //$table->timestamps();
            $table->softDeletes();

            $table->foreign('id_trabajo')->references('id_trabajo')->on('trabajos');
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
        Schema::dropIfExists('trabajadores');
    }
};
