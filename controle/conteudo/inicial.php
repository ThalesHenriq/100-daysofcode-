<?php

  include("classe/conexao.php");

  $sql_code = "SELECT * FROM usuario";
  $sql_query = $mysqli -> query($sql_code) or die($mysqli->error);
  $linha = $sql_query->fetch_assoc();

  $Sexo[1] = "masculino";
  $Sexo[2] = "feminino";


  $niveldeacesso[1] = "basico";
  $niveldeacesso[2] = "admin";


?>


<h1>usuarios</h1>
<a href="index.php?p=cadastrar">Cadastrar um Usuário</a>
<p class=espaco></p>
<table border="1" cellpadding="10">
	<tr class=titulo>
		<td>Nome</td>
		<td>Sobrenome</td>
		<td>Sexo</td>
		<td>E-mail</td>
		<td>Nivel de acesso</td>
		<td>Data de cadastro</td>
		<td>Ação</td>
	</tr>
	<?php
	do{
	?>
	<tr>
		<td><?php <?php echo $linha['nome']; ?></td>
		<td><?php <?php echo $linha['sobrenome']; ?></td>
		<td><?php <?php echo $sexo[$linha['sexo']]; ?></td>
		<td><?php <?php echo $linha['email']; ?></td>
		<td><?php <?php echo $niveldeacesso[$linha['niveldeacesso']]; ?></td>
		<td><?php 
		$d = explode("", $linha['datadecadastro']);
		$data = explode("-", $d[0]);
		echo "$data[2]/$data[1]/$data[0] Às $d[1]";



	    ?></td>
		<td>
			<a href="index.php?p=editar&usuario=<?php <?php echo $linha['codigo'] ?>">Editar</a>
			<a href="index.php?p=deletar&usuario=">Deletar</a>
		</td>
	</tr>
 <?php }while ($linha = $sql_query->fetch_assoc()); ?>
</table>