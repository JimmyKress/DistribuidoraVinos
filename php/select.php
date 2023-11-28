<link rel="stylesheet" href="../css/precios.css">
<body>

<?php

    include('conexion.php');
    
    $consulta = 'SELECT * FROM vinos';
    $ejecutar =  mysqli_query($conectar,$consulta) or die(mysqli_error($conectar));
    $numFilas = mysqli_num_rows($ejecutar);

    if($numFilas > 0){
    while($fila = mysqli_fetch_array($ejecutar)){

        $nombre = $fila['nombre'];
        $bodega = $fila['bodega'];
        $varietal = $fila['varietal'];
        $imagen = $fila['imagen'];
        $precio = $fila['precio'];?>
        <section  class="todo">
            <div class="imagen"> 
        <?php echo '<img src="../img/'.$fila['imagen'].'"><br>'; ?>
            </div> 
            <div class="caracteristicas"> 
        <?php echo'<ul>';
                echo '<li>Nombre: '.$nombre.'</li><hr><br><br>';
                echo '<li>Bodega: '.$bodega.'</li><hr><br><br>';
                echo '<li clas="var">Varietal: '.$varietal.'</li><hr><br><br>';
                echo '<li>$'.$precio.'</li><br>';
                echo'<li> <a href="https://wa.me/543815293658" target="_blank" class="class-contacto" link="white">    
                Comprar 
               </a></li>';
               echo'<div class="linea"></div>';

                echo'</ul>';
                
    }
}
        ?>
            </div>
        </section> 
        
</body>  