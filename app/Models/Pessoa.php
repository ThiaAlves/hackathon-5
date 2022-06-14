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
        return Pessoa::select('id', 'nome', 'cpf', 'email', 'tipo', 'status')
            ->orderBy('nome', 'asc')->get();
    }

    public static function createPessoa($data)
    {
        return Pessoa::create($data);
    }

    public static function updatePessoa($data, $id)
    {
        return Pessoa::where('id', $id)->update($data);
    }

    public static function deletePessoa($id)
    {
        return Pessoa::where('id', $id)->delete();
    }
}
