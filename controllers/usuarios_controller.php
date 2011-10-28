<?php
class UsuariosController extends AppController
{
	var $name = 'Usuarios';
	//var $uses = array('Usuario');
	
	function index()
	{
		$usuarios = $this->Usuario->find('all');
		$this->set('usuarios',$usuarios);
	}
	function adicionar()
	{
		if (!empty($this->data)) 
		{
			//$this->log($this->data); Para mirar lo q me esta mandando
        	if($this->Usuario->save($this->data))
			{
				$this->redirect(array('action' => 'index'));
			}
    		} else {
        		
    		}
		
	}	

	function editar($id = null)	
	{   
		$this->Usuario->id = $id; 

    	if (empty($this->data)) { 
     		$this->data = $this->Usuario->read(); 
    	}
     	else {  
     		if ($this->Usuario->save($this->data)) {
  
        		$this->Session->setFlash('Your post has been updated.');
        		$this->redirect(array('action' => 'index')); 
      	 	}   
     	}  
	}
}
?>
