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
        Schema::create('detalles_reserva_empleados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reserva_id')->constrained('reservaciones');
            $table->foreignId('empleado_id')->constrained('empleados');
            $table->foreignId('labor_id')->constrained('labores');
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
        Schema::dropIfExists('detalles_reserva_empleados');
    }
};
