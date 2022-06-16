<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pessoas = Pessoa::readPessoas();
        return $Pessoas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
            $Pessoa = Pessoa::createPessoa($request->input());
            return response()->json(['success' => true,
                'message' => 'Pessoa criada com sucesso!',
                'data' => $Pessoa], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false,
                'message' => 'Erro ao criar pessoa!',
                'data' => $e->getMessage()], 500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $Pessoa = Pessoa::updatePessoa($id, $request->input());
            return response()->json(['success' => true,
                'message' => 'Pessoa atualizada com sucesso!',
                'data' => $Pessoa], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false,
                'message' => 'Erro ao atualizar pessoa!',
                'data' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Pessoa::deletePessoa($id);
            return response()->json(['success' => true,
                'message' => 'Pessoa excluída com sucesso!'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false,
                'message' => 'Erro ao excluir pessoa!',
                'data' => $e->getMessage()], 500);
        }

    }
}
