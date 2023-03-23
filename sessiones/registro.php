<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
      
        <form method="post">
          <h1 class="titulo">Registrar</h1>
          <ul class="flex-outer">
            <li>
              <label for="first-name" name="name" class="let">Nombre Completo</label>
              <input type="text" id="first-name" name="name">
            </li>
          
            <li>
              <label for="email" name="email">Email</label>
              <input type="email" id="email" name="email">
            </li>
            <li>
              <label for="nombre" pattern="[a-zA-Z0-9]+"  name="users" class="let" required>Nombre De Usuario</label>
              <input type="text" id="password" name="users">
            </li>
            <li>
              <label for="contrasena" name="password">Contraseña</label>
              <input type="password" name="contrasena" required />
            </li>
           
              
            <li>
              ¿Ya tines cuenta? <a href="Login.php">Entra Aqui!</a>

              <input type="submit" name="register" >
              
            </li>
          </ul>
        </form>
      </div>
      
      <?php 
        include("registrar.php");
  ?>
     
        <!-- more list items here -->
     <script>
       jQuery('.soloNumeros').keypress(function (tecla) {
  if (tecla.charCode < 48 || tecla.charCode > 57) return false;
});
     </script>

      <style>
          body {
  font: normal 18px/1.5 "Fira Sans", "Helvetica Neue", sans-serif;
  background-color:hwb(320 49% 39%);
  color: #010101;
  padding: 50px 0;
  align-items: center;
  justify-content: center;
  widith: 70%;

}


.container {
  width: 70%;
  heith:50%;
  max-width: 750px;
  margin: 0 auto;
  background-color:hwb(296 65% 30%);
 
    
}

.container * {
  box-sizing: border-box;
 
   
}

.flex-outer,
.flex-inner {
  list-style-type: none;
  padding: 0;
}

.flex-outer {
  max-width: 800px;
  margin: 0 auto;
    
}

.flex-outer li,
.flex-inner {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  

}

.flex-inner {
  padding: 0 8px;
  justify-content: space-between;  
}

.flex-outer > li:not(:last-child) {
  margin-bottom: 20px;
}

.flex-outer li label,
.flex-outer li p {
  padding: 8px;
  font-weight: 300;
  width: 80%;
  max-width: 1200px;
  text-transform: uppercase;
  
}



.flex-outer > li > label + *,
.flex-inner {
  flex: 1 0 220px;
}

.flex-outer li p {
  margin: 0;
}

.flex-outer li input:not([type='checkbox']),
.flex-outer li textarea {
  padding: 15px;
  border: none;
}

.flex-outer li button {
  margin-left: auto;
  padding: 8px 16px;
  border: none;
  background: #333;
  color: #f2f2f2;
  text-transform: uppercase;
  letter-spacing: .09em;
  border-radius: 2px;
}

.flex-inner li {
  width: 100px;
}
.titulo{
 
  
  display: flex;
  align-items: center;
  justify-content: center;
  border: dotted;
  text-align: center;
  
  
}

input[type='submit']{
	background-color: #48e;
	color: #fff;
	width: calc(80% - 20px);
	margin: 0 10%;
	margin-top: 22px;
	border: none;
}
.ok {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #1e6;
	color: #fff
}
.bad {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #a22;
	color: #fff
}
.let{
  text-transform: lowercase;
  text-transform: uppercase;
}
      </style>
    
</body>
</html>