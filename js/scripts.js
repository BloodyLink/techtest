$(document).ready(function(){
    getDatosCombobox("Marcas");
    getDatosCombobox("Tipos");

    
    

    $("#modalAddProducto").animatedModal({
        color: '#CCCCCC'
    });

    $("#btnBusquedaProd").on('click', function(){
        getProductos($( "#formBusquedaProd" ).serialize());
    }) ;

    $("#btnIngresoProd").on('click', function(){
        console.log($( "#formIngresoProd" ).serialize());
        guardarProducto($( "#formIngresoProd" ).serialize());
        
    }) ;
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

function getProductos (str) {
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
    xhttp.open("GET", "productosAction.php?" + str, true);
    xhttp.send();
}