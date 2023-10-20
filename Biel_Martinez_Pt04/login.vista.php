<!-- Biel Martinez Caceres -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="estilsForm.css">
</head>

<form action="registrar.php" method="post">
    Usuari: <input type="text" name="usuari" value="<?php echo htmlspecialchars(isset($_POST['usuari']) ? $_POST['usuari'] : ''); ?>"> <?php echo isset($errors[0]) ? $errors[0] : ''; ?><br>
    Contrasenya: <input type="password" name="contrasenya" value="<?php echo htmlspecialchars(isset($_POST['contrasenya']) ? $_POST['contrasenya'] : ''); ?>"> <?php echo isset($errors[1]) ? $errors[1] : ''; ?><br>
    <input type="submit">
</form>