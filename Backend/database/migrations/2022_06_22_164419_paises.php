<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('paises', function(Blueprint $table){
        $table->id();
        $table->string('Nombre_Pais');
        $table->string('Capital');
        $table->string('Idioma_Oficial');
        $table->string('Poblacion_Pais');

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
