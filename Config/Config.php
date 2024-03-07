<?php 
	ini_set('display_errors',1);
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	const BASE_URL = "http://localhost/webManagment";
	//const BASE_URL = "https://abelosh.com/tiendavirtual";

	//Zona horaria
	date_default_timezone_set('America/Caracas'); 

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "test";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";
	
	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const NOMBRE_EMPESA = "webManagment";
	const WEB_EMPRESA = "www.abelosh.com";
	const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";

 ?>
