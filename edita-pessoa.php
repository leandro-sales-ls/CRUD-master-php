<?php

	include("cabecalho.php");
	include("conecta.php"); 
	include("banco-pessoa.php"); 
?>

<?php


	$nome=$_POST['nome']; 
 	$email=$_POST['email'];
 	$id=$_POST['id'];

 	if(editaPessoa($conexao, $nome, $email, $id)) { ?>
    <p class="text-success"> <?= $nome; ?>,  <?= $email; ?>, <?= $id; ?>  editado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger"><?= $id; ?> não foi editado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
