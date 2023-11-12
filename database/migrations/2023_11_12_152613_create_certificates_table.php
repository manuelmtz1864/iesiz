<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('ClaveEscuela', 40);
            $table->string('Turno', 100);
            $table->string('PlanEstudios', 255);
            $table->string('Folio', 255);
            $table->string('Matricula', 255);
            $table->string('CURP', 255);
            $table->string('Nombre', 255);
            $table->boolean('Timbrado');
            $table->string('TipoCertificado', 100);
            $table->date('Fecha');
            $table->string('Cadena', 255);
            $table->dateTime('FechaHoraTimbrado');
            $table->string('NombreArea', 255);
            $table->string('Firmante', 255);
            $table->string('id_hash', 255)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
