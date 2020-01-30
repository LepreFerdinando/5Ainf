<?php //ACCESSO AL DATABASE
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', '5ainf1920');

	$con = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

	if($con->connect_errno) {
		$codice=$con->connecr_errno;
		$errore=$con->connect_error;
		die("Errore di connessione: $codice - $errore");
	}
	$con->set_charset("utf-8"); //Imposto il set id caratteri

?>