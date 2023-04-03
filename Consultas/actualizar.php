<?php 
include "../conn/conn.php";

$id = $_POST['IdCos'];
$name = $_POST['nombre'];
$price = $_POST['precio'];
//IMPRIMIMOS EL VALOR DE LAS VARIABLES
$sql = "UPDATE cosme SET Nombre = '$name' , Precio = $price WHERE IdCosmeticos = $id";
if( mysqli_query($mysqli, $sql)) {
    echo "Actualizado Correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
 mysqli_close($mysqli);

 header("Location: ../index.php");

?>