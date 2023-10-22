<!-- Biel Martinez Caceres -->
<?php
require 'controlador.php';


$connexio = conectarBD();

$errors = array();
$correcte = array();
$usuari;
$contrasenya;
$contrasenya2;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuari =  arreglarDades($_POST['usuari']);
    $contrasenya = arreglarDades($_POST['contrasenya']);

    if (empty($usuari)) {
        $errors[0] = "El camp usuari està buit";
    } else {
        $correcte[0] = true;
    }

    if (empty($contrasenya)) {
        $errors[1] = "El camp contrasenya està buit";
    } else {
        $correcte[1] = true;
    }

    if ($correcte[0] && $correcte[1]) {
        $sentencia = $connexio->prepare("SELECT usuari FROM usuaris WHERE usuari = ?");
        $sentencia->execute([$usuari]);
        $usuariBD = $sentencia->fetchColumn();
        $sentencia2 = $connexio->prepare("SELECT contrasenya FROM usuaris WHERE usuari = ?");
        $sentencia2->execute([$usuari]);
        $contrasenyaBD = $sentencia2->fetchColumn();

        $pwd = password_verify($contrasenya, $contrasenyaBD);
        if ($usuari == $usuariBD && $pwd) {
            session_start();
            $_SESSION["user"] = $usuari;
            header("Location:index.php");
        }
        elseif (!($usuari == $usuariBD)){
            echo "L'usuari introduït no existeix";
        }
        elseif (!$pwd) {
            echo "Contrasenya incorrecte";
        }
    }
}

require './vista/login.vista.php';
