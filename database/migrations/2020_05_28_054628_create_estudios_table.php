<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudio', function (Blueprint $table) {
            $table->id('idEstudio');
            $table->string('tipoEstudio', 500);
            $table->date('fechaEstudio');
            $table->enum('asistioPaciente',['si','no'])->nullable();
            $table->date('fechaEntrega')->nullable();
            $table->date('fechaProximo')->nullable();
            $table->date('fechaRevisión')->nullable();
            $table->string('resultadoEstudio', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudio');
    }
}
