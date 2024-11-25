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
    Schema::create('maquinas', function (Blueprint $table) {
        $table->id();
        $table->string('numero_da_maquina');
        $table->foreignId('marca_id')->constrained('marcas'); // Chave estrangeira para a tabela marcas
        $table->string('modelo');           // Modelo
        $table->string('serial_number');    // Serial Number
        $table->string('carregador');       // Carregador
        $table->string('disco');            // Disco
        $table->string('memoria');          // Memória
        $table->foreignId('sis_operacional_id')->constrained('sistemas'); // Chave estrangeira para a tabela sistemas
        $table->string('processador');      // Processador
        $table->foreignId('local_id')->constrained('locals'); // Chave estrangeira para a tabela local
        $table->foreignId('estado_id')->constrained('estados'); // Chave estrangeira para a tabela estados
        $table->string('projeto');          // Projeto
        $table->string('atribuido_a');      // Atribuído à
        $table->date('ano_de_aquisicao');   // Ano de aquisição
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquinas');
    }
};
