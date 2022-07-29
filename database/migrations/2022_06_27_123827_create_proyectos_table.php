<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
           
                $table->id();
                $table->string('nombreproyecto');
                $table->string('nombremodulo');
                $table->string('opt');
                $table->string('medio');
                $table->string('pes');
              
                $table->string('nombremodulo2');
                $table->string('opt2');
                $table->string('medio2');
                $table->string('pes2');

                $table->string('nombremodulo3');
                $table->string('opt3');
                $table->string('medio3');
                $table->string('pes3');

                $table->string('tipoproyecto');
                $table->string('esp');
                $table->string('esp2');
                $table->string('esp3');
                $table->string('esf');
                $table->string('dur');
                $table->string('per');

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
        Schema::dropIfExists('proyectos');
    }
}
