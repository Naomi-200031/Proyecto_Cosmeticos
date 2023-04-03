<?php
include "./conn/conn.php";
$id = $_GET['IdCosmeticos'];
$sele = "SELECT * FROM Cosme WHERE IdCosmeticos='$id'";
$result = $mysqli->query($sele);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Carrito de Compras</title>   
    <link rel="stylesheet" href="Cejas.css">
</head>
<body>
    <h1 class="card-title" aling="middle">TIENDA DE COSMETICOS</h1>
    <div class="container">
        <div class="row">
            <!--- Sección principal donde se mostrarán los productos que vendemos --->
           <main id="item" class="col-sm-8 row"></main>
            <aside class="col-sm-4" aling="middle">
                <div class="compra" > 
                    <!--- Donde esta el formulario para actualizar o editar --->
                <form method="POST" action="./consultas/actualizar.php">
                        <input type="hidden" name="IdCos" value="<?=$id ?>">
                        <input type="text" name="nombre" value="<?php echo $row['Nombre'];?>" placeholder="Nombre">
                        <input type="number" name="precio" value="<?php echo $row['Precio'];?>" placeholder="Precio">
                        <input type="submit" value="enviar" >
                    </form>
                <h2 aling="middle">Carrito de compras</h2>
                <ul id="carrito" class="list-group">
                </ul>
                <p></p>
                <p>Total : $<span id="total"></span> 
                <button id="botonVaciar" class="btn btn-danger">Vaciar</button>
                <a href="Index.php">REGRESAR</a>
            </aside>
        </div>
    </div>
    <script src="Cejas.js"></script>
</body>
</html>
