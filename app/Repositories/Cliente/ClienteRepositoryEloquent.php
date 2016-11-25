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





    /**
     * @param array $filtros [page, limit, fields]
     * @return object
     */
    public function buscarTodos(Array $filtros = [])
    {
        $limit = 20;
        if(isset($filtros['limit']) && !empty($filtros['limit']))
            $limit = (int) $filtros['limit'];

        $fields = '*';
        if(isset($filtros['fields']) && !empty($filtros['fields']))
            $fields = filter_var($filtros['fields'], FILTER_SANITIZE_STRING);


        if(isset($filtros['sort']) && !empty($filtros['sort']))
        {
            $arraySort = $this->ordenar($filtros['sort']);
            foreach ($arraySort as $chave => $valor){

            }
        }

        return $this->model
                    ->select($fields)
                    ->paginate($limit);
    }





    /**
     * @param alphanumeric $id
     * @return object
     */
    public function buscarUm($id)
    {
        $id = filter_var($id, FILTER_SANITIZE_STRING);
        if(!empty($id)) {
            return $this->model->where('_id', $id)->first();
        }
    }





    public function cadastrar(Array $cliente = [])
    {
        return $this->model->create($cliente);
    }





    public function atualizar(Array $cliente = [])
    {
        if(isset($cliente['_id'])) {

        }
    }





    /**
     * @param string $dados
     * @return array
     */
    private function ordenar($dados)
    {
        if(!empty($dados))
        {
            $strigHigienizada = filter_var($dados, FILTER_SANITIZE_STRING);
            $arraySort        = explode(',', $strigHigienizada);
            $arrayDados       = [];

            foreach ($arraySort as $sort)
            {
                $ordem = (substr($sort, 0, 1) == '-') ? 'DESC' : 'ASC';
                $campo = str_replace('-', '', $sort);

                $arrayDados[$campo] = $ordem;
            }

            return $arrayDados;
        }
    }
}
