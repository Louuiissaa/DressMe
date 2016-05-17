<?php
   if (array_key_exists('img',$_FILES)) {
   
       $path = 'src/wardrobe/images/';
   
       echo basename($_FILES['img']['name']);
       //$uploaddir = 'src/wardrobe/images/';
       $uploadfile = $path . basename($_FILES['img']['name']);
   
       echo "<p>";
   
       if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
           echo "File is valid, and was successfully uploaded.\n";
       } else {
           echo "Upload failed";
       }
   
   echo "</p>";
   
   include ("createDatabaseTables.php");
   try{
   
       //INSERT image into BILDER Table
       $stmt = $db->prepare("INSERT INTO $tableBilder (imgpath, imgtype, imglabel, category) 
           VALUES (:path, :type, :label, :category)");
   
       $stmt->bindParam(':path', $path);
       $stmt->bindParam(':type', $type);
       $stmt->bindParam(':label', $label);
       $stmt->bindParam(':category', $category);
   
       $tmpname = $_FILES['img']['tmp_name'];
       $type = $_FILES['img']['type'];
       $path = $uploadfile;
       $label = $_POST["clotheslabel"];
       if(isset($_POST["optcategory"])){
           $category = $_POST["optcategory"];
       } else {
           echo "<script type='text/javascript'>alert('Bitte wähle eine Kategorie aus!');</script>";
       }
       
       
       $stmt->execute();
       $lastidImg = $db->lastInsertId();
       echo $lastidImg;
   
       //INSERT Tags
       $tags = $_POST["clothestags"];
       $tagname = explode(",", $tags);
   
       for($i = 0; $i < count($tagname); ++$i){
   
       $stmt = $db->prepare("SELECT id FROM $tableTags WHERE tagname =:tagCheck");
   
           $stmt->bindParam(':tagCheck', $tagCheck);
   
           // insert a row
       
           $tagCheck = $tagname[$i];
           $stmt->execute();
           $result = $stmt->fetch();
   
       if($result == null){
           $stmt = $db->prepare("INSERT INTO $tableTags (tagname) 
               VALUES (:tagname)");
   
           $stmt->bindParam(':tagname', $tag);
   
           // insert a row
       
           $tag = $tagname[$i];
           $stmt->execute();
   
           $lastidTag = $db->lastInsertId();
       } else {
           $lastidTag = $result[0];
       }
   
       //INSERT TAGS TO BILDER
       $stmt = $db->prepare("INSERT INTO $tableBT (id_tag, id_bilder) 
           VALUES (:id_tag, :id_bilder)");
   
       $stmt->bindParam(':id_tag', $lastidTag);
       $stmt->bindParam(':id_bilder', $lastidImg);
   
       $stmt->execute();
   
   
   }
   
   
   
       echo "New records created successfully";
       header('Location: hinzufuegen.php');
   }
   catch (PDOException $e) {
       echo "Error: " . $e->getMessage();
       if ($e->errorInfo[1] == 1062) {
           header('Location: start.php');
       }
   
   }
   $db = null;
   }
   ?>