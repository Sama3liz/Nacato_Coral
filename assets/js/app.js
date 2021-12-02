$("#btnAddModal").on("click",function(){

    $("#instalacionModal").modal();

});

$('.dateSelector').datepicker({

    format: "dd/mm/yyyy"

});

function desplegar(x) {
    if (x == 0) document.getElementById('opcionesPreventivo').style.display = "block";
    else document.getElementById('opcionesPreventivo').style.display = "none";
    return;
}