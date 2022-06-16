<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesquisaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pesquisas')->insert([
            [
            'tema' => 'Pesquisa de Satisfação 1',
            'descricao' => 'Pesquisa de Satisfação',
            'perguntas' => '1, Pergunta 1 / 2, Pergunta 2, / 3, Pergunta 3',
            'status' => true
            ],
            [
            'tema' => 'Pesquisa de Satisfação 2',
            'descricao' => 'Pesquisa de Satisfação',
            'perguntas' => '1, Pergunta 1 / 2, Pergunta 2, / 3, Pergunta 3',
            'status' => true
            ],
            [
            'tema' => 'Pesquisa de Satisfação 3',
            'descricao' => 'Pesquisa de Satisfação',
            'perguntas' => '1, Pergunta 1 / 2, Pergunta 2, / 3, Pergunta 3',
            'status' => true
            ],
            [
            'tema' => 'Pesquisa de Satisfação 4',
            'descricao' => 'Pesquisa de Satisfação',
            'perguntas' => '1, Pergunta 1 / 2, Pergunta 2, / 3, Pergunta 3',
            'status' => true
            ],
            ]

    );
    }

}
