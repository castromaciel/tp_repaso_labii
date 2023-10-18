<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estrenos</title>
  <!-- Agrega el enlace al archivo CSS de Bootstrap -->
  <link rel="stylesheet" href="../bootstrap-5.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
  <section class="container">
    <header>
      <h1 class="mt-2">Estrenos</h1>
    </header>

    <article class="card col-6">
      <table class="table">
        <thead>
          <th>Pelicula</th>
          <th>Visualizaciones</th>
        </thead>
        <tbody>
          <?php
            $totalVisualizaciones = 0;
            $maxVisualizaciones = -1;
            $nombre_pelicula = '';

            $peliculas = array(
              'La Monja II' => 0,
              'Flash' => 0,
              'Aquaman 2' => 0,
              'Megan' => 0,
              'Iron man' => 0,
            );

            foreach ($peliculas as $pelicula => $visualizaciones) {
              $peliculas[$pelicula] = mt_rand(0, 99);
            }
            
            foreach ($peliculas as $pelicula => $visualizaciones) {
              echo "<tr></tr>";
              echo "<td>$pelicula</td>";
              echo "<td>$visualizaciones</td>";
              echo "<tr></tr>";
              if ($visualizaciones > $maxVisualizaciones) {
                  $maxVisualizaciones = $visualizaciones;
                  $nombre_pelicula = $pelicula;
              }
              $totalVisualizaciones += $visualizaciones;
            }
          ?>
        </tbody>
      </table>
      <section class='p-2'>
        <?php
          echo "<p>Record semanal: Película $nombre_pelicula se visualizó $maxVisualizaciones veces </p>";
          echo "<p>Total de visualizaciones en la semana: $totalVisualizaciones</p>";
        ?>
      </section>
    </article>

  </section>
</body>

</html>