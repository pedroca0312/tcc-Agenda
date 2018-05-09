<?php

require_once 'BDConection.php';
require_once 'Usuario.php';
class CrudLogin
{
    public $conexao;

    public function GetUsuario($id){
        $this->conexao = BDConection::getConexao();

        $sql = "select * from usuario where username = '".$id."'";

        $res = $this->conexao->query($sql);

        $usuario = $res->fetch(PDO::FETCH_ASSOC);

        $usu = new Usuario($usuario['username'],$usuario['nome'],$usuario['email'],$usuario['senha'],$usuario['id_usuario']);

        return $usu;


    }

    public function CadastrarUsuario(Usuario $usuario){
        $this->conexao = BDConection::getConexao();

        $usu[] = $usuario->getNome();
        $usu[] = $usuario->getEmail();
        $usu[] = $usuario->getUsername();
        $usu[] = $usuario->getSenha();

        $sql = "insert into usuario (nome,email,username,senha) values ($usu[0],$usu[1],$usu[2],$usu[3])";


    }


}