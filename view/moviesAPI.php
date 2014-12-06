<html>

	<head>
		<meta charset="utf8" />
		<title> PotatoesFilms  </title>
	</head>

	<body>

		<?php
			
			echo "<pre>";
			try {

				// Muestra por pantalla las películas en un objeto JSON
				print_r($result);

				
			}catch (Exception $e) {

				// Muestra por pantalla el error
				print_r($e);

			} // Cierre de la excepción 

			echo "</pre>";

		?>

	</body>
	
</html>