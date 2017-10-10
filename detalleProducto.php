<?php
    require_once('dao\ProductosDao.php');
    $productosDao = new ProductosDao();

    if(isset($_GET['id'])){
        $producto = $productosDao->getProductoById($_GET['id']);
        if(!$producto){
            header("location: error.php?m=PRODUCTO_NO_EXISTE");
        }
    }else{
        header("location: error.php");
    }

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

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-group ">
            <h1>Detalle producto</h1>
            <form class="form-group detalleProducto" id="editProductoForm">
                Nombre: 
                <input type="text" class="form-control" name="nombre" value="<?php echo $producto->nombre; ?>" />
                Descripcion:
                <input type="text" class="form-control" name="descripcion" value="<?php echo $producto->descripcion;?>" />
                Marca: <?php echo $producto->marcaNombre;?><br>
                Tipo: <?php echo $producto->tipoNombre;?><br>
                <input hidden="hidden" name="id" value="<?php echo $_GET['id'];?>">
                <input hidden="hidden" name="action" value="editar"><br>
                <input type="button" class="btn btn-default" id="btnEditProd" value="Guardar Cambios"/>
            </form>
            
            <form class="form-group detalleProducto" id="deleteProductoForm">
                <input hidden="hidden" name="id" value="<?php echo $_GET['id'];?>">
                <input hidden="hidden" name="action" value="eliminar">
                <input type="button" class="btn btn-danger" id="btnDeleteProd" value="Eliminar producto"/>
            </form>
            <span id="msjeAjax"></span>
            <span id="responseAjax"></span>
            </div>
        </div>
        
    </div>


    </body>
</html>