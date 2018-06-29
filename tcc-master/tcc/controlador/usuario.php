<?php
require_once '../Models/CrudLogin.php';
require_once '../Models/Usuario.php';

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'verifica';
}

switch ($acao) {
    case 'verifica':

        $crud = new CrudLogin();
        if (isset($_POST['gravar'])) {
            $usuarios = $crud->GetUsuarios();
            foreach ($usuarios as $usuario) {
                if ($_POST['usuario'] == $usuario->username and $_POST['senha'] == $usuario->senha) {
                    echo 'oi';
                    header('Location: ../fullcalendar-3.9.0/index.php');
                }
            }
        } else {
            include '../views/login.php';

        }
        break;
    case 'cadastrar':
        $crud = new CrudLogin();

        if (isset($_GET)){
            include '../views/cadastro.php';
        }
        if (isset($_POST['botao'])){
            $usuario = new Usuario($_POST['nome'],$_POST['email'],$_POST['senha'],Null,$_POST['usuario']);
        $crud->CadastrarUsuario($usuario);

        header('Location: ../views/sucesso.php');
        }
}