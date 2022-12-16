<?php

$user = 'root';
$pass = '';
$dbname = 'mysql:host=localhost;dbname=blog';

	/* try
	{ */
		$db = new PDO( $dbname , $user , $pass);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "you are connected";
	/* }
	// gestion des erreurs
	catch (PDOException $e)
	{
		die("Connection Failed !:". $e->getMessage() );
	} */