<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9a71537e5e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/tintos.css">
    <title>Espumante</title>
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
                <li>Domaine Bousquet</li><br>
                <li>Maria Codorniu</li><br>
                <li>Brut Nature</li><br>
                <li>Alta Vista</li><br>
                <li>Bousquet Drut</li><br>
                <li>Privado Metodo</li><br>
                <li>Espumante Brut Nature</li><br>
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