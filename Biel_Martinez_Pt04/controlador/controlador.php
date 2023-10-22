<!-- Biel Martinez Caceres -->
<?php
    function conectarBD(){
        $connexio = new PDO('mysql:host=localhost;dbname=pt04_Biel_Martinez', 'root', '');  
        return $connexio;
    }
    
    function arreglarDades($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    function iniciarSessio($usuari) {
        session_start();
        $_SESSION["user"] = $usuari;
    }
?>