<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simulación de Asientos de Cine</title>
	<!-- Agrega el enlace al archivo CSS de Bootstrap -->
	<link rel="stylesheet" href="../bootstrap-5.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
	<section class="container">
		<header>
			<h1 class="mt-2">Simulación de Asientos de Cine</h1>
		</header>

		<?php
		require_once('./funciones.php'); 
		// Crear una matriz de 12 filas x 14 columnas
		$cantidadFilas = 12;
		$cantidadColumnas = 14;

		[
			$matrizAsientos,
			$cantidadVacios
		] = crearAsientos($cantidadFilas, $cantidadColumnas);
		
		// Llenar la matriz con valores aleatorios 0 (vacío) y 1 (ocupado)
		

		// Contar cuántos lugares están vacíos


		// Mostrar el total de lugares vacíos
		echo '<p>Total de lugares vacíos:' . $cantidadVacios . '</p>';

		echo '<p class="p-1 bg-dark text-white w-50">PANTALLA</p>';

		// Mostrar la matriz en forma de tabla con colores
		echo '<table class="table table-bordered">';

		for ($i = 0; $i < $cantidadFilas; $i ++) {
			echo '<tr>';
			for ($j = 0; $j < $cantidadColumnas; $j ++) {
				if ($matrizAsientos[$i][$j]) {
					echo "<td class='table-primary'>";
					echo "<img src='../img/azul.png' />";
					echo '</td>';
				} else {
					echo "<td class='table-danger'>";
					echo "<img src='../img/rojo.png' />";
					echo '</td>';
				}
			}
			echo '</tr>';
		}

		echo '</table>';
		?>

	</section>
</body>

</html>