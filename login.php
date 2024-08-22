<?php
    session_start();
    include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario"> <br>
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha"> <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
    if (isset($_POST['login'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if (empty($usuario) || empty($senha)) {
            echo "<script>alert('Voce deve preencher todos os campos!')</script>";
        } else {
            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

            $resultado = mysqli_query($conexao, $sql);
    
            if (mysqli_num_rows($resultado) > 0) {
                $_SESSION['usuario'] = $usuario;
                header("location: index.php");
            } else {
                echo "<script>alert('usuario ou senha incorreta, tente novamente')</script>";
            }
        }


    }

    mysqli_close($conexao)
?>