<?php
/*
	<h2>¡Ala Cuchara!</h2>

	<form action="usuarios/index" method="post">
 	<P>
    	<LABEL for="nombre">Nombre: </LABEL>
              <INPUT name=type="text" id="nombre"><BR>
    	<LABEL for="apellido">Apellido: </LABEL>
              <INPUT type="text" id="apellido"><BR>
    	<LABEL for="email">email: </LABEL>
              <INPUT type="text" id="email"><BR>
    	<INPUT type="radio" name="sexo" value="Hombre"> Hombre<BR>
    	<INPUT type="radio" name="sexo" value="Mujer"> Mujer<BR>
    	<INPUT type="submit" value="Enviar"> <INPUT type="reset">
    	</P>
</form>
*/
echo $this->Form->create('Usuario', array('action' => 'adicionar'));

echo $this->Form->input('nombre');
echo $this->Form->input('apellido');
echo $this->Form->input('email');
echo $this->Form->input('nick');
echo $this->Form->input('pass');
echo $this->Form->end('Enviar');
//echo $this->Form->button('Submit Form', array('type'=>'submit','escape'=>true));

?>
