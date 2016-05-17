<?php
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
                    imglabel VARCHAR (100),
                    category VARCHAR (50),
                    PRIMARY KEY ( id ));";
            $db->exec($sql);

            //Create TAGS Table
            $sql = "CREATE table IF NOT EXISTS $tableTags(
                    id INT( 11 ) AUTO_INCREMENT UNIQUE ,
                    tagname VARCHAR (50) UNIQUE ,
                    PRIMARY KEY ( id ));";
            $db->exec($sql);

            //Create TAGS/BILDER TABLE
            $sql = "CREATE table IF NOT EXISTS $tableBT(
                    id_bilder INT( 11 ),
                    id_tag INT(11) , 
                    PRIMARY KEY ( id_bilder, id_tag ),
                    FOREIGN KEY (id_bilder) REFERENCES $tableBilder (id),
                    FOREIGN KEY (id_tag) REFERENCES $tableTags (id));";
            $db->exec($sql);
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            if ($e->errorInfo[1] == 1062) {
                header('Location: start.php');
            }

        }
?>