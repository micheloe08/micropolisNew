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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paquete_id')->constrained('paquetes');
            $table->foreignId('sucursal_id')->constrained('sucursales');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->date('fecha_evento');
            $table->time('hora_evento');
            $table->string('comida_infantil');
            $table->string('comida_adulto')->nullable();
            $table->string('pastel_personalizado', 250)->nullable();
            $table->string('piñata', 250)->nullable();
            $table->string('thermos', 250)->nullable();
            $table->string('candybar', 250)->nullable();
            $table->string('manteles_tela', 250)->nullable();
            $table->string('manteles_papel', 250)->nullable();
            $table->string('centros_mesa', 250)->nullable();
            $table->string('snacks_personalizados', 250)->nullable();
            $table->boolean('area_teens')->nullable()->default(0);
            $table->integer('invitados_adicionales')->nullable()->default(0);
            $table->string('comprobante_anticipo')->nullable();
            $table->boolean('pagado')->nullable()->default(0);
            $table->text('comentarios');
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
        Schema::dropIfExists('reservaciones');
    }
};
