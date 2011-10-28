<?php
class MapController extends AppController
{
	var $name = 'Map';
	var $uses = array('Usuario');
	
	function index()
	{
		$ciudades = array('Medellin','Bogota','Cali');
		$this -> set('ciudades',$ciudades);
		print_r("oelo");
	}
	function modelo()
	{
		$this->autoRender = false;
		$lista = $this -> Usuario->find('all');
		print_r($lista);
	}
	function load($nombre=null)
	{
		$this->autoRender = false;
		$usuario = $this->Usuario->loadMe($nombre);
		print_r($usuario);
		$u2 = $this->Usuario->read(null,1);
		print_r($u2);
	}
	function all()
	{
		$this -> autoRender = false;
		$usuario = $this->Usuario->find('all');
		print_r($usuario);
		
	}
	/*
	function consulta()
	{
		$this -> autoRender = false;
		$sql = "select u.nombre u.apellido from usuario as u";
		$result = $this->Usuario->query($sql);
		print_r($result);;
	}*/
	function guardar()
	{
		$this -> autoRender = false;
		$usuario = array('nombre'=>'Gloria','apellido'=>'Suarez','email'=>'gsuarez@gmail.com');
		$this->Usuario->save($usuario);
		echo "id:". $this->Usuario->id;
	}
	function eliminar()
	{
		$this -> autoRender = false;
		$usuarioDeleted = $this -> Usuario->deleteAll(array('Usuario.id >'=>4),false);
		print_r($usuarioDeleted);
	}
	
}
?>
