<?php
// require_once('conexion/.php');
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
          <li class="active"><a href="productos.php">Productos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid productos">
    <div class="row">
        <div class="col-sm-3 col-sm-offset-3 ingreso">

        <form class="form-group" id="formBusquedaProd">
                <h3>Busqueda</h3>
                Nombre: 
                <input type="text" class="form-control" name="nombre" placeholder="Escribe el nombre del producto" />
                Descripcion: 
                <input type="text" class="form-control" name="descripcion" placeholder="Escribe la descripcion del producto" />
                Marca:
                <select class="form-control slMarcas" name="marca">
                    <option value="">Seleccione marca de producto</option>
                </select>
                Tipo:
                <select class="form-control slTipos" name="tipo">
                    <option value="">Seleccione tipo de producto</option>
                </select>
                Resultados por pagina:
                <input class="form-control" type="number" name="resXPag" id="resXPag"/>
                <input hidden=hidden name="offset" id="offset" value="0"/>
                <input hidden="hidden" value="buscar" name="action"/>
                <br>
                <input type="button" class="btn btn-default" id="btnBusquedaProd" value="Buscar"/>
            </form>
            
        </div>

        <div class="col-sm-3 busqueda">
        <a id="modalAddProducto" href="#animatedModal">Agregar producto</a><br>
        <span id="msjeAjax"></span>
        <span class="list-group" id="responseAjax"></span>
        </div>
    </div>

    

  </div>
    
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 list-group" id="listaProductos">
        </div>
    </div>
    </div>

  <div id="animatedModal">
            
            <div  id="btn-close-modal" class="close-animatedModal"> 
                Cerrar formulario
            </div>
                
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-md-6 ingresoProducto">
                            <h1>Ingreso de producto</h1>
                            <form class="form-group" id="formIngresoProd">
                                Nombre: 
                                <input type="text" class="form-control" name="nombre" placeholder="Ingresa nombre del producto" />
                                Marca: 
                                <select class="form-control slMarcas" name="marca">
                                    <option value="">Selecciona marca:</option>
                                </select>
                                Descripcion: 
                                <input type="text" class="form-control" name="descripcion" placeholder="Ingresa descripcion del producto"/>
                                Tipo: 
                                <select class="form-control slTipos" name="tipo">
                                    <option value="">Selecciona tipo:</option>
                                </select>
                                <input hidden="hidden" name="action" value="guardar"/>
                                <br>
                                <input type="button" class="btn btn-default" id="btnIngresoProd" value="Ingresar"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
    <script>
        $("#modalAddProducto").animatedModal({
            color: '#CCCCCC'
        });
    </script>
</html>