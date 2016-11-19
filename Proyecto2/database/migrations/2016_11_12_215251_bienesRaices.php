<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BienesRaices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('Terresnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banco',80);
            $table->string('nombre');
            $table->string('ubicasion',400);
            $table->string('descripcion',800);
            $table->integer('precio');
            $table->integer('dimencion');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Terresnos');
    }
}
