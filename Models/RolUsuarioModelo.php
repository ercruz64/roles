<?php 


class RolUsuarioModelo extends Conexion {
	
	function __construct() {
		$this->conn = new Conexion();
		$this->tabla = "usuariosroles";
	}


	public function registrarRolUsuarioModelo($idRoles, $idUsuario){
		var_dump($idRoles);
		$sql = "INSERT INTO $this->tabla (idUsuario, idRol) VALUES ";
		$valores = '';
		for ($i=0; $i < count($idRoles); $i++) { 
			$valores .= "(?,?),";
		}
		$valores = substr($valores, 0, -1);
		$sql .= $valores;

		try {
			$stmt = $this->conn->conectar()->prepare($sql);
			$posicionParam = 1;
			for ($i=0; $i < count($idRoles); $i++) { 
				$stmt->bindParam($posicionParam, $idUsuario, PDO::PARAM_INT);
				$posicionParam++;
				$stmt->bindParam($posicionParam, $idRoles[$i], PDO::PARAM_INT);
				$posicionParam++;
			}
			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
			$stmt->close();
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}


	public function consultarRolUsuarioRegistradoModelo($idUsuario){
		$sql = "SELECT * FROM $this->tabla WHERE idUsuario = ?";
		try {
			$stmt = $this->conn->conectar()->prepare($sql);

			$stmt->bindParam(1, $idUsuario, PDO::PARAM_INT);
			$stmt->bindParam(2, $idRol, PDO::PARAM_INT);
			
			if ($stmt->execute()) {
				return $stmt->fetch();
			}
			else{
				return [];
			}
			$stmt->close();
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}
}