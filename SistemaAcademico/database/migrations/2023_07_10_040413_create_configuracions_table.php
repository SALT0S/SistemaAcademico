<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->id();
            $table->string('periodoLectivo');
            $table->string('noombreCentro');
            $table->string('detalleCentro');
            $table->string('direccionCentro');
            $table->string('emailCentro');
            $table->string('telefonoCentro');
            $table->Time('capacitacionHoraInicio');
            $table->Time('capacitacionHoraFin');
            $table->Time('intensivosHoraInicioSabado');
            $table->Time('intensivosHoraFinSabado');
            $table->Integer('estado');
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
        Schema::dropIfExists('configuracions');
    }
}
