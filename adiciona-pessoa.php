<?php 

include("cabecalho.php");
include("conecta.php"); 
include("banco-pessoa.php"); 
?>

<?php

$nome = $_POST["nome"];
$email = $_POST["email"];

if(inserePessoa($conexao, $nome, $email)) { ?>
    <p class="text-success"> <?= $nome; ?>, <?= $email; ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger"><?= $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
