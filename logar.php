

<?php

	require_once("UsuarioCripto.php");
	$usuario = new UsuarioCripto("phulano","123456");
?>

<html>
<body>
	<h1> P&aacute;gina principal </h1>
	<?php
		$senha = $_GET["senha"];
		if ($usuario-> validarSenha($senha))
		{	$login = $usuario->getLogin();
			echo("$login logou no sistema");
		} else
		{
			echo("Senha incorreta");
		}
	?>
	<br />
</body>
<html>
