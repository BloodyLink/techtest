<?php

// El portal web AleEagle desea probar si su idea de búsqueda de artículos 
// tendrá potencial o no. Para esto se le ha encargado el realizar un prototipo 
// funcional que debe implementar las siguientes funcionalidades:

// • Login para usuarios registrados con opción de registro. 
// • Interfaz principal de consulta de artículos con paginación. 
// • Búsqueda mediante AJAX por al menos 2 parámetros de los artículos. 
// • Opción de agregar artículos. 
// • Opción de ver el detalle de un artículo desde la lista de resultados. 
// • Opción de editar un artículo. 
// • Opción de borrar un artículo. 
// • Debe implementar funcionalidad responsive con bootstrap 3. 
// • Restringir la cantidad de búsquedas a realizar a 5, luego de eso debe informar que se 
// • ha llegado a un límite y no permitir más. 

// Los errores deben ser manejados de manera tal que se muestre por pantalla que ocurrió 
// alguno, sin embargo, la app NO debe fallar ni por excepciones, errores de sintaxis o 
// similares. No se considerará necesaria la inclusión de nonces o medidas anti CSRF. 
// No es necesario el contar con una interfaz pulida en términos de estilos. No es 
// necesario un apego estricto al patrón MVC. La documentación de las funciones es 
// opcional, pero si usa cualquier biblioteca que requiera configuración especial, 
// se debe especificar en un archivo README.txt. Puede utilizar cualquier herramienta 
// que estime conveniente mientras incorpore PHP y MySQL/MariaDB. No se evaluará la 
// estructura de archivos ni directorios. 


// require_once('conexion/conexion.php');
?>
<!doctype html>
    <head>
        <title>AleEagle</title>
        <?php include('header/header.php');?>
    </head>
    <body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="index.php">AleEagle</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="productos.php">Productos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
    
    </body>
</html>
