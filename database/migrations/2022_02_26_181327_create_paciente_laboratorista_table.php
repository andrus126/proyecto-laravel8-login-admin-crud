<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteLaboratoristaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_laboratorista', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('paciente_id')
                ->nullable()
                ->constrained('pacientes')
                ->cascadaOnUpdate()
                ->nullOnDelete();

            $table->foreignId('laboratorista_id')
                ->nullable()
                ->constrained('laboratoristas')
                ->cascadaOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente_laboratorista');
    }
}
