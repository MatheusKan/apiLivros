<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbllivros extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    // Indica que a chave primária é auto-incremento (padrão é verdadeiro)
    public $incrementing = true;

    // Define o tipo da chave primária (opcional, padrão é 'int')
    protected $keyType = 'int';

    // Defina quais atributos são preenchíveis em massa
    protected $fillable = ['nomeLivro', 'generoLivro', 'anoLivro'];
} 