<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pessoa;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pessoa::factory(10)->create();

        Pessoa::factory()->create([
            'name' => 'Test User',
            'cpf' => '12345678901',
            'email' => 'test@example.com',
             'senha' => bcrypt('secret'),
            'tipo' => 'admin',
            'status' => true
        ]);
    }
    }

