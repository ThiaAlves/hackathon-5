<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'senha',
        'tipo',
        'status',
    ];
    use HasFactory;


    public static function readPessoas()
    {
        return Pessoa::orderBy('nome', 'asc')->get();
    }

    public static function createPessoa($data)
    {
        return Pessoa::create($data);
    }

    public static function updatePessoa($id, $data)
    {
        return Pessoa::where('id', $id)->update($data);
    }

    public static function deletePessoa($id)
    {
        return Pessoa::where('id', $id)->delete();
    }
}
