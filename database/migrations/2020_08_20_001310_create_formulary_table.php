<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombresyapellidos', 100);
            $table->string('tipodocumento')->default(1);
            $table->string('numerodocumento', 15);
            $table->string('correo',50);
            $table->string('fecha_nac')->nullable();
            $table->string('direccion',150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulary');
    }
}
