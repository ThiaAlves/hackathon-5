<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesquisa extends Model
{
    protected $fillable = [
        'tema',
        'descricao',
        'perguntas',
        'status',
    ];
    use HasFactory;

    public static function readPesquisas()
    {
        return Pesquisa::orderBy('tema', 'asc')->get();
    }

    public static function createPesquisa($data)
    {
        return Pesquisa::create($data);
    }

    public static function updatePesquisa($data, $id)
    {
        return Pesquisa::where('id', $id)->update($data);
    }

    public static function deletePesquisa($id)
    {
        return Pesquisa::where('id', $id)->delete();
    }

    public static function readPesquisa($id)
    {
        return Pesquisa::where('id', $id)->first();
    }

    public static function readPesquisaPerguntas($id)
    {
        return Pesquisa::where('id', $id)->first()->perguntas;
    }


}
