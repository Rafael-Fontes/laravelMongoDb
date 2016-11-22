<?php

namespace App\Repositories\Cliente;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface ClienteRepository
 * @package namespace App\Repositories\Cliente;
 */
interface ClienteRepository extends RepositoryInterface
{

    /**
     * @method get
     * @param array $filtro
     * @return object
     */
    public function buscarTodos(Array $filtro = []);





    /**
     * @method post
     * @param ClienteRepository $cliente
     * @return object
     */
    //public function novoRegistro(ClienteRepository $cliente= null);
}
