<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userlogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('dni')->unsigned()->required();
            $table->integer('cuit')->unsigned();
            $table->string('estado_civil');
            $table->string('domicilio_dni');
            $table->string('ciudad');
            $table->string('provincia');
            $table->integer('codigo_postal');
            $table->string('nacionalidad');
            $table->integer('celular')->unsigned();;
            $table->string('facebook');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
