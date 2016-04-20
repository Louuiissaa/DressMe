<?php

//Database Connection
include ("dbzugriff.php");
try {
    session_start();
    $_SESSION["login"] = 0;
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $table = "USER";
        
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
            $_SESSION['username'] = $username;
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