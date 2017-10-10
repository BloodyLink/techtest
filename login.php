<?php
    session_start();
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
          <li><a href="index.php">Home</a></li>
          <?php if($_SESSION){ ?><li><a href="productos.php">Productos</a></li><?php } ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php
                if(!$_SESSION){
            ?>

            <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

            <?php
                }else{
     
            ?>
            <li><a href="cerrarSesion.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>
            <?php
                }
            ?>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1>Login</h1>
                <form class="form-group" id="formLogin">
                Email:
                <input type="text" class="form-control" name="email" placeholder="Ingresa Email"/>
                Password:
                <input type="password" class="form-control" name="password" placeholder="Ingresa password"/>
                <input hidden="hidden" name="action" value="ingresar" />
                <br>
                <input type="button" class="btn btn-default" id="btnLogin" value="Ingresar Usuario"/>
                </form>
                <span id="msjeAjax"></span>
                <span id="responseAjax"></span>
            </div>
        </div>
    </div>

</body>
</html>