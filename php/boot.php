
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="German Krebs" >
    <meta name="description" content="Esta pagina muestra el catalogo de vinos">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Catalogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <script src="https://kit.fontawesome.com/9a71537e5e.js" crossorigin="anonymous"></script>
    <?php include('popover.php');
          include('abrirVentana.php');
    ?> 
  
    <link rel="stylesheet" href="../css/boot.css">
    <link rel="stylesheet" href="../css/wp.css">

  </head>

  <body onload="cargarPagina();">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=3812237103&text=Hola%20acabo%20de%20ver%20el%20catalogo%20de%20vinos%20y%20estoy%20interesado%20en%20comprar" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
  <?php
    include('encabezado.php');  
    include('conexion.php');
    mysqli_set_charset($conectar,'utf8mb4');
    $consulta = 'SELECT * FROM vinos';
    $ejecutar =  mysqli_query($conectar,$consulta) or die(mysqli_error($conectar));


?>

<main>
 
  <div class="album py-5 bg-light">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php
    foreach($ejecutar as $ejecutar){
     /*<a name = "<?php $id + 3;?>">*/?>
      <div class="col">
          <div class="card shadow-sm">
            <img
                  src="../img/<?php echo $ejecutar['imagen'];?>"
                  class="card-img-top" 
            > 
            <button tabindex="0"
            type="button" 
            class="btn btn-lg btn-danger" 
            role="button" 
            data-toggle="popover" 
            title="<?php echo 'Bodega: '.$ejecutar['bodega']?>" 
            data-content="<?php echo $ejecutar['varietal']?>">
              Detalles
            </button>

           <div class="card-body">
              <h5 class="card-title"><?php echo $ejecutar['nombre'];?></h5>
              <p class="card-text"><?php //echo '$'.$ejecutar['precio'];?></p>
              <div class="d-flex justify-content-between align-items-center">
              
   
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

       </div>
    </div>    
 </div>

</main>

<?php include('pie.php'); ?>
    <script>
      $(function () {
        $('[data-toggle="popover"]').popover()
      })
    
    </script>
  </body>
</html>
