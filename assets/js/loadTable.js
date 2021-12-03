function loadXMLDoc() {
    var xhttp = new XMLHttpRequest()
        method = "GET",
        url = "tabla.php";
    xhttp.open(method, url, true);
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("body").innerHTML =
            this.responseText;
        }
    };
    xhttp.send();
}

window.onload = loadXMLDoc;