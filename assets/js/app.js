$("#btnAddModal").on("click",function(){

    $("#instalacionModal").modal();

});

$("#btnAddModal").on("click",function(){

    $("#modalAgregar").modal();

});

$("#btnEnvio").on("click",function(){

    $("#modalAgregar").modal("hide");

});

$('#modalAgregar').on('hidden.bs.modal', function(event) {
    $(':input', this).val('');
});


$('.dateSelector').datepicker({

    format: "dd/mm/yyyy"

});

function desplegar(x) {
    if (x == 0) document.getElementById('opcionesPreventivo').style.display = "block";
    else document.getElementById('opcionesPreventivo').style.display = "none";
    return;
}

function sendJSON(){

    let result = document.querySelector('.result');

    var tipMant = document.querySelector('input[type="radio"]:checked').value;

    if(tipMant == "correctivo"){
        tipMant = tipMant.split(" ");
        var registro = JSON.stringify({
            "fecha": $('#fecha').val(),
            "kilometraje": $('#kilometraje').val(),
            "tipoMantenimiento":tipMant,
            "taller": $('#nombretaller').val(),
            "costoM": $('#costoMantenimiento').val(),
            "costoR": $('#costoRepuestos').val(),
            "observaciones": $('#observaciones').val(),
        });
    }else{
        var registro = JSON.stringify({
            "fecha": $('#fecha').val(),
            "kilometraje": $('#kilometraje').val(),
            "tipoMantenimiento":$('#tipos:checked').map(function() {
                                    return tipMant + ":" + $(this).val();
                                }).get(),
            "taller": $('#nombretaller').val(),
            "costoM": $('#costoMantenimiento').val(),
            "costoR": $('#costoRepuestos').val(),
            "observaciones": $('#observaciones').val(),
        });
    }
        
    let xhr = new XMLHttpRequest(),
        method = "POST"
        url = "senddata.php";

    xhr.open(method, url, true);

    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.send(registro);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {

            console.log(this.responseText);

        }
    };
    
}
