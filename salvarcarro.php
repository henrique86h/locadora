<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$veiculo = $_POST["veiculo"];

echo $nome; echo $email; echo $veiculo;

$arquivo = fopen("veiculos.txt", "a");
fwrite($arquivo, $nome . ";");
fwrite($arquivo, $email . ";");
fwrite($arquivo, $veiculo . ";" . "\n");
fclose($arquivo);

header("location:index.php")
?>