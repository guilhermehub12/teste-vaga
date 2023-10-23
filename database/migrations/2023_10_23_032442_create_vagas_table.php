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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id('vagas_id');
            $table->string('nome');
            $table->text('descrição');
            $table->unsignedBigInteger('vagas_tipo_id');
            $table->foreign('vagas_tipo_id')->references('vagas_tipo_id')->on('vagas_tipo')->onDelete('cascade');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
