$(document).ready(function(){
    getDatosCombobox("Marcas");
    getDatosCombobox("Tipos");

    $("#modalAddProducto").animatedModal({
        color: '#CCCCCC'
    });

    $("#btnBusquedaProd").on('click', function(){
        getProductos($( "#formBusquedaProd" ).serialize(), 0);
    }) ;

    $("#btnIngresoProd").on('click', function(){
        console.log($( "#formIngresoProd" ).serialize());
        guardarProducto($( "#formIngresoProd" ).serialize());
        
    });

    $('#btnEditProd').on('click', function(){
        console.log($( "#editProductoForm" ).serialize());
        editarProducto($( "#editProductoForm" ).serialize());
    });

    $('#btnRegistro').on('click', function(){
        registrarUsuario($( "#formRegistro" ).serialize());
    });

    $('#btnLogin').on('click', function(){
        console.log($( "#formLogin" ).serialize());
        getUsuario($( "#formLogin" ).serialize());
    });

    $('#btnDeleteProd').on('click', function(){
        if(confirm("Estas seguro de querer eliminar este producto?")){
            console.log($( "#deleteProductoForm" ).serialize());
            eliminarProducto($( "#deleteProductoForm" ).serialize());
        }
    });

    $('#pagina').on('change', function(){
        console.log($( "#formBusquedaProd" ).serialize() + $('#pagina').val());
        getProductos($( "#formBusquedaProd" ).serialize(), $('#pagina').val());
    });

});

function getDatosCombobox (str) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            $('.sl' + str).append(this.responseText);
        }
    };
    xhttp.open("GET", "productosAction.php?action=" + str, true);
    xhttp.send();
}

function guardarProducto (str) {
    
    $('#msjeAjax').html("<img src='img/loading.gif' width='50px' height='50px'/>");
    
    $('.close-animatedModal').click();
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            $('#msjeAjax').html("<h3>Operacion completada.</h3>");
            $('#responseAjax').html(this.responseText);
        }
    };
    xhttp.open("GET", "productosAction.php?" + str, true);
    xhttp.send();
}

function editarProducto (str) {
    
    $('#msjeAjax').html("<img src='img/loading.gif' width='50px' height='50px'/>");

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            $('#msjeAjax').html("<h3>Operacion completada.</h3>");
            $('#responseAjax').html(this.responseText);
        }
    };
    xhttp.open("GET", "productosAction.php?" + str, true);
    xhttp.send();
}

function eliminarProducto (str) {
    
    $('#msjeAjax').html("<img src='img/loading.gif' width='50px' height='50px'/>");

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            $('.detalleProducto').empty();
            $('#msjeAjax').html("<h3>Operacion completada.</h3>");
            $('#responseAjax').html(this.responseText);
        }
    };
    xhttp.open("GET", "productosAction.php?" + str, true);
    xhttp.send();
}

function getProductos (str, pagina) {
    $('#listaProductos').empty();
    $('#msjeAjax').html("<img src='img/loading.gif' width='50px' height='50px'/>");
    $('#listaProductos').html("<img src='img/loading.gif' width='50px' height='50px'/>");
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            
            $('#msjeAjax').html("<h3>Operacion completada.</h3>");
            $('#listaProductos').html(this.responseText);
            
        }
    };
    xhttp.open("GET", "productosAction.php?" + str + "&pagina=" + pagina, true);
    xhttp.send();
}

function registrarUsuario (str) {

    $('#msjeAjax').html("<img src='img/loading.gif' width='50px' height='50px'/>");
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            
            $('#msjeAjax').html("<h3>Operacion completada.</h3>");
            $('#responseAjax').html(this.responseText);
            
        }
    };
    xhttp.open("GET", "usuariosAction.php?" + str, true);
    xhttp.send();
}

function getUsuario (str) {

    $('#msjeAjax').html("<img src='img/loading.gif' width='50px' height='50px'/>");
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            
            $('#msjeAjax').html("<h3>Operacion completada.</h3>");
            $('#responseAjax').html(this.responseText);
            
        }
    };
    xhttp.open("GET", "usuariosAction.php?" + str, true);
    xhttp.send();
}