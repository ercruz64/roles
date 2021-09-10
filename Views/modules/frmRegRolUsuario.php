<?php 

$rolUsuarioControlador = new RolUsuarioControlador();
$datosUsuario = $rolUsuarioControlador->usuarioControlador->consultarUsuarioControlador();
$datosRol = $rolUsuarioControlador->rolControlador->consultarRolControlador();
$datosRolExist = $rolUsuarioControlador->consultarRolUsuarioRegistradoControlador();
$rolUsuarioControlador->registrarRolUsuarioControlador();

?>

<div class="row">
	<div class="col-3"></div>
	<div class="col-6 mt-5 mb-5">
		<form class="form" method="post">

			<label for="" class="form-label">Nombres del Perfil</label>
			<select name="idUsuario" id="" class="form-select" required="" onchange="this.form.submit()">
				<option value="">Seleccione un Usuario</option>
				<?php 
					foreach ($datosUsuario as $keyUsuario => $valueUsuario) {
						if (isset($_POST['idUsuario']) && $valueUsuario['idUsuario'] == $_POST['idUsuario']) {
							print '<option value="'.$valueUsuario['idUsuario'].'" selected>'.$valueUsuario['usuarioLogin'].'</option>';
						}
						else{
							print '<option value="'.$valueUsuario['idUsuario'].'">'.$valueUsuario['usuarioLogin'].'</option>';
						}
						
					}
				?>
			</select>

			<div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
				
				<?php 
				foreach ($datosRol as $keyRol => $valueRol) {
					print '<input name="idRoles[]" value="'.$valueRol['idRol'].'" type="checkbox" class="btn-check" id="btncheck'.$valueRol['idRol'].'" autocomplete="off">';
					print '<label class="btn btn-outline-primary" for="btncheck'.$valueRol['idRol'].'">'.$valueRol['rolNombre'].'</label>';
				}

				?>
				
			</div>

			<div class="btn-group">
				<button type="submit" name="regRolUsuario" class="btn btn-primary mt-5">Registrar</button>
			</div>
			
			
		</form>
		<?php 
		if (isset($_GET['action'])) {
			if($_GET['action'] == 'ok100'){
				print "Perfiles de Usuario Registrados Correctamente";
			}
			elseif($_GET['action'] == 'fa100'){
				print "Ocurrio un Error. Intentelo Nuevamente";
			}
		}

		?>
		<a href="frmConRol">Consultar Perfiles</a>
	</div>
	<div class="col-3"></div>
</div>
