<?php
        $table = "BILDER";

        //Database Connection
		include ("dbzugriff.php");
		
        try {
			//select the image
		$stmt = $db->prepare('SELECT imgpath FROM BILDER WHERE id = :id');
        $stmt->bindParam(':id', $id);

        //$id  = $_GET["id"];
        $id = 1;
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->fetch();
        $path = $result[0];
        echo $path;
    /*if(file_exists($path)){
        header("content-type:image/jpeg");
        resource imagecreatefromjpeg ( string $path );
    }else{
    	echo "File does not exists!";
    }
        /*echo "<img src=$path>";
        header("Content-type: image/jpeg");*/
		}catch(PDOException $e) {
   			echo "Error: " . $e->getMessage();
		}
?>