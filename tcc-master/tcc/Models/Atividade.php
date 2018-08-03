<?php

class Atividade
{
    public $id_atividade;
    public $descricao;
    public $id_turma;
    public $id_disciplina;
    public $data_cadastro;
    public $data_previsao;


    public function __construct($id_atividade,$descricao,$id_turma,$id_disciplina,$data_cadastro,$data_previsao)
    {
        $this->id_atividade = $id_atividade;
        $this->descricao= $descricao;
        $this->id_turma= $id_turma;
        $this->id_disciplina= $id_disciplina;
        $this->data_cadastro = $data_cadastro;
        $this->data_previsao = $data_previsao;

    }

    public function getIdAtividade()
    {
        return $this->id_atividade;
    }

    /**
     * @param mixed $id_atividade
     */
    public function setIdAtividade($id_atividade)
    {
        $this->id_atividade = $id_atividade;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    /**
     * @param mixed $data_cadastro
     */
    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }

    /**
     * @return mixed
     */
    public function getDataPrevisao()
    {
        return $this->data_previsao;
    }

    /**
     * @param mixed $data_previsao
     */
    public function setDataPrevisao($data_previsao)
    {
        $this->data_previsao = $data_previsao;
    }

    /**
     * @return mixed
     */
    public function getIdTurma()
    {
        return $this->id_turma;
    }

    /**
     * @param mixed $id_turma
     */
    public function setIdTurma($id_turma)
    {
        $this->id_turma = $id_turma;
    }

    /**
     * @return mixed
     */
    public function getIdDisciplina()
    {
        return $this->id_disciplina;
    }

    public $conexao;


    /**
     * @param mixed $id_disciplina
     */
    public function setIdDisciplina($id_disciplina)
    {
        $this->id_disciplina = $id_disciplina;
    }
}