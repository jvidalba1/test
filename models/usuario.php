<?php
class Usuario extends AppModel
{
	var $name = 'Usuario';
	var $useTable = 'usuario';

	function loadMe($nombre)
	{
		$conditions = array('nombre'=>$nombre);
		$usuario = $this -> find('first',array('conditions'=>$conditions));
		return $usuario;
	}
	/*
	function loadTodo()
	{
		$usuario = $this -> find('all');
		return $usuario;
	}
	*/
}
?>
