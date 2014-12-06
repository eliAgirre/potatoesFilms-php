<?php

	class Controller {
		
		// Definimos la función movieApi sin ningún parámetro
		public function moviesApi(){

			// Guardamos en una variable el objeto de tipo RottenTomtatos pasando nuestra API key
			$rottenTomatoes = new RottenTomatoes('25uu9nryfxqb5b65umh6mkkr', 10, 'us');

			// Guarda en una variable el resultado obtenido de la función getOpeningMovies
			$result = $rottenTomatoes->getOpeningMovies();

			// Incluimos el fichero movieAPI.php para mostrar el resultado
			include 'view/moviesAPI.php';

		}

	} // Cierre de la clase Controller

?>