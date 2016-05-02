<html>
<head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<?php

require_once(__DIR__."/conectar_bd.php");

$nome 			= trim($_POST['firstname']);
$sobrenome  = trim($_POST['lastname']);
$email 			= trim($_POST['email']);
$usuario 		= trim($_POST['username']);
$senha 			= trim($_POST['userpass']);

/* Checa erros */
if ((!$nome) || (!$sobrenome) || (!$email) || (!$usuario)){
		echo "ERRO: Prencha o campo: ";

		if (!$nome){ echo "Nome; "; }

		if (!$sobrenome){ echo "Sobrenome; "; }

		if (!$email){ echo "Email; "; }

		if (!$usuario){ echo "Nome de Usuário; "; }

}
else{
		$sql = "INSERT INTO USUARIOS (firstname, lastname, email, username, userpass)
						VALUES ('$nome', '$sobrenome', '$email', '$usuario', '$userpass');";
		mysql_query($sql,$conn);
		echo "Usuário $nome $sobrenome cadastrado com sucesso!";
}
?>

</body>
</html>
