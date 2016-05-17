<?php
        $table = "BILDER";

        //Database Connection
		include ("dbzugriff.php");
		
        try {
            $tableBT = "BILDERTAGS";
            $stmt = $db->prepare("SELECT id_bilder FROM $tableBT WHERE id_tag =:tagCheck");
    
                $stmt->bindParam(':tagCheck', $tagCheck);
    
                // insert a row
            
                $tagCheck = $tagname;
                $stmt->execute();
                $result = $stmt->fetch();
			//select the image
		$stmt = $db->prepare('SELECT imgpath FROM BILDER WHERE id = :id');
        $stmt->bindParam(':id', $id);

        //$id  = $_GET["id"];
        $id = $result[$no];
        $stmt->execute();
        // set the resulting array to associative
        $results = $stmt->fetch();
        $path = $results[0];
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