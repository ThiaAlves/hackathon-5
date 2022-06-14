<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'pessoa_id' => 1,
            'pesquisa_id' => 1,
            'respostas' => '1. Otimo' .
                '2. Bom' .
                '3. Regular' .
                '4. Ruim' .
                '5. Péssimo',
            'status' => true
        ]);
    }
}
