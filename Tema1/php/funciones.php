<?php
	function prcSugerirPelicula($cantidad, $peliculas)
	{
		$listaPeliculasSugeridas = [];

		while ($cantidad > 0) {
			$peliculaSugerida = array_rand($peliculas, 1);

			$listaPeliculasSugeridas[$peliculaSugerida] = $peliculas[$peliculaSugerida];
			unset($peliculas[$peliculaSugerida]);
			$cantidad -= 1;
		}

		return $listaPeliculasSugeridas;
	}

	/**
	 * Crea una lista que contiene:
	 * En el indice 0, los asientos creados. En el indice 1, los asientos creados vacíos.
	 * 
	 * @return array [$asientosCreados, cantidadVacios]
	 */
	function crearAsientos($cantidadFilas, $cantidadColumnas) {
		$asientosCreados = [];
		$cantidadVacios = 0;

		for ($i = 0; $i < $cantidadFilas; $i ++) {
			for ($j = 0; $j < $cantidadColumnas; $j ++) {
				$asientosCreados[$i][$j] = mt_rand(0, 1);

				if (!$asientosCreados[$i][$j]) {
					$cantidadVacios ++;
				}
			}
		}

		return [
			$asientosCreados,
			$cantidadVacios,
		];
	}
?>