<?php

require_once 'BDConection.php';
require_once 'Usuario.php';

class CrudLogin
{
    public $conexao;

    public function GetUsuarios()
    {
        $this->conexao = BDConection::getConexao();

        $sql = "select * from usuario";

        $res = $this->conexao->query($sql);
        $usu = [];
        $usuarios = $res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($usuarios as $usuario){
            $usu[] = new Usuario($usuario['nome'], $usuario['email'], $usuario['senha'],$usuario['id_usuario'], $usuario['username']);
        }
        return $usu;


    }

    public function CadastrarUsuario(Usuario $usuario){
        $this->conexao = BDConection::getConexao();

        $usu[] = $usuario->getNome();
        $usu[] = $usuario->getEmail();
        $usu[] = $usuario->getSenha();
        $usu[] = $usuario->getUsername();



        $sql = "insert into usuario (nome,email,senha,username) values ('".$usu[0]."','".$usu[1]."','".$usu[2]."','".$usu[3]."')";

        $res = $this->conexao->query($sql);

    }


}