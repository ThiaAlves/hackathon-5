<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'tema' => 'Pesquisa de Satisfação',
            'descricao' => 'Pesquisa de Satisfação',
            'perguntas' => '1. Qual o nível de satisfação que você está com o nosso sistema?' .
                '2. Você gostaria de fazer uma nova pesquisa?',
            'status' => true
        ]);
    }
}
