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
        DB::table('pessoa')->insert([
            [
                'nome' => 'Usuário de teste',
                'cpf' => '12345678901',
                'telefone' => '4499887722',
                'email' => 'usuario@teste.com.br',
                'password' => bcrypt( 'senha123' ),
                'endereco' => 'Rua Teste',
                'estado' => 'SP',
                'cidade' => 'São Paulo',
                'bairro' => 'Centro',
                'numero' => '123',
                'cep' => '12345-678',
                'tipo' => 'cliente',
                'status' => true,
            ],
            [
                'nome' => 'Administrador',
                'cpf' => '12345678901',
                'telefone' => '44998887722',
                'email' => 'admin@gmail.com',
                'password' => bcrypt( 'senha123' ),
                'endereco' => 'Rua Teste 2',
                'estado' => 'SP',
                'cidade' => 'São Paulo',
                'bairro' => 'Centro',
                'numero' => '123',
                'cep' => '12345-678',
                'tipo' => 'admin',
                'status' => true,
            ]
            ]);
    }
    }


