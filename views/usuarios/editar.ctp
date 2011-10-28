

<h1>Edit Post</h1>
<?php   
echo $this->Form->create('Usuario', array('action' => 'editar'));   
echo $this->Form->input('nombre');
echo $this->Form->input('apellido');
echo $this->Form->input('email');
echo $this->Form->input('nick');
echo $this->Form->input('pass');  
echo $form->input('id', array('type'=>'text'));    
echo $this->Form->end('Aceptar'); 

?>
