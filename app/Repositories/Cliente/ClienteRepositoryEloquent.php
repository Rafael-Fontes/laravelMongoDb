<?php

namespace App\Repositories\Cliente;


use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Cliente\ClienteRepository;
use App\Model\Cliente\Cliente;

/**
 * Class ClienteRepositoryEloquent
 * @package namespace App\Repositories\Cliente;
 */
class ClienteRepositoryEloquent extends BaseRepository implements ClienteRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cliente::class;
    }

    



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }





    public function buscarTodos(Array $paginacao = ['paginado' => true, 'qtd' => 15], Array $filtro = [])
    {
        if($paginacao['paginado'])
            return $this->model->paginate($paginacao['qtd']);

        return $this->model->all();
    }





    public function novoRegistro($cliente = null)
    {
        $this->model->create([
            'nome'  => 'Cliente 01',
            'email' => 'emailDoCliente@live.com',
        ]);
    }
}
