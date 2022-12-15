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
        Schema::create('usuario', function (Blueprint $table) {
            $table->primary('rut');
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('email',50)->unique();
            $table->unsigned('id_comuna',50);
            $table->foreign('id_comuna')->references('id_comuna')->on('comuna');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
