<?php
$servername = "localhost";
$username = "prueba";
$password = "c8u$7ShG";
$dbname = "db_mantenimiento";

  try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // Create table sentence
      $sql = "CREATE TABLE en_mc (
        id int(11) NULL AUTO_INCREMENT,
        fecha varchar(10) NOT NULL,
        kilometraje double(6,2) NOT NULL,
        tipo_mantenimineto varchar(50) NOT NULL,
        taller varchar(50) NOT NULL,
        costo_mantenimiento double(6,2) NOT NULL,
        costo_repuestos double(6,2) NOT NULL,
        observaciones varchar(50) NOT NULL,
        PRIMARY KEY (id)
      )";
    // Execute sentence  
    $conn->exec($sql);
    echo '<script language="javascript">alert("Creacion correcta.");</script>';
  } catch(PDOException $e) {
    echo '<script language="javascript">alert("No hay conexion con la vase de datos o ya se encuentra creada una tabla con el mismo nombre.");</script>';
  }
  
  $conn = null;

?>