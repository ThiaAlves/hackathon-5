<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $fillable = [
        'pessoa_id',
        'pesquisa_id',
        'respostas',
        'status',
    ];
    use HasFactory;

    public static function readRespostas()
    {
        return Resposta::orderBy('pessoa_id', 'asc')->get();
    }

    public static function createResposta($data)
    {
        return Resposta::create($data);
    }

    public static function updateResposta($id, $data)
    {
        return Resposta::where('id', $id)->update($data);
    }

    public static function deleteResposta($id)
    {
        return Resposta::where('id', $id)->delete();
    }

    public static function readResposta($id)
    {
        return Resposta::where('id', $id)->first();
    }

    public static function readRespostaPessoa($id)
    {
        return Resposta::where('pessoa_id', $id)->first();
    }

    public static function readRespostaPesquisa($id)
    {
        return Resposta::where('pesquisa_id', $id)->first();
    }

    public static function readRespostaPessoaPesquisa($idPessoa, $idPesquisa)
    {
        return Resposta::where('pessoa_id', $idPessoa)->where('pesquisa_id', $idPesquisa)->first();
    }

    public static function readRespostaPessoaPesquisaRespostas($idPessoa, $idPesquisa)
    {
        return Resposta::where('pessoa_id', $idPessoa)->where('pesquisa_id', $idPesquisa)->first()->respostas;
    }


}
