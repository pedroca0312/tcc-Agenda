<?php

require_once 'BDConection.php';
require_once "Atividade.php";

class CrudAtividade
{
    public $conexao;


    public function GetUsuario($id){

        $this->conexao = BDConection::getConexao();

        $sql = "select * from usuario where username = '".$id."'";

        $res = $this->conexao->query($sql);

        $atividade= $res->fetch(PDO::FETCH_ASSOC);

        $at= new Atividade($atividade['id_atividade'],$atividade['descricao'],$atividade['data_cadastro'],$atividade['data_previsao'],$atividade['id_turma'],$atividade['id_disciplina']);

        return $at;


    }

    public function cadastroAgenda(Atividade $atividade){
        $this->conexao = BDConection::getConexao();

        $at[] = $atividade->getIdAtividade();
        $at[] = $atividade->getDescricao();
        $at[] = $atividade->getDataCadastro();
        $at[] = $atividade->getDataPrevisao();
        $at[] = $atividade->getIdTurma();
        $at[] = $atividade->getIdDisciplina();

        $sql = "SELECT * FROM  atividade";

    }
}