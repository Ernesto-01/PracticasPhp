<?php
class Empleado{

	private $cargo;
	private $carnet;
	private $nombre;
	private $salario;

	public function Empleado(){
		$this->cargo=null;
		$this->carnet=null;
		$this->nombre=null;
		$this->salario=null;

	}
	public function setCargo($v){
		$this->cargo=$v;
	}
	public function setCarnet($v){
		$this->carnet=$v;
	}
	public function setNombre($v){
		$this->nombre=$v;
	}
	public function setSalario($v){
		$this->salario=$v;
	}

	public function getCrgo(){
		return $this->cargo;
	}
	public function getCarnet(){
		return $this->carnet;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getSalario(){
		return $this->salario;
	}
}

?>