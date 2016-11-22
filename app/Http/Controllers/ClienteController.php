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





    public function index()
    {
        return $this->repository->buscarTodos();
    }





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




    public function deletar($id)
    {

    }
}
