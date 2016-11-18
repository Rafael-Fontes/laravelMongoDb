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
     * @method get
     * @param array $filtro
     * @return object
     */
    public function buscarTodos(Array $filtro = [])
    {
       $users = ClienteModel::all();
        return $users;
    }





    /**
     * @method get
     * @param integer $id
     * @return object
     */
    public function buscarUm($id)
    {

    }





    /**
     * @method post
     * @param ClienteModel $cliente
     * @return object
     */
    public function novoRegistro(ClienteModel $clientev= null)
    {
        ClienteModel::create([
            'nome' => 'Cliente 01'
        ]);
    }





    /**
     * @method delet
     * @param integer $id
     * @return boolean
     */
    public function deletar($id)
    {

    }



    /**
     * @method delet
     * @param integer $data
     * @return boolean
     */
    public function deletarVarios($data)
    {

    }




}
