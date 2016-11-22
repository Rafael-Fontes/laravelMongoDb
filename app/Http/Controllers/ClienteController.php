<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Repositories\Cliente\ClienteRepository;


class ClienteController extends Controller
{

    /**
     * @var ClienteRepository
     */
    protected $repository;



    /**
     * @param ClienteRepository $repository
     */
    function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }





    /**
     * @url     meu.dominio/api/v1/clientes
     * @url     meu.dominio/api/v1/clientes/filtros?limit=25&offset=40
     * @return object
     */
    public function listar()
    {
        return $this->repository->buscarTodos();
    }





    /**
     * @url   meu.dominio/api/v1/clientes/1
     * @url   meu.dominio/api/v1/clientes/1/enderecos
     * @url   meu.dominio/api/v1/clientes/1/enderecos/1
     * @url   meu.dominio/api/v1/clientes/1/telefones/
     * @url   meu.dominio/api/v1/clientes/1/telefones/1
     *
     * @method GET
     * @param  alphanumeric $id
     * @return object
     */
    public function listarUm($id)
    {
        if(!empty($id)) {
            return $this->repository->buscarUm($id);
        }
    }





    /**
     * @url   meu.dominio/api/v1/clientes
     * @url   meu.dominio/api/v1/clientes/id/categorias
     * @url   meu.dominio/api/v1/clientes/id/telefones
     *
     * @method POST
     * @param  ClienteRequest $request
     * @return object
     */
    public function cadastrar(ClienteRequest $request)
    {
        return $this->repository->cadastrar($request->all());
    }





    public function atualizar(ClienteRequest $request)
    {
        $clienteId = filter_var($request->input('id'), FILTER_SANITIZE_STRING);

        if(!empty($clienteId))
        {
            $clienteBusca = $this->repository->buscarUm($clienteId);
           dd($clienteBusca);
        }
    }


    /**
     * @url
     * @param $id
     */
    public function deletar($id)
    {

    }
}
