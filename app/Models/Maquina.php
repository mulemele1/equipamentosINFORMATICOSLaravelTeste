<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;

    /**
     * O nome da tabela associada ao modelo.
     *
     * @var string
     */
    protected $table = 'maquinas';

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array
     */
    protected $fillable = [
        'numero_da_maquina',   // Número da máquina
        'marca_id',               // Marca
        'modelo',              // Modelo
        'serial_number',       // Serial Number
        'carregador',          // Carregador
        'disco',               // Disco
        'memoria',             // Memória
        'sis_operacional_id', // Sistema operacional
        'processador',         // Processador
        'local_id',               // Local
        'estado_id',              // Estado
        'projeto',             // Projeto
        'atribuido_a',         // Atribuído à
        'ano_de_aquisicao',    // Ano de aquisição
    ];

    /**
     * Os atributos que devem ser convertidos para tipos nativos.
     *
     * @var array
     */
    protected $casts = [
        'ano_de_aquisicao' => 'integer', // Converte o ano de aquisição para inteiro
    ];

    public function marca(){
        return $this->belongsTo(Marca::class,'marca_id');
    }
    public function local(){
        return $this->belongsTo(Local::class,'local_id');
    }
    public function estado(){
        return $this->belongsTo(Estado::class,'estado_id');
    }
    public function sis_operacional(){
        return $this->belongsTo(Sistema::class,'sis_operacional_id');
    }
}
