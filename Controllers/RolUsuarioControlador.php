<?php 


class RolUsuarioControlador {
	
	function __construct() {
		$this->rolUsuarioModelo = new RolUsuarioModelo();
		$this->rolControlador = new RolControlador();
		$this->usuarioControlador = new UsuarioControlador();
	}

	public function registrarRolUsuarioControlador() {
		if (isset($_POST['regRolUsuario'])) {
			if ($_POST['idRoles']) {
				$respuesta = $this->rolUsuarioModelo->registrarRolUsuarioModelo($_POST['idRoles'],$_POST['idUsuario']);
				if ($respuesta) {
					header('location:index.php?action=ok100');
				}
				else{
					header('location:index.php?action=fa100');
				}
			}
		}
	}


	public function consultarRolUsuarioRegistradoControlador(){
		if (isset($_POST['idUsuario'])) {
			$respuesta = $this->rolUsuarioModelo->consultarRolUsuarioRegistradoModelo($_POST['idUsuario']);
		}
	}
}