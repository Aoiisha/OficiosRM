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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rut',10);
            $table->string('name');
            $table->string('apellido')->nullable();
            $table->string('sexo',10)->nullable();
            $table->date('fecha_nac')->nullable();
            $table->integer('fono');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('calle',50);
            $table->string('N_calle');
            $table->string('password');
            $table->string('id_comuna',50)->nullable;

            $table->foreign('id_comuna')->references('id_comuna')->on('comunas');
            $table->tinyInteger('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
