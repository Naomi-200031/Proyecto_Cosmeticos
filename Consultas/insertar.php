<?php 
include "../conn/conn.php";

$name = $_POST['nombre'];
$price = $_POST['precio'];
//IMPRIMIMOS EL VALOR DE LAS VARIABLES
$sql = "INSERT INTO cosme (Nombre, Precio)  VALUES ('$name', $price)";
echo $price;
echo $sql;
if( mysqli_query($mysqli, $sql)) {
    echo "Insertado Correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
 mysqli_close($mysqli);

 header("Location: ../index.php");

?>