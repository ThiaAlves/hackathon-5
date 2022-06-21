<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPessoa extends Model
{
    use HasFactory;

    protected $table = 'pessoa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'estado',
        'cidade',
        'bairro',
        'numero',
        'cep',
        'password',
        'tipo',
        'status',
    ];

    protected $hidden = ['password'];

    public static function readPessoas()
    {
        return ModelPessoa::orderBy('nome', 'asc')->get();
    }

    public static function createPessoa($data)
    {
        return ModelPessoa::create($data);
    }

    public static function updatePessoa($id, $data)
    {
        return ModelPessoa::where('id', $id)->update($data);
    }

    public static function deletePessoa($id)
    {
        return ModelPessoa::where('id', $id)->delete();
    }

    public static function readPessoa($id)
    {
        return ModelPessoa::find($id);
    }

    public static function registerPessoa($data){
        $tipo = 'cliente';
        $status = 1;

       return ModelPessoa::create([
            'nome' => $data['nome'],
            'cpf' => $data['cpf'],
            'email' => $data['email'],
            'estado' => $data['estado'],
            'cidade' => $data['cidade'],
            'bairro' => $data['bairro'],
            'numero' => $data['numero'],
            'cep' => $data['cep'],
            'password' => bcrypt($data['password']),
            'tipo' => $tipo,
            'status' => $status,
        ]);
    }
}
