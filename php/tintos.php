<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9a71537e5e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/tintos.css">
    <title>tinto</title>
</head>

<body>

    <?php
        include('encabezado.php'); 
    ?>
    <br><br><br>
    <div class="catalogo"> 
        <h2>Catalogo de vinos disponibles</h2> 
    </div>
    
    <section>
        <div class="contenedor">
            <ul>
                <li>Familia Bianchi Corte Unico</li><br>
                <li>Familia Bianchi Malbec</li><br>
                <li>Familia Bianchi Red Blend</li><br>
                <li>Lalande Malbec</li><br>
                <li>Rock negro</li><br>
                <li>Valentin Lacrado</li><br>
                <li>Cameleon MB</li><br>
                <li>Otro Loco Mas</li><br>
                <li>Chocovino</li><br>
                <li>Cabernet Sauvignon</li><br>
                <li>Marginal Jorge Rubio</li><br>
                <li>Santa Julia Reserva</li><br>
                <li>Doña Paula Estate</li><br>
                <li>Putruele</li><br>
                <li>Trapiche Gran Medalla</li>

            </ul>
        </div>
    </section><br>

    <div class="contenedor">
            <form action="boot.php">
                <div id="precio">
                    <button>
                        Ver Catalogo
                    </button>
                </div>
            </form>
        </div> <br>
    
    <?php include('pie.tinBlanEsp.php'); ?>

</body>
</html>