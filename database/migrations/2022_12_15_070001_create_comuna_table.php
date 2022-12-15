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
        Schema::create('comuna', function (Blueprint $table) {
            $table->primary('id_comuna');
            $table->string('nombre_comuna',100);
            $table->unsigned('id_provincia');
            $table->foreign('id_provincia')->references('id_provincia')->on('provincia')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comuna');
    }
};
