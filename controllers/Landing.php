<?php
session_start();
require_once "models/Usuario.php";

class Landing
{
    public function __construct()
    {
    }
    public function index()
    {
        $msj = "";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/app/header.view.php";
            require_once "views/app/index.view.php";
            require_once "views/app/footer.view.php";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombreUsuario = $_POST['NombreUsuario'];
            $Password = $_POST['Password'];
            $ConfirmPass = $_POST['ConfirmPass'];

            $usuario = new Usuario(NULL, $nombreUsuario, $Password, $ConfirmPass);

            // Registrar Usuario
            $usuario->RegistrarUsuario();

            // Redireccionar después de enviar los datos del usuario.
            header("Location: ?c=Landing");
        }
    }
}
?>