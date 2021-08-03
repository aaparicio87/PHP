<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCotizacionToCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cajas', function (Blueprint $table) {
            $table->bigInteger('cotizacion_id')->unsigned()->nullable();
            $table->foreign('cotizacion_id')->references('id')->on('cotizaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cajas', function (Blueprint $table) {
            $table->bigInteger('cotizacion_id')->unsigned()->nullable();
            $table->foreign('cotizacion_id')->references('id')->on('cotizaciones');
        });
    }
}
