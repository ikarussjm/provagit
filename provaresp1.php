<HTML>
<head>
<title>Cliente cadastrado</title>
<meta charset="utf-8">
</head>

<body>

<?php

	require 'provaconexao.php';
	
	$nome = $_POST['txtnome'];
	$endereco = $_POST['txtendereco'];
	$bairro = $_POST['txtbairro'];
	$cep = $_POST['txtcep'];
	$telefone = $_POST['txttelefone'];
	$email = $_POST['txtemail'];
	$aniversario = $_POST['txtaniversario'];
	
		echo "Seu nome é: ".$nome."<br>";
		echo "Seu endereço é: ".$endereco."<br>";
		echo "Seu Bairro é: ".$bairro."<br>";
		echo "Seu CEP é: ".$cep."<br>";
		echo "Seu telefone é: ".$telefone."<br>";
		echo "Seu email é: ".$email."<br>";
		echo "Seu Aniversário é: ".$aniversario."<br>";
		
	
	$conexao = DBConnect();
		$sql = "INSERT INTO tblclientes(idcliente, nomecliente, endereco, bairro, cep, telefone, email, aniversario)
			values
			(0, '$nome', '$endereco', '$bairro', '$cep', '$telefone', '$email', '$aniversario')";
			
	if (mysqli_query($conexao, $sql)) {
		echo "Cadastro realizado com sucesso!";
	} else {
		echo "Error: ".mysqli_error($conexao);
	}
	
?>

</body>
</html>