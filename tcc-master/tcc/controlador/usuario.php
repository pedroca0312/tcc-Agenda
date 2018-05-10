<?php
require_once '../Models/CrudLogin.php';
$acao = 'verifica';

switch ($acao) {
    case 'verifica':

        $crud = new CrudLogin();
        if (isset($_POST['gravar'])) {
            $usuarios = $crud->GetUsuarios();
            foreach ($usuarios as $usuario) {
                if ($_POST['usuario'] == $usuario->username and $_POST['senha'] == $usuario->senha) {
                    echo 'oi';
                    header('Location: ../views/sucesso.php ');
                }
            }
        } else {
            include '../views/login.php';

        }
        break;
}