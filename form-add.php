<?php include("cabecalho.php"); ?>
<form action="adiciona-pessoa.php" method="POST">
<table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" required /></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input class="form-control" type="email" name="email" placeholder="email@example.com" /></td>
        </tr>
        
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button>
            <input class="btn btn-primary" type="reset" value="limpar">
            </td>
            
    </table>
    </form>