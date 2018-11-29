<?php
	function connect($banco="default", $usuario="root", $senha="12345", $hostname="") {
		$connect = mysqli_connect($hostname, $usuario, $senha, $banco);

		if(!$connect) {
			die (trigger_error("Não foi possível estabelecer a conexão"));
			return false;
		} else {	
			return $connect;
		}
	}
?>
