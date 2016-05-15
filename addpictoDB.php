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
        $tableBilder = "BILDER";
        $tableTags = "TAGS";
        $tableBT = "BILDERTAGS";

        //Database Connection
        include ("dbzugriff.php");

        try {
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Error Handling

            //Create BILDER TABLE
            $sql = "CREATE table IF NOT EXISTS $tableBilder(
                    id INT( 11 ) AUTO_INCREMENT UNIQUE,
                    imgpath VARCHAR (100) ,
                    imgtype VARCHAR( 20 ) ,
                    PRIMARY KEY ( id ));";
            $db->exec($sql);
            print("Created $tableBilder Table.\n");

            //Create TAGS Table
            $sql = "CREATE table IF NOT EXISTS $tableTags(
                    id INT( 11 ) AUTO_INCREMENT UNIQUE ,
                    tagname VARCHAR (50) UNIQUE ,
                    PRIMARY KEY ( id ));";
            $db->exec($sql);
            print("Created $tableTags Table.\n");

            //Create TAGS/BILDER TABLE
            $sql = "CREATE table IF NOT EXISTS $tableBT(
                    id_bilder INT( 11 ),
                    id_tag INT(11) , 
                    PRIMARY KEY ( id_bilder, id_tag ),
                    FOREIGN KEY (id_bilder) REFERENCES $tableBilder (id),
                    FOREIGN KEY (id_tag) REFERENCES $tableTags (id));";
            $db->exec($sql);
            print("Created $tableTags Table.\n");

            //INSERT image into BILDER Table
            $stmt = $db->prepare("INSERT INTO $tableBilder (imgpath, imgtype) 
                VALUES (:path, :type)");
    
            $stmt->bindParam(':path', $path);
            $stmt->bindParam(':type', $type);
    
            $tmpname = $_FILES['img']['tmp_name'];
            $type = $_FILES['img']['type'];
            $path = $uploadfile;
            
            $stmt->execute();
            $lastidImg = $db->lastInsertId();
            echo $lastidImg;

            //INSERT Tags
            $tags = $_POST["clothestags"];
            $tagname = explode(",", $tags);

            for($i = 0; $i < count($tagname); ++$i){

            $stmt = $db->prepare("SELECT $tableTags (tagname) 
                    VALUES (:tagname)");
    
                $stmt->bindParam(':tagname', $tag);
    
                // insert a row
            
                $tag = $tagname[$i];
                $stmt->execute();

            if(){
                $stmt = $db->prepare("INSERT INTO $tableTags (tagname) 
                    VALUES (:tagname)");
    
                $stmt->bindParam(':tagname', $tag);
    
                // insert a row
            
                $tag = $tagname[$i];
                $stmt->execute();

                $lastidTag = $db->lastInsertId();
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
