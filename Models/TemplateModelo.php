<?php 


class TemplateModelo {
	
	public function validarEnlacesModelo($archivo) {
		$enlace = "Views/modules/".$archivo.".php";
		if (!file_exists($enlace)) {
			$enlace = "Views/modules/inicio.php";
		}

		///////// VALIDACION DE PERSONAS //////
		if ($archivo == 'ok1' || $archivo == 'fa1') {
			$enlace = "Views/modules/frmRegPersona.php";
		}
		elseif ($archivo == 'ok2' || $archivo == 'fa2') {
			$enlace = "Views/modules/frmEditPersona.php";
		}
		elseif ($archivo == 'ok3' || $archivo == 'fa3') {
			$enlace = "Views/modules/frmConPersona.php";
		}
		///VALIDACION DE USUARIOS///
		elseif ($archivo == 'ok4' || $archivo == 'fa4') {
			$enlace = "Views/modules/frmEditUsuario.php";
		}
		elseif ($archivo == 'ok5' || $archivo == 'fa5') {
			$enlace = "Views/modules/frmRegUsuario.php";
		}
		elseif ($archivo == 'ok6' || $archivo == 'fa6') {
			$enlace = "Views/modules/frmConUsuarios.php";
		}
		///VALIDACION DE ROLES///
		elseif ($archivo == 'ok7' || $archivo == 'fa7') {
			$enlace = "Views/modules/frmRegRol.php";
		}
		elseif ($archivo == 'ok8' || $archivo == 'fa8') {
			$enlace = "Views/modules/frmEditRol.php";
		}
		elseif ($archivo == 'ok9' || $archivo == 'fa9)') {
			$enlace = "Views/modules/frmConRol.php";
		}


		////VALIDACION ROL USUARIO //////
		elseif ($archivo == 'ok100' || $archivo == 'fa100)') {
			$enlace = "Views/modules/frmRegRolUsuario.php";
		}



		return $enlace;

	}
}