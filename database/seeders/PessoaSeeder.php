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
        DB::table('pessoas')->insert([
            [
                "nome" => "Administrador",
                "cpf" => "12345678911",
                "email" => "admin@gmail.com",
                "estado" => "SP",
                "cidade" => "São Paulo",
                "bairro" => "Centro",
                "numero" => "123",
                "cep" => "12345-678",
                "senha" => "123456",
                "tipo" => "admin",
                "status" => true,
            ],
            [
                "nome" => "Cliente",
                "cpf" => "12345678912",
                "email" => "cliente@gmail.com",
                "estado" => "SP",
                "cidade" => "São Paulo",
                "bairro" => "Centro",
                "numero" => "143",
                "cep" => "12345-900",
                "senha" => "123456",
                "tipo" => "cliente",
                "status" => true,
            ],
            [
                "nome" => "Colaborador",
                "cpf" => "12345678913",
                "email" => "colaborador@gmail.com",
                "estado" => "SP",
                "cidade" => "Sorocaba",
                "bairro" => "Centro",
                "numero" => "123",
                "cep" => "12345-678",
                "senha" => "123456",
                "tipo" => "colaborador",
                "status" => true,
            ],
            [
                "nome" => "Fulano de Tal",
                "cpf" => "12345678914",
                "email" => "fulano@gmail.com",
                "estado" => "SP",
                "cidade" => "Sorocaba",
                "bairro" => "Centro",
                "numero" => "123",
                "cep" => "12345-678",
                "senha" => "123456",
                "tipo" => "cliente",
                "status" => true,
            ],
            [
                "nome" => "Ciclano de Tal",
                "cpf" => "12345678915",
                "email" => "ciclano@gmail.com",
                "estado" => "SP",
                "cidade" => "Sorocaba",
                "bairro" => "Centro",
                "numero" => "123",
                "cep" => "12345-678",
                "senha" => "123456",
                "tipo" => "cliente",
                "status" => false,
            ],
            [
                "nome" => "Beltrano de Tal",
                "cpf" => "12345678916",
                "email" => "beltrano@gmail.com",
                "estado" => "SP",
                "cidade" => "Sorocaba",
                "bairro" => "Centro",
                "numero" => "123",
                "cep" => "12345-678",
                "senha" => "123456",
                "tipo" => "cliente",
                "status" => true,
            ],
            [
                "nome" => "Zezinho de Tal",
                "cpf" => "12345678917",
                "email" => "ze@gmail.com",
                "estado" => "SP",
                "cidade" => "Sorocaba",
                "bairro" => "Centro",
                "numero" => "123",
                "cep" => "12345-678",
                "senha" => "123456",
                "tipo" => "cliente",
                "status" => true,
            ],
            ]);
    }
    }


