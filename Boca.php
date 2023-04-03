<?php
    include "./conn/conn.php";
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Carrito de Compras</title>    
    <link rel="stylesheet" href="Boca.css">
</head>
<body>
    <h1 class="titulo" aling="middle">TIENDA DE COSMETICOS</h1>
    <a href="Index.php">Regresar</a>
    <div class="container">
        <div class="row">
            <!--- Sección principal donde se mostrarán los productos que vendemos --->
           <main id="item" class="col-sm-8 row"></main>
            <aside class="col-sm-4" aling="middle">
                <div class="compra">
                    <!-- Mostrar datos -->
                    <table border="1" width="100%">
                    <!-- Se creo una tabla para borrar y editar. -->
                        <tr>
                            <th>Id </th>
                            <th>Nombre </th>
                            <th>Precio </th>
                            <th>Editar </th>
                            <th>Delete </th>
                        </tr>
                        <?php
                        //saco la info de la bd
                       $sql = "SELECT * FROM Cosme";
                    if($result = $mysqli -> query($sql)) {
                       while ($row = $result-> fetch_assoc()){
                       ?>                       
                       <tr> 
                        <!--- Cuerpo de la tabla--->
                            <td> <?php echo $row["IdCosmeticos"] ?> </td>
                            <td> <?php echo $row["Nombre"] ?> </td>
                            <td> <?php echo $row["Precio"] ?> </td>
                                 <!--- Metodo Editar --->
                            <td>
                            <a href="cejas.php?IdCosmeticos=<?php echo $row["IdCosmeticos"] ?>">Edit  </a>  </td>
                                <!--- Metodo Eliminar --->
                            <td>
                          <a href="./Consultas/delete.php?IdCosmeticos=<?php echo $row["IdCosmeticos"] ?>">Delete  </a>  </td>
                       </tr>
                       <?php 
                       }
                    } ?>
                    </table>
                <h2 aling="middle">Carrito de compras</h2>
                <ul id="carrito" class="list-group">
                </ul>
                <p></p>
                <p>Total : $<span id="total"></span> 
                <button id="botonVaciar" class="btn btn-danger">Vaciar</button>
              <!--- regresar --->
            </aside>
        </div>
        </div>
    </div>
    <script src="Boca.js"></script>


</body>
</html>