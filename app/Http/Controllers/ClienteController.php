<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Repositories\Cliente\ClienteRepository;
use Illuminate\Http\Request;


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
        return $this->repository->buscarTodos(['paginado' => true, 'qtd' => 2]);
    }





    public function cadastrar(ClienteRequest $request)
    {
        return $this->repository->novoRegistro($request->all());
    }
}
