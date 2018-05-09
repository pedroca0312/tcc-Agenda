<?php
require_once '../Models/CrudLogin.php';
$acao = 'verifica';

switch ($acao) {
    case 'verifica':
        $crud = new CrudLogin();


        if (isset($_POST['gravar'])) {
            $usuario = $crud->GetUsuario($_POST['usuario']);
            if ($_POST['usuario'] == $usuario->username and $_POST['senha'] == $usuario->senha) {
               header('Location: ../views/sucesso.php ');
            } else {
                echo 'Opa ';
            }
        } else {
            include '../views/login.php';

        }
        break;
}