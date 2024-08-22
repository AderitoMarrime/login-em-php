<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <h1>Voce esta logado</h1>
    <?php 
        echo"<p>Bem vindo {$_SESSION['usuario']}</p>";
    ?>
    <form action="index.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>

<?php

    if (isset($_POST['logout'])) {
        session_destroy();
        header("location: login.php");
    }

?>