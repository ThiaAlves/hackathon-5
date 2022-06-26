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
            'tema' => 'E-Commerce Casas Bahia',
            'descricao' => 'Pergunta sobre a loja das Casas Ceará',
            'perguntas' => 'Em uma nota de 0 a 10 o que achou do site? | Sobre a otimização do sistema qual sua nota? | Tem alguma sugestão para o site?',
            'status' => true
            ],
            [
            'tema' => 'Sistema de Controle de Estoque AkiExpress',
            'descricao' => 'Pergunta sobre o sistema de controle de estoque AliExpress',
            'perguntas' => 'Em uma nota de 0 a 10 o que achou do site? | Sobre a otimização do sistema qual sua nota? | Tem alguma sugestão para o site?',
            'status' => true
            ],
            [
            'tema' => 'E-commerce de Roupas Rennar',
            'descricao' => 'Pesquisa de Satisfação sobre o site de roupas Rennar',
            'perguntas' => 'Qual seu nível de satisfação com o site? | Qual foi sua facilidade de encontrar roupas? (0 a 10)',
            'status' => true
            ],
            [
            'tema' => 'E-commerce SubSubmarino',
            'descricao' => 'Pesquisa de Satisfação sobre o site SubSubmarino',
            'perguntas' => 'Qual sua nota do site? | Sobre a otimização do site qual sua nota? | Tem alguma observação?',
            'status' => true
            ],
            [
            'tema' => 'Concessionária Mareatti',
            'descricao' => 'Pesquisa de Satisfação sobre o site Mareatti',
            'perguntas' => 'Qual seu nível de satisfação com o site? | Qual foi sua facilidade de encontrar os produtos? (0 a 10)
             | Tem alguma observação?',
            'status' => true
            ],
            [
            'tema' => 'Navegando no Brasil',
            'descricao' => 'Pesquisa de Satisfação sobre o site Navegando no Brasil',
            'perguntas' => 'Qual seu nível de satisfação com o site? | Qual foi sua facilidade de encontrar as informações? (0 a 10) | Tem alguma observação?',
            'status' => true
            ],
            [
            'tema' => 'KartShop',
            'descricao' => 'Pesquisa de Satisfação sobre o site KartShop',
            'perguntas' => 'Qual seu nível de satisfação com o site? | Qual foi sua facilidade de encontrar as informações? (0 a 10) | Tem alguma observação?',
            'status' => true
            ],
            [
                'tema' => 'Concretos Conceito',
                'descricao' => 'Pesquisa de Satisfação sobre o site Conceito',
                'perguntas' => 'Qual seu nível de satisfação com o site? | Qual foi sua facilidade de encontrar as informações? (0 a 10) | Tem alguma observação?',
                'status' => true
            ],
            [
                'tema' => 'Cabelo e Pescoço',
                'descricao' => 'Pesquisa de Satisfação sobre o site Cabelo e Pescoço',
                'perguntas' => 'Qual seu nível de satisfação com o site? | Qual foi sua facilidade de encontrar as informações? (0 a 10) | Tem alguma observação?',
                'status' => true
            ],
            [
                'tema' => 'Cabeleleira Leila',
                'descricao' => 'Pesquisa de Satisfação sobre o site Cabeleleira Leila',
                'perguntas' => 'Qual seu nível de satisfação com o site? | Qual foi sua facilidade de encontrar as informações? (0 a 10) | Tem alguma observação?',
                'status' => true
            ]
            ]

    );
    }

}
