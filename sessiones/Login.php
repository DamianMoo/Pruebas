
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Login.php</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body class="body">
<?php

?>
<section class="flex-container">
<h2>Creando la sesion</h2>
<form action="validar.php" method="post" class="form">
<p>Usuario:</p>
<p><input class=".flex-item5" type="text" placeholder="Ingrese su Nombre" name="usuario" required/></p>
<p>contraseña</p>
<p><input class=".flex-item5" type="text" placeholder="Ingrese su Nombre" name="contraseña" required/></p>
No estas registrado? <a href="registro.php">Registrate Aqui!</a>
<p><input class="button" type="submit" value="ingresar" /></a></p>
</form>
<?php

?>
</section>
</div>
<style>
.flex-container {
  
  width: 30%;
  height: 50vh;
  background-color:white;
  justify-content: center;
  align-items: center;
  display: flex; 
  flex-direction: column; 
  margin:10px
}
.body{
  justify-content: center;
  align-items: center;
  background-color: #EEE;
  
  justify-content: center;
  align-items: center;
  display: flex; 
  flex-direction: column; 
  
}
p { width: 100px;  solid; margin: 20px; }
.button {
    float: left;
    border: 2px solid orange;
    background:orange;
}


</style>
</body>
</html>