<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="German Krebs">
    <meta name="description" content="Pagina de presentacion">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/wp.css">
    <script src="https://kit.fontawesome.com/9a71537e5e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>RK Almacén de Bebidas!</title>
</head>
<body>
    <?php include('php/popover.php');
          include('html/tintos.html');
          include('html/blancos.html');
          include('html/espumantes.html');
  
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=3812237103&text=Hola%20acabo%20de%20ver%20el%20catalogo%20de%20vinos%20y%20estoy%20interesado%20en%20comprar" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    <header>
        <div class="contenedor">
            <p class="logo">RK Almacén de Bebidas!</p>
            <nav>
                <a data-toggle="tooltip" title="Tinto/ Blanco/ Espumante" href="#tipos" data-bs-placement="bottom">
                    <i class="fa-solid fa-wine-glass-empty"></i>
                    Nuestros Vinos
                </a>
                <a href="#contacto"></i>
                    <i class="fa-solid fa-phone-flip"></i>
                        Contacto
                </a>
                <a href="#precio">
                    <i class="fa-solid fa-sack-dollar"></i>
                    Catalogo
                </a>
                <a href="">
                <i class="bi bi-bookmark-plus"></i>             
                Blog
                </a>
            </nav>
        </div> 
    </header>  

        <br>   
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
        </style>
        <h1 class="pregunta">RK Almacén de Bebidas!</h1>
        <br> <br>
    <section class="hola">
        <div class="contenedor">
            <p>"El buen vino es como una buena película: 
                <br>dura un instante y deja en la boca un sabor a gloria"</p>
            <p>Federico Fellini.</p>
            
        </div>  
    </section>

    

    <br>

    <section class="link">

        <div class="contenedor">
            <form action="php/boot.php">
                <div id="precio">
                    <button>
                        Catalogo
                    </button>
                </div>
            </form>
        </div>
    </section>

    <br><br>

    <section id="tipos">
      <div class="contenedor"> 
        <h2>Vinos disponibles </h2><br>
        <div class="categoria"> 
         <div class="stock">
            <h3>Tinto</h3>
            <form action="php/tintos.php">
                <button>
                Ver
                </button> 
            </form>    
         </div>
         <div class="stock">   
            <h3>Blanco</h3> 
            <form action="php/blancos.php">  
                <button>
                    Ver
                </button>
            </form>      
         </div>
         <div class="stock">            
            <h3>Espumante</h3>
            <form action="php/espumantes.php">  
                <button>
                    Ver
                </button>
            </form>    
         </div>
        </div>
    </section>
    <section id="contacto">
        <div class="contenedor">
            <h3>Cualquier duda o consulta, no dude en comunicarse a 
                través de nuestro whatsapp, no recibimos llamadas</h3><br>
        
            <h3><hr><br>También puede hacerlo por nuestro correo: <br>vinosdelsur837@gmail.com</h3>
            
        </div>
     </div>    
    </section>

    <br>

    <footer>
        <div class="contenedor">
            <p>&copy; VinosDelSur 2022</p>
        </div>
    </footer>
    <script src="tooltip.js" type="text/javascript"></script>

</body>
</html>