<?php
require_once('./zugriff.php');
$table = "USER";

$db = new PDO('mysql:host=localhost;dbname=DressMe;charset=utf8mb4', 'benutzer', '12345');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$result = $db->query("SELECT 1 FROM $table LIMIT 1");

if ($result == null) {
    try {
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Error Handling
        $sql = "CREATE table $table(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     Firstname VARCHAR( 50 ) NOT NULL, 
     Lastname VARCHAR( 250 ) NOT NULL,
     Username VARCHAR( 150 ) NOT NULL, 
     Password VARCHAR( 150 ) NOT NULL);";
        $db->exec($sql);
        print("Created $table Table.\n");
        
    }
    catch (PDOException $e) {
        echo 'PDOException';
        echo $e->getMessage(); //Remove or change message in production code
    }
}

try {
    $stmt = $db->prepare("INSERT INTO USER (Firstname, Lastname, Username, Password) 
    VALUES (:firstname, :lastname, :username, :password)");
    
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    
    // insert a row
    $firstname = $_POST["firstname"];
    $lastname  = $_POST["lastname"];
    $username  = $_POST["username"];
    $password  = $_POST["password"];
    $stmt->execute();
    
    echo "New records created successfully";
}
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$db = null;
?>