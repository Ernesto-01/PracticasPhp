<?php
include "Interfaz.php";
include "../credenciales.php";
include "../modelo/Empleado.php";

	Class DAOEmpleado implements metodos
	{
		private $con;


		public function DAOEmpleado()
		{
			$this->con=new mysqli(SERVIDOR,USUARIO,CONTRASEÑA,DB);
			
			if ($this->con->connect_errno){
				echo "Error al conectar a la base de datos:".
				$this->con->error;
				exit;
			}
		}
		public function insertar($obj)
		{

		}

		public function modificar($obj)
		{

		}

		public function eliminar($obj)
		{

		}

		public function seleccionar(){
			$dataTable=null;
			$sql="select * from empleados";
			$res= $this->con->query($sql);
			$dataTable .="<table border=1px> 
						<tr>
							<th>Carnet</th>
							<th>Nombre</th>
							<th>Cargo</th>
							<th>Salario</th>
						</tr>
						";
			while ($fila=$res->fetch_assoc()) {
				$dataTable .="
							<tr>
									<td>" . $fila['carnet'] . "</td>
									<td>" . $fila['nombre'] . "</td>
									<td>" . $fila['cargo'] . "</td>
									<td>" . $fila['salario'] . "</td>
							</tr>
							";
			}
			$dataTable .="</table>";
			return $dataTable;
		}

	}
	$obj =new DAOEmpleado();
	echo $obj->seleccionar();
?>