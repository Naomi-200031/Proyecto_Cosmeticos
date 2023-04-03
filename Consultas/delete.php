<?php 
include "../conn/conn.php";
$id = $_GET['IdCosmeticos'];
//En el metodo DELETE solo coloque el id porque es lo unico que se necesita para borrarlo.
$sql = "DELETE FROM cosme WHERE IdCosmeticos = $id";
if( mysqli_query($mysqli, $sql)) {
    echo " Correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
 mysqli_close($mysqli);

 header("Location: ../index.php");
?>