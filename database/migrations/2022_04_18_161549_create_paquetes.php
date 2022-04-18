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
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->enum('origen', ['Quito', 'Cuenca','Macas', 'Guayaquil']);
            $table->enum('destino', ['Quito', 'Cuenca','Macas', 'Guayaquil']);
            $table->boolean('confirmed')->nullable()->default(false);
            $table->enum('tipo', ['normal', 'express']);
            $table->string('destinatario', 100);
            $table->unsignedBigInteger('cliente_id');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquetes');
    }
};
