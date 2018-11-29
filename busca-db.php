<?php 
 include "conecta.php";
 include("cabecalho.php");
 $consulta= $_POST["consulta"];
 $resultado = mysqli_query($conexao, "SELECT * from pessoa WHERE nome like '%$consulta%'");?>


    <table class="table table-striped table-bordered">
    	<tr>
    	<th>id</th>
 		<th>nome</th>
    	<th>email</th>
    	</tr>
 <?php
	while ($vetor = mysqli_fetch_array($resultado)) {
			$id= $vetor['id'];
			$nome = $vetor['nome'];
			$email = $vetor['email'];
			
			?>
    				<tr>
    					<td><?php echo "$id<br>";?> </td>
        				<td><?php echo "$nome<br>";?></td>
        				<td><?php echo "$email<br>";?></td>
        				<td><?php echo "<a href='delete-pessoa.php?&id=".$vetor['id']."'>Remover</a>";?>
        				<?php echo "<a href='form-edita.php?'>| editar</a>";?></td>
    				</tr>
			<?php
			
			
	}


 

	