<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ClienteModel;


class ClienteController extends Controller
{
    public function index()
    {
        $clienteModel = new ClienteModel();
        return $clienteModel->buscarTodos();

        //return "Ola mundo!";
    }




    public function cadastrar(Request $request)
    {
        if($request->isMethod('post'))
        {
            //dd($request->all());
           return ($request->all());
        }

        $clienteModel = new ClienteModel();
        $clienteModel->novoRegistro();
    }
}
