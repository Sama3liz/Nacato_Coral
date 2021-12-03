<?php
$servername = "localhost";
$username = "prueba";
$password = "c8u$7ShG";
$dbname = "db_mantenimiento";
 $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = "SELECT * FROM en_mc";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);

    $data = $con->query($query);
    $data->setFetchMode(PDO::FETCH_ASSOC);

    foreach($data as $row){
        echo'<tr>
          <td>'.$row["id"].' </td>
          <td>'.$row["fecha"].' </td>
          <td>'.$row["kilometraje"].' </td>
          <td>'.$row["tipo_mantenimineto"].' </td>
          <td>'.$row["taller"].' </td>
          <td>'.$row["costo_mantenimiento"].' </td>
          <td>'.$row["costo_repuestos"].' </td>
          <td>'.$row["observaciones"].' </td>
        </tr>
        ';
    } 
 ?>