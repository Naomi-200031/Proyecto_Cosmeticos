<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Carrito de Compras</title>   
    <link rel="stylesheet" href="Mascarillas.css"> 
</head>
<body>
    <h1 class="card-title" aling="middle">TIENDA DE COSMETICOS</h1>
    <div class="container">
        <div class="row">
            <!--- Sección principal donde se mostrarán los productos que vendemos --->
           <main id="item" class="col-sm-8 row"></main>
            <aside class="col-sm-4" aling="middle">
                <div class="compra" >
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
    <script src="Mascarillas.js"></script>
</body>
</html>
