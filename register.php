<?php
$table = "USER";

//Database Connection
include ("dbzugriff.php");
    try {
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
    	$exstmt = $stmt->execute();
    
    	if($exstmt == false) {
        	echo '<div class="container">
            	<div class="row text-left">
            	The e-mail address is already in use<br>
            	</div>
            	</div>';
            	header("Username is already in use</br>");
    	header('Location: index.php?Message=2');
    	exit;
            $error = true;
        } else {
    	echo "New records created successfully";
    	header('Location: index.php?Message=3');
    	exit;
    }
	}
	catch (PDOException $e) {
    	echo "Error: " . $e->getMessage();
	}
$db = null;
?>