<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{

    use HasFactory;

    protected $fillable = [
        'pessoa_id',
        'pesquisa_id',
        'respostas',
        'status',
    ];


    public static function readRespostas()
    {
        return Resposta::orderBy('created_at', 'desc')
        ->join('pessoa', 'pessoa.id', '=', 'respostas.pessoa_id')
        ->join('pesquisas', 'pesquisas.id', '=', 'respostas.pesquisa_id')
        ->select('respostas.*', 'pessoa.nome as pessoa', 'pesquisas.tema as pesquisa')
        ->get();
    }

    public static function createResposta($data)
    {
        $respostas = $data['resposta1'] .'|' .$data['resposta2'] .'|' .$data['resposta3'];

        return Resposta::create([
            'pessoa_id' => $data['pessoa_id'],
            'pesquisa_id' => $data['pesquisa_id'],
            'respostas' => $respostas,
            'status' => '0',
        ]);
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
        $resposta = Resposta::orderBy('respostas.updated_at', 'desc')
        ->join('pessoa', 'pessoa.id', '=', 'respostas.pessoa_id')
        ->join('pesquisas', 'pesquisas.id', '=', 'respostas.pesquisa_id')
        ->select('respostas.id as id_resposta', 'pessoa.nome as nome_pessoa', 'pessoa.id as id_pessoa', 'pesquisas.tema as tema_pesquisa', 'pesquisas.id as id_pesquisa' ,'pesquisas.perguntas', 'respostas.respostas', 'respostas.status as status_resposta')
        ->where('respostas.id', $id)
        ->get();

        $perguntas = explode('|', $resposta[0]->perguntas);

        return [
            'resposta' => $resposta[0],
            'perguntas' => $perguntas,
        ];
    }

    public static function readRespostabByPessoa($id)
    {
        return Resposta::orderBy('respostas.updated_at', 'desc')
        ->join('pessoa', 'pessoa.id', '=', 'respostas.pessoa_id')
        ->join('pesquisas', 'pesquisas.id', '=', 'respostas.pesquisa_id')
        ->select('respostas.id as id_resposta', 'pessoa.nome as nome_pessoa', 'pessoa.id as id_pessoa', 'pesquisas.tema as tema_pesquisa', 'pesquisas.id as id_pesquisa' ,'pesquisas.perguntas', 'respostas.respostas', 'respostas.status as status_resposta')
        ->where('respostas.pessoa_id', $id)
        ->get();
    }

    public static function readRespostaByPesquisa($id)
    {
        return Resposta::orderBy('respostas.updated_at', 'desc')
        ->join('pessoa', 'pessoa.id', '=', 'respostas.pessoa_id')
        ->join('pesquisas', 'pesquisas.id', '=', 'respostas.pesquisa_id')
        ->select('respostas.id as id_resposta', 'pessoa.nome as nome_pessoa', 'pessoa.id as id_pessoa', 'pesquisas.tema as tema_pesquisa', 'pesquisas.id as id_pesquisa' ,'pesquisas.perguntas', 'respostas.respostas', 'respostas.status as status_resposta')
        ->where('respostas.pesquisa_id', $id)
        ->get();
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

    public static function verificaResposta($id, $data)
    {
        return Resposta::where('id', $id)->update([
            'status' => $data,
        ]);
    }




}
