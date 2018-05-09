<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 03/05/18
 * Time: 09:04
 */

class Usuario
{
    public $username;
    public $nome;
    public $email;
    public $senha;
    public $id;


    public function __construct($nome,$email,$senha,$id,$username)
    {
        $this->nome = $nome;
        $this->email= $email;
        $this->senha= $senha;
        $this->id= $id;
        $this->username = $username;

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
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $nome
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }



}


