<?php
	require_once("usuario.php");
	
	class UsuarioCripto extends usuario
	{
		public function __construct($login,$senha)
		{
			parent:: __construct($login, md5($senha));
		}
		
		public function validarSenha($senha)
		{
			return parent:: validarSenha(md5($senha));
		}
	}
	
?>