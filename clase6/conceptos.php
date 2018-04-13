<?php

	class Vehiculo{

		//atributos
		private $año;
		private $marca;
		private $modelo;
		private $precio;

		//la funcion principal es incializar los atributos de la case
		// resulacionador de ambitos ::
		public function __construct(){
			$this->año=0;
			$this->marca=null;
			$this->modelo=null;
			$this->precio=0.0;

		} 
		/*
		public function Vehiculo(){
			$this->año=0;
			$this->marca=null;
			$this->modelo=null;
			$this->precio=0.0;
		} 

		*/

		public function setAño($val){
			$this->año=$val;
		}

		public function setMarca($val){
			$this->marca=$val;
		}

		public function setModelo($val){
			$this->modelo=$val;
		}

		public function setPrecio($val){
			$this->precio=$val;
		}

		public function getAño(){

			return $this->año;

		}
		public function getInfo(){
			$info = "Marca: ". $this->marca . "<br>".
					"modelo: ". $this->modelo. "<br>".
					"Año: ". $this->año . "<br>".
					"Precio: $" . $this->precio. "<br>";

			return $info;

		}

		public function __destruct(){
			$this->año=0;
			$this->marca=null;
			$this->modelo=null;
			$this->precio=0.0;

		} 

	}
/*
	$micarro =new Vehiculo();
	$micarro->setAño(2012);
	$micarro->setMarca("Toyota");
	$micarro->setPrecio("15000");
	$micarro->setModelo("Hilux");
	//echo $micarro->getAño()."<br>";

	echo $micarro->getInfo();
	$micarro->__destruct();
*/
?>