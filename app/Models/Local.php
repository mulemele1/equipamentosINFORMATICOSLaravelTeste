<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    
    protected $fillable = [
        'nome_local',   // Número da máquina
    ];


    /**
     * Os atributos que devem ser convertidos para tipos nativos.
     *
     * @var array
     */
    protected $casts = [
        'nome_local' => 'string', // Converte o ano de aquisição para inteiro
    ];

    public function frontend(){
        return $this->hasMany(Maquina::class);
    }
}
