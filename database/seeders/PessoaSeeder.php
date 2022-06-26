<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pessoa;
use Faker\Factory as Faker;

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
            ],
        ]);
        //     [
        //         'nome' => 'Jhonathan Cordeiro Felizardo',
        //         'cpf' => '86144572279',
        //         'telefone' => '(92) 97480-6609',
        //         'email' => 'jhonathan.felizardo@geradornv.com.br',
        //         'password' => bcrypt( 'JqbIG@F8lf1Z' ),
        //         'endereco' => 'Rua Anori',
        //         'estado' => 'AM',
        //         'cidade' => 'Manacapuru',
        //         'bairro' => 'União',
        //         'numero' => '951',
        //         'cep' => '69401-167',
        //         'tipo' => 'cliente',
        //         'status' => true,
        //     ],
        //     [
        //         'nome' => 'Maycon Carino Barboza',
        //         'cpf' => '89898989898',
        //         'telefone' => '(92) 97480-6609',
        //         'email' => 'maycon.barboza@geradornv.com.br',
        //         'senha' => bcrypt( 'F!O1a)l7yPJx' ),
        //         'endereco' => 'Rua L',
        //         'estado' => 'BA',
        //         'cidade' => 'Vitória da Conquista',
        //         'bairro' => 'Campinhos',
        //         'numero' => '4565',
        //         'cep' => '450610570',
        //         'tipo' => 'cliente',
        //         'status' => true,
        //     ],
        //     [
        //         'nome' => 'Simone Veiga Pena',
        //         'cpf' => '76685891718',
        //         'telefone' => '(24) 98337-1955',
        //         'email' => ''
        //     ]
        //     ]);

        $faker = Faker::create('pt_BR');
        foreach(range(1, 500) as $index) {
            Pessoa::create([
                'nome' => $faker->name,
                'cpf' => $faker->numberBetween(10000000000, 99999999999),
                'telefone' => $faker->phoneNumber,
                'email' => $faker->email,
                'password' => bcrypt( 'senhaCliente' ),
                'endereco' => $faker->address,
                'estado' => $faker->state,
                'cidade' => $faker->city,
                'bairro' => $faker->streetName,
                'numero' => $faker->buildingNumber,
                'cep' => $faker->postcode,
                'tipo' => 'cliente',
                'status' => true,
            ]);
        }

        foreach(range(1,5) as $index) {
            Pessoa::create([
                'nome' => $faker->name,
                'cpf' => $faker->numberBetween(10000000000, 99999999999),
                'telefone' => $faker->phoneNumber,
                'email' => $faker->email,
                'password' => bcrypt( 'senhaColaborador' ),
                'endereco' => $faker->address,
                'estado' => $faker->state,
                'cidade' => $faker->city,
                'bairro' => $faker->streetName,
                'numero' => $faker->buildingNumber,
                'cep' => $faker->postcode,
                'tipo' => 'colaborador',
                'status' => true,
            ]);
        }

    }
    }


