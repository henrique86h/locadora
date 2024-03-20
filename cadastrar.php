<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="salvar.php" method="post">
        <input name="usuario" placeholder="Informe seu usuário">
        <button>Salvar</button> 
    </form>
    <?php
        $mensagem = $_GET["mensagem"];
        if($mensagem == "ok"){
            echo "<h3>Cadastro reaizado com sucesso</h3>";
        }else{
            echo "Bem vindo a página";
        }

    ?>
</body>
</html>