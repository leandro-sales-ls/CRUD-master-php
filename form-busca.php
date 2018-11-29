<?php include("cabecalho.php"); ?>

<form action="busca-db.php" method="POST">
<table class="table">
    <tr>
        <td>bucar</td>
        <td><input class="form-control" type="text" name="consulta" placeholder="buscar por nome"  /></td>
    </tr>   
    <tr>
        <td><button class="btn btn-primary" type="submit">buscar</button></td>
    </tr>       
</table>
</form>