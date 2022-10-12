<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    //especificar quais campos da tabela irá trabalhar
    protected $fillable = ['nome', 'valor', 'estoque'];

    use HasFactory;
}
