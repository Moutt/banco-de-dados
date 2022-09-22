<?php
include_once('config.php');
    if(isset($_POST['submit'])){
        print_r($_POST['nome']);

        $nome = $_POST['nome'];
        $result = mysqli_query($conexao, "INSERT INTO nome(nome) VALUES ('$nome')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nome</title>
</head>
<body>
    <form action="formulario.php" method="POST">
        digite aqui seu nome:
        <input type="text" name="nome" id="nome">
        <input type="submit" name="submit" value="ok">        
    </form>

</body>
</html>