<!-- Biel Martinez Caceres -->
<?php
require 'controlador.php';
require './vista/registrar.vista.php';

$errors = array();
$correcte = array();
$usuari;
$contrasenya;
$contrasenya2;

$connexio = conectarBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuari =  arreglarDades($_POST['usuari']);
    $contrasenya = arreglarDades($_POST['contrasenya']);
    $contrasenya2 = arreglarDades($_POST['contrasenya2']);

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

    if (empty($contrasenya2)) {
        $errors[2] = "La segona contrasenya està buida";
    } else {
        $correcte[2] = true;
    }

    if ($contrasenya == $contrasenya2) {
        $correcte[3] = true;
    } else {
        $errors[3] = "Les contrasenyes no coincideixen";
    }



    if ($correcte[0] && $correcte[1] && $correcte[2] && $correcte[3]) {
        $comprovacio = $connexio->prepare("SELECT usuari FROM `usuaris` WHERE usuari = ? ");
        $comprovacio->execute([$usuari]);
        $usuariComprovacio = $comprovacio->fetchAll(PDO::FETCH_OBJ);
        if ($usuariComprovacio){
            echo "L'usuari introduït ja està registrat";
        } else {
            $contrasenya = password_hash($contrasenya, PASSWORD_DEFAULT);
            $sentencia = $connexio->prepare("INSERT INTO `usuaris`(`usuari`, `contrasenya`) VALUES (? ,?) ");
            $sentencia->execute([$usuari, $contrasenya]);
            header("Location:index.php");
        }
    }
}