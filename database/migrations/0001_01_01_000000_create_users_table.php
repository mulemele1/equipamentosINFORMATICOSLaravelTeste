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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Campo ID
            $table->string('name'); // Nome do usuário
            $table->string('email')->unique(); // Email único
            $table->string('usertype')->default('user'); // Tipo de usuário (padrão: user)
            $table->string('telefone', 15)->nullable(); // Telefone (opcional, tamanho máximo de 15 caracteres)
            $table->boolean('ativo')->default(true); // Campo ativo (padrão: true)
            $table->string('password'); // Senha
            $table->string('password_crip')->nullable(); // Campo adicional para senha encriptada
            $table->timestamp('email_verified_at')->nullable(); // Email verificado
            $table->string('profile_photo_path', 2048)->nullable(); // Caminho para foto de perfil
            $table->rememberToken(); // Token de "lembrar-me"
            $table->timestamps(); // Timestamps padrão do Laravel (created_at e updated_at)
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Email como chave primária
            $table->string('token'); // Token de redefinição de senha
            $table->timestamp('created_at')->nullable(); // Data de criação
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // ID da sessão como chave primária
            $table->foreignId('user_id')->nullable()->index(); // Relacionamento com o usuário
            $table->string('ip_address', 45)->nullable(); // Endereço IP (IPv4/IPv6)
            $table->text('user_agent')->nullable(); // Informações do navegador
            $table->longText('payload'); // Dados da sessão
            $table->integer('last_activity')->index(); // Última atividade
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Remove tabela users
        Schema::dropIfExists('password_reset_tokens'); // Remove tabela password_reset_tokens
        Schema::dropIfExists('sessions'); // Remove tabela sessions
    }
};
