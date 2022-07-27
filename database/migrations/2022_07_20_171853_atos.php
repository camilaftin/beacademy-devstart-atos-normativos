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
        Schema::create('atos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->integer('ano');
            $table->string('ementa');
            $table->string('setor');    
            $table->string('classificacao');
            $table->string('resposta');
            $table->string('data_envio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atos');
    }
};