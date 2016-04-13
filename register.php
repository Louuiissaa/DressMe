<?php
require_once('./zugriff.php');
$table = "USER";

$db = new PDO('mysql:host=localhost;dbname=DressMe;charset=utf8mb4', 'benutzer', '12345');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Error Handling

        $sql = "CREATE table IF NOT EXISTS $table(
     			Firstname VARCHAR( 50 ) NOT NULL, 
     			Lastname VARCHAR( 250 ) NOT NULL,
     			Username VARCHAR( 150 ) NOT NULL, 
     			Password VARCHAR( 150 ) NOT NULL,
     			PRIMARY KEY(Username));";
        $db->exec($sql);
        print("Created $table Table.\n");
        
    	$stmt = $db->prepare("INSERT INTO USER (Firstname, Lastname, Username, Password) 
    			VALUES (:firstname, :lastname, :username, :password)");
    
       	$stmt->bindParam(':firstname', $firstname);
    	$stmt->bindParam(':lastname', $lastname);
    	$stmt->bindParam(':username', $username);
    	$stmt->bindParam(':password', $gesaltetes_passwort);
    
    	// insert a row
    	$firstname = $_POST["firstname"];
    	$lastname  = $_POST["lastname"];
    	$username  = $_POST["username"];
    	$password  = $_POST["password"];
    	$salt_str = 'DressMeGeheim2306';
 		$gesaltetes_passwort = md5($salt_str . $password);
    	$stmt->execute();
    
    	echo "New records created successfully";
    	echo '<meta http-equiv="refresh" content="0; URL=index.php">';	
	}
	catch (PDOException $e) {
    	echo "Error: " . $e->getMessage();
	}
$db = null;
?>