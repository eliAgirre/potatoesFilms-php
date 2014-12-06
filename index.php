<?php 
	
	include_once("controller/Controller.php");

	// Importamos una API externa de películas
	include_once('library/RottenTomatoes.php');

	// Creamos un objeto de tipo Controller
	$controller = new Controller();

	// Llamamos a la función moviesApi, que está en el fichero Controller.php
	$controller->moviesApi();

?>