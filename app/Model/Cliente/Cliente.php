<?php

namespace App\Model\Cliente;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;


class Cliente extends Model implements Transformable
{
    use TransformableTrait;


    protected $table    = 'clientes';
    protected $fillable = ['nome', 'email'];


    const CREATED_AT = 'criado';
    const UPDATED_AT = 'modificado';
}
