<?php
session_start();

date_default_timezone_set("Europe/Paris");
setlocale(LC_TIME,"fr_FR.utf8","fra");

header_remove("X-Powered-By");//Cache la version de PHP
ini_set("session.cookie_httponly", true);
// ini_set("session.cookie_secure", true);
require_once('route.php');
	// Initialiser la session
	
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["username"]) && $_SERVER['REQUEST_URI'] !== "/registration/public/login"){
	header("Location: /registration/public/login");
	exit(); 
}
