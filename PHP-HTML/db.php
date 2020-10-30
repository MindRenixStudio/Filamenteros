<?php

	define("dbserver", "innodb.endora.cz"); //localhost pro xampp
	define("dbuser", "filamenteros");
	define("dbpass", "Lkq!972");
	define("dbname", "mindre1565467652");




	$db = new PDO(

			"mysql:host=" .dbserver. ";dbname=" .dbname,dbuser,dbpass,

		array(

				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",

				PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8"

			)

				);

?>