<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['users']) >= 1 && strlen($_POST['contrasena']) >= 1 ) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$users = trim($_POST['users']);
		$contrasena = trim($_POST['contrasena']);
	    
	    $consulta = "INSERT INTO usuarios(nombre, email, usuario, contraseña) VALUES ('$name','$email','$users','$contrasena')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
			
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
