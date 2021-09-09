<HTML>
<head>
<title>Relatorio de dados Clientes</title>
<meta charset="utf-8">
</head>

<body>

<table border=2 width=70% align=center>
<tr align=center>
<td width=25%> Nome </td> <td width=25%> Endereço </td> <td width=25%> Bairro </td> <td width=25%> CEP </td> <td width=25%> Telefone </td> <td width=25%> E-mail </td> <td width=25%> Aniversário </td> 
</tr>

<?php

	require 'provaconexao.php';
	
	$conexao = DBConnect();
	$sql = "select nomecliente, endereco, bairro, cep, telefone, email, aniversario from tblclientes";
	
	$result1 = mysqli_query($conexao, $sql) or die ( mysqli_error($conexao));
	
	while ($row = mysqli_fetch_assoc($result1)) {
		echo "<tr align=center>";
		echo "<td>".$row['nomecliente']."</td>";
		echo "<td>".$row['endereco']."</td>";
		echo "<td>".$row['bairro']."</td>";
		echo "<td>".$row['cep']."</td>";
		echo "<td>".$row['telefone']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['aniversario']."</td>";
		echo "</tr>";
	}
?>