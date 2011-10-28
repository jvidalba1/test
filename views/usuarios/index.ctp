

<table>
<?php
echo"<tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Nick</th><th>Password</th><th>Created</th><th>Modified</th></tr>";
	foreach($usuarios as $usuario) {
		echo "<tr><td>{$usuario['Usuario']['id']}</td>
			  <td>{$usuario['Usuario']['nombre']}</td>
			  <td>{$usuario['Usuario']['apellido']}</td>
			  <td>{$usuario['Usuario']['email']}</td>
			  <td>{$usuario['Usuario']['nick']}</td>
			  <td>{$usuario['Usuario']['pass']}</td>
            		  <td>{$usuario['Usuario']['created']}</td>
			  <td>{$usuario['Usuario']['modified']}</td>
		 <td>".$this->Html->link('Editar', array('action'=>'editar', 'id'=>$usuario['Usuario']['id']))."</td></tr>";
	
	}

?>
</table>
<?php
	echo $this->Html->link("adicionar","/usuarios/adicionar");
?>
