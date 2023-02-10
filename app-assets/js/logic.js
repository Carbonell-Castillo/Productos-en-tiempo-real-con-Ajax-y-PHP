//Carga el boton para eliminar
reload();

//Tarea los datos medainte ajax
$(document).ready(function() {
    $('#btnAlmacenar').click(function() {
        var datos = $('#frmAddProduct').serialize();

        $.ajax({
            type: "POST",
            url: "app/AddProduct.php",
            data: datos,
            success: function(r) {
                if (r == 1) {
                    //Genera una alerta de bien
                    generateAlert("Datos ingresados correctamente", "success");
                    //Manda a limpiar los inputs
                    clearInputs();

                    ////Recarga el boton para eliminar
                    reload();
                } else {
                    //Genrea una alerta de error
                    generateAlert("Error al ingresar los datos, verifique si los datos estan correctos", "danger");
                }
            }
        });
        return false;
    });



});

//Recarga el boton para eliminar
function reload() {

    $(document).ready(function() {
        $('.eliminar').click(function() {
            var id = $(this).attr("id");
            var dataString = 'id=' + id;
            $.ajax({
                type: "POST",
                url: "app/deleteProducts.php",
                data: dataString,
                success: function(data) {
                    if (data == 1) {
                        alert("Eliminado correctamente");
                        $('#product' + id).hide();
                    } else {
                        alert("Error en Eliminar");
                    }

                }
            });

        });
    });
}

//Genera una alerta como tal
function generateAlert(message, type) {
    var alert = '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' + message + '                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    $('.result').html(alert);
}

//Limpia todos los input
function clearInputs() {
    $('input[type="text"]').val('');
    $('input[type="number"]').val('');
}

//Funcion para mostrar los datos
function showData() {
    var listado = $.ajax({
        url: 'app/seeProducts.php',
        dataType: 'text',
        async: false
    }).responseText;
    document.getElementById("content-products").innerHTML = listado;
    reload();
}
//Se ejecuta showData para mostrar los datos
setInterval(showData, 1000);