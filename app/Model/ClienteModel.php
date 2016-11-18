<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;


class ClienteModel extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'clientes';

    protected $fillable   = ['nome', 'email'];
    protected $hidden     = [];



    /**
     * @verbo GET
     * @param array $filtro
     * @return object
     */
    public function buscarTodos(Array $filtro = [])
    {
       $users = ClienteModel::all();
        return $users;
    }





    /**
     * @verbo GET
     * @param integer $id
     * @return object
     */
    public function buscarUm($id)
    {

    }





    /**
     * @verbo POST
     * @param ClienteModel $cliente
     * @return object
     */
    public function novoRegistro(ClienteModel $cliente= null)
    {
        ClienteModel::create([
            'nome' => 'Cliente 01'
        ]);
    }





    /**
     * @verbo DELETE
     * @param integer $id
     * @return boolean
     */
    public function deletar($id)
    {

    }



    /**
     * @verbo DELETE
     * @param integer $data
     * @return boolean
     */
    public function deletarVarios($data)
    {

    }




}
