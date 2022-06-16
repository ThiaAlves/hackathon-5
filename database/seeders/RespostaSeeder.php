<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespostaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respostas')->insert([
            [
            'pessoa_id' => 1,
            'pesquisa_id' => 1,
            'respostas' => '1, Resposta 1 / 2, Resposta 2, / 3, Resposta 3',
            'status' => true
            ],
            [
            'pessoa_id' => 2,
            'pesquisa_id' => 2,
            'respostas' => '1, Resposta 1 / 2, Resposta 2, / 3, Resposta 3',
            'status' => true
            ],
            [
            'pessoa_id' => 3,
            'pesquisa_id' => 3,
            'respostas' => '1, Resposta 1 / 2, Resposta 2, / 3, Resposta 3',
            'status' => true
            ],
            [
            'pessoa_id' => 4,
            'pesquisa_id' => 4,
            'respostas' => '1, Resposta 1 / 2, Resposta 2, / 3, Resposta 3',
            'status' => true
            ],
            ]
    );
    }
}
