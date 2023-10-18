<?php
	include 'info.php';
  include 'funciones.php';
  $ruta = '../';
  include 'header.php';

  if (!empty($_GET['cantidad']) && !empty($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $cantidad = $_GET['cantidad'];
    // Muestra el mensaje de bienvenida
    echo '<h2>Bienvenid@ ' . $nombre . ', tenemos estas sugerencias para ti:</h2>';
    
    echo '<article class="d-flex flex-wrap justify-content-center">';
    
    // Invoca la función prcSugerirPelicula 
    $listaPeliculasSugeridas = prcSugerirPelicula($cantidad, $peliculas);

    foreach ($listaPeliculasSugeridas as $pelicula => $imagen) {
      echo "<figure class='col-md-6'>";
      echo "<img src='../img/$imagen' alt='$pelicula' class='img-fluid'/>";
      echo "<figcaption>". $pelicula ."</figcaption> </figure>";
    }
  
    include '../php/footer.php';
  } else {
    echo '<h2> Faltan datos </h2>';
  }
?>
