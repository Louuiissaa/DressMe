<!--DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title> Uebung - Login</title>
</head>

<body>
<form method="POST" action="<?=$_SERVER['PHP_SELF']?>"> 
<b>Login</b><br> 
<br> 
Username: <input name="loginname"><br> 
Passwort: <input name="loginpasswort" type=password><br> 
<br> 
<input type=submit name=submit value="Einloggen" onclick="FensterOeffnen"> 
</form> 

</body>	
</html-->	


<?php
    /*session_start(); 

    $_logindaten = file("phpGrundlagen.txt", FILE_SKIP_EMPTY_LINES);

    $_SESSION["login"] = 0;
    if (isset($_POST["loginname"]) && isset($_POST["loginpasswort"])) 
        { 
            foreach ($_logindaten as $user){
             $_userdata =  explode("@@@",$user);
            if ($_userdata[0] == $_POST["loginname"] && 
            $_userdata[1] == $_POST["loginpasswort"]) 
            { 
            # Userdaten korrekt - User ist eingeloggt 
            # Login merken ! 
            $_SESSION["login"] = 1;
			$_SESSION["name"] = $_userdata[3];
			$_SESSION["vorname"] = $_userdata[2];
			$_SESSION["mail"] = $_userdata[4];
            //echo $_thisuser[0];
            echo '<script type="text/javascript"> alert("Richtige Login Daten!");</script>';
            echo '<meta http-equiv="refresh" content="0; URL=dressme.html">';			
        } else {

            //echo '<script type="text/javascript"> alert("Falsche Login Daten2!");</script>';
		    echo "Falsche Login Daten";
		}
    }
	}*/

    
    # User ist eingeloggt 

try {
    session_start();
    $_SESSION["login"] = 0;
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $table = "USER";
        $db = new PDO('mysql:host=localhost;dbname=DressMe;charset=utf8mb4', 'benutzer', '12345');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $db->prepare('SELECT Password FROM USER WHERE Username =:username');
        $stmt->bindParam(':username', $username);

        $username  = $_POST["username"];
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->fetch();

        $password  = $_POST["password"];
        $salt_str = 'DressMeGeheim2306';
        $gesaltetes_passwort = md5($salt_str . $password);
        if($result[0] == $gesaltetes_passwort){
            echo '<meta http-equiv="refresh" content="0; URL=start.php">'; 
        } else {
            echo '<meta http-equiv="refresh" content="0; URL=index.php">';
            echo '<script type="text/javascript"> alert("FDein Username oder Password ist falsch!");</script>'; 
        }
    /*foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }*/
    }else{
        echo '<meta http-equiv="refresh" content="0; URL=index.php">'; 
        echo '<script type="text/javascript"> alert("Bitte gib deinen Username und Password ein!");</script>';
    }
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$db = null;
echo "</table>";
?>