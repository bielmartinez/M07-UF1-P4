<!-- Biel Martinez Caceres -->
<?php
    function conectarBD(){
        $connexio = new PDO('mysql:host=localhost;dbname=pt04_Biel_Martinez', 'root', '');  
        return $connexio;
    }
?>