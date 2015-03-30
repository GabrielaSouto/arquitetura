
<?php
	class Usuario
	{
		private $login;
		private $senha;
		
		public function __construct($login, $senha)
		{
			$this->login=$login;
			$this->senha=$senha;
		}
		
		public function validarSenha($senha)
		{
			return $this->senha == $senha;
		}
		
		public function getLogin()
		{
			return $this->login;
		}
	}
?>