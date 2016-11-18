<?php

namespace App\Model;


class ClienteEntity
{
    /**
     * @var integer $id
     */
    private $id;
    private $nome;



    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return ClienteEntity
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

}