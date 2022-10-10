$(document).ready(function () {
    $("#dataCliente").DataTable();
    $(document).on("click", "#agregarCliente", function () {
        $("#frmInsercionCliente").modal("show");
    });
    $(document).on("click", ".editarCliente", function () {
        let idCliente = $(this).attr("id");
        $.ajax({
            url: "cliente/obtener_info",
            type: "POST",
            data: { id: idCliente, },
        })
            .done(function (data) {
                let newData = JSON.parse(data)[0];
                $("#idCliente").val(newData.id)
                $("#nombresE").val(newData.nombres)
                $("#apellidosE").val(newData.apellidos)
                $("#direccionE").val(newData.direccion)
                $("#telefonoE").val(newData.telefono)
                $("#emailE").val(newData.email)
            })
            .fail(function (e) {
                console.log("Error en el ajax: ", e);
            });

        $("#frmEdicionCliente").modal("show");
    })
})