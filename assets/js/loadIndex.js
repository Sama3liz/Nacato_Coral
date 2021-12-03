function loadXMLDoc() {
    var xhttp = new XMLHttpRequest(),
        method = "GET",
        url = "connect.php";
    xhttp.open(method, url, true);
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("Tabla creada exitosamente o ya existe en la base de datos.");
        }
    };
    xhttp.send();
}

