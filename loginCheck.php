<?php session_start();
	if(!isset($_SESSION['username'])) {
    	header('Location: index.php?Message=1');
		exit;
	}
 
	//Abfrage der Nutzer ID vom Login
	$userid = $_SESSION['username'];
?>