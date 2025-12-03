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
        Schema::create('ciclos_formativos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->id();
            $table->timestamps();
            $table->integer('familia_profesional_id')->nullable();
            $table->string('nombre', 255);
            $table->string('codigo', 50);
            $table->string('grado');
            $table->enum('grado', ['medio', 'superior']);
            $table->string('descripcion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciclos_formativos');
    }
};
