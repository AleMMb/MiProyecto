
$(".error-message").hide(); //esconde el mensaje de error

//validaciones productos.html
$("#nuevo_producto").on("submit", function (event) {
    event.preventDefault(); //previene reload

    let nuevo_producto = $("#Nombre_producto").val()
    let nuevo_precio = $("#Precio_producto").val()
    let nueva_descripcion = $("#Descripcion_producto").val()
    let nueva_imagen = $("#Img_producto").val()

    if (nuevo_producto.trim().length == 0) { //comprueba que el imput no este vacio.
        $("#error_nombre").show();//muestra el mensaje de error
        alert("Por favor ingrese el nombre del producto");

    } else if(nuevo_precio.trim().length == 0){
        $("#error_precio").show(); 
        alert("Por favor ingrese el precio del producto")

    } else if(nueva_descripcion.trim().length == 0){
        $("#error_descripcion").show();
        alert("Por favor ingrese una descripcion del producto");

    } else if(nueva_imagen.trim().length == 0){
        $("#error_imagen").show();
        alert("Por favor seleccione una imagen del producto");
    }
});



//Validaciones categorias.html
$("#nueva_categoria").on("submit", function (event) {
    event.preventDefault();
    let nuevo_categoria = $("#Nombre_categoria").val()
    let nuevo_codigo = $("#id_categoria").val()

    if (nuevo_categoria.trim().length == 0 ){
        $("#error_categoria").show();
        alert("Por favor ingrese el nombre de la categoria");

    } else if (nuevo_codigo.trim().length == 0){
        $("#error_id_categoria").show();
        alert("Por favor ingrese el codigo de la categoria");
    }
});