<?php
 include("cabecalho.php"); 
 include("conecta.php"); 
 include("banco-pessoa.php"); 

$pessoas = listaPessoa($conexao);
?>
<table class="table table-striped table-bordered">

<?php
foreach($pessoas as $pessoa) {
?>

    <tr>
    	<td><?= $pessoa['id'] ?></td>
        <td><?= $pessoa['nome'] ?></td>
        <td><?= $pessoa['email'] ?></td>
    </tr>

<?php
}
?>
</table>

<?php include("rodape.php"); ?>