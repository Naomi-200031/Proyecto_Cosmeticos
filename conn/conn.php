<?php 
    //Son las variables para concectarse a la BD
    $host = 'localhost';
    $dbname = 'Cosmeticos';
    $username = 'root';
    $password = '';

    //Aqui se esta provando la conexion de la BD mandando dos mensajes cuando se encuentra un error y el otro cuando la conexion es exitosa.
    $mysqli = mysqli_connect($host, $username, $password, $dbname);
   
    if(!$mysqli){
        die("Conexion fallada: " . mysqli_connect_error());
    }

?>