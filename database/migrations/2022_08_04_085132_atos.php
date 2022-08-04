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
            $table->string('image')->nullable();
            $table->integer('numero')->nullable();
            $table->integer('ano')->nullable();
            $table->string('ementa')->nullable();
            $table->string('setor')->nullable();
            $table->string('classificacao')->nullable();
            $table->string('resposta')->nullable();
            $table->string('data_envio')->nullable();
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
        Schema::dropIfExists('atos');
    }
};
