<?php
include("cabecalho.php");
include("conecta.php"); 
include("banco-pessoa.php"); 

$id=$_GET['id'];
if(deletePessoa($conexao, $id)) { ?>
    <p class="text-success"> Removido com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger"> Não foi possivel completar a ação <?= $msg ?></p>
<?php
}
?>