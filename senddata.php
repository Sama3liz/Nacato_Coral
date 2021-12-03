<?php
    
  $data = json_decode(file_get_contents("php://input"));
  
  $servername = "localhost";
  $username = "prueba";
  $password = "c8u$7ShG";
  $dbname = "db_mantenimiento";

  try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $separado = implode(",", $data->tipoMantenimiento);
  
  $sql = "INSERT INTO en_mc(
            id, 
            fecha, 
            kilometraje, 
            tipo_mantenimineto, 
            taller, 
            costo_mantenimiento, 
            costo_repuestos, 
            observaciones) 
          VALUES (NULL,
            '$data->fecha',
            '$data->kilometraje',
            '$separado',
            '$data->taller',
            '$data->costoM',
            '$data->costoR',
            '$data->observaciones')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "console.log('New record created successfully')"; 
  }catch(PDOException $e) {
    echo $sql . '<br>' . $e->getMessage();
  }

  $conn = null;
  
?>