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





    public function buscarTodos()
    {
        return $this->model->paginate(10);
    }





    public function buscarUm($id)
    {
        if(!empty($id)) {
            return $this->model->where('_id', $id);
        }
    }





    public function cadastrar(Array $cliente = [])
    {
        $this->model->create($cliente);
    }





    public function atualizar(Array $cliente = [])
    {
        if(isset($cliente['_id'])) {

        }
    }
}
