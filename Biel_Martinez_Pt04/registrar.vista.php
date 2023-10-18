<!-- Biel Martinez Caceres -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="estilsForm.css">
</head>

<form action="registrar.php" method="post">
    Usuari: <input type="text" name="usuari" value="<?php echo htmlspecialchars(isset($_POST['usuari']) ? $_POST['usuari'] : ''); ?>"> <?php echo isset($errors[0]) ? $errors[0] : ''; ?><br>
    Contrasenya: <input type="text" name="contrasenya" value="<?php echo htmlspecialchars(isset($_POST['contrasenya']) ? $_POST['contrasenya'] : ''); ?>"> <?php echo isset($errors[1]) ? $errors[1] : ''; ?><br>
    Repetir contrasenya: <input type="text" name="contrasenya2" value="<?php echo htmlspecialchars(isset($_POST['contrasenya2']) ? $_POST['contrasenya2'] : ''); ?>"> <?php echo isset($errors[2]) ? $errors[2] : ''; ?><br>
    <?php echo isset($errors[3]) ? $errors[3] : ''; ?><br>
    <input type="submit">
</form>