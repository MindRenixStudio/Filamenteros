<?php

	include "db.php";
	global $db;

	$LogNick = $LogPass = $valid = "";

	$LogNick = $_POST["LogNick"];
	$LogPass = $_POST["LogPass"];
	//sha1($LogPass);

	$sql = "SELECT * FROM Filamenteros_UserData WHERE Nickname = :nick AND Password = :pass ";
	$query = $db->prepare($sql);
	$query->execute(array('nick' => $LogNick, 'pass' => $LogPass))	

	$count = $query->rowCount();

	if ($count > 0) {
		$valid = "lolo logged in";
	}

?>