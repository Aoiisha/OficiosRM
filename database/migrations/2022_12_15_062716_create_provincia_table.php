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
        Schema::create('provincia', function (Blueprint $table) {
            $table->primary('id_provincia');
            $table->string('nombre_provincia',100);
            //$table->timestamps(); //genera 2 campos, en que fecha se registro y edito este registro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincia');
    }
};
