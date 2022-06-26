<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resposta;
use Illuminate\Support\Facades\DB;

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
        return Resposta::orderBy('p.tema', 'asc')
        ->join('pesquisas as p', 'p.id', '=', 'respostas.pesquisa_id')
        ->select('p.id', 'p.tema', 'p.descricao', 'p.perguntas', 'p.status', 'p.created_at', 'p.updated_at', DB::raw('count(respostas.id) as total_respostas'))
        ->groupBy('p.id','p.tema', 'p.descricao',  'p.perguntas', 'p.status', 'p.created_at', 'p.updated_at')
        ->get();
    }
    public static function createPesquisa($data)
    {

        $perguntas = $data['pergunta1'] .'|' .$data['pergunta2'] .'|' .$data['pergunta3'];

        return Pesquisa::create([
            'tema' => $data['tema'],
            'descricao' => $data['descricao'],
            'perguntas' => $perguntas,
            'status' => $data['status'],
        ]);
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
