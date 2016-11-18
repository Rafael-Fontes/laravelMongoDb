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
            $this->validate($request, [
                'nome'  => 'required',
                'email' => 'required',
            ]);

            if($this->validate()->fails()){ return 'oi';
                $errors = $this->validate()->errors();

                return $errors->toJson();
            }

            //dd($request->all());
           return ($request->all());
        }

        $clienteModel = new ClienteModel();
        $clienteModel->novoRegistro();
    }
}
