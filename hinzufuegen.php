<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>DressMe</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>

<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript" charset="utf-8"></script-->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/tag-it.js" type="text/javascript" charset="utf-8"></script>

<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<link href="css/jquery.tagit.css" rel="stylesheet" type="text/css">

  <link href="stylesheet.css" rel="stylesheet">

  <?php
    include 'loginCheck.php';
  ?>

  </head>

  <body>

<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand dressme-header" href="start.php">DressMe</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="wardrobe.php" class="header_font">Wardrobe</a>
                </li>
                <li><a href="#" class="header_font">BLA BLA</a>
                </li>
                <li><a href="#" class="header_font">Settings</a>
                </li>
                <li><a href="logout.php" class="header_font">Log Out <span class="glyphicon glyphicon-log-out"></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="row">
  <div class="col-sm-3">
  <nav>
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="#" class="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false" aria-controls="btn-1">Tops</a>
              <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
                <li><a class="a-menu" href="#">&raquo; T-Shirt and Tanks</a></li>
                <li><a class="a-menu" href="#">&raquo; Hoodies</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="btn-2" data-toggle="collapse" data-target="#submenu2" aria-expanded="false" aria-controls="btn-2">Bottoms</a>
              <ul class="nav collapse" id="submenu2" role="menu" aria-labelledby="btn-2">
                <li><a class="a-menu" href="#">&raquo; Jeans</a></li>
                <li><a class="a-menu" href="#">&raquo; Skirts</a></li>
              </ul>
            </li>
            <li><a href="#">Kleidungsstück hinzufügen</a></li>
            <li><a href="#">Reviews</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </nav>
  </div>

  <div class="col-sm-9">
    <div class="container">

        <!-- Page Heading -->

        <div class="row">
            <div class="col-lg-12">
                <fontDressMe>Hinzufügen<br/></fontDressMe>
                <spanunterschrift>Hier kannst du neue Kleidungsstücke zu deinem Kleiderschrank hinzufügen:<br/><br/></spanunterschrift>
                <form id="bootstrapTagsInputForm" class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <div class="fluid-container border">
                    <div class="row">
                        <input type="file" name="img" size="60" style="border-radius: 3px;"><p><br/></p>
                        <p>Füge noch Tags passend zu deinem hochgeladenen Bild hinzu:</br></p>
                            <div class="form-group">
                                <div class="col-xs-8 col-sm-8">
                                    <input type="text" placeholder="Your Tags..." name="clothestags" class="form-control" data-role="tagsinput"/>
                                </div>
                            </div>
                        <input type="submit" class="btn btn-lg pink-background left" name="submit" value="Upload">
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->

  </div>
</div>
</div>

      <hr>

      <footer>
        <p style="margin: 10px;">&copy; 2016 Louisa Pabst</p>
      </footer>
    <!--/div--> <!-- /container -->


      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
$(document).ready(function () {
    $('#bootstrapTagsInputForm')
        .find('[name="clothestags"]')
            // Revalidate the cities field when it is changed
            .change(function (e) {
                $('#bootstrapTagsInputForm').formValidation('revalidateField', 'clothestags');
            })
            .end()
        .formValidation({
            framework: 'bootstrap',
            excluded: ':disabled',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                clothestags: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter at least one tag.'
                        }
                    }
                }
            }
        });
});
</script>
     <?php
        if (array_key_exists('img',$_FILES)) {

            $path = 'src/wardrobe/images/';

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
            $stmt = $db->prepare("INSERT INTO $tableTags (tagname) 
                VALUES (:tagname)");
    
            $stmt->bindParam(':tagname', $tag);
    
            // insert a row
            
            $tag = $tagname[$i];
            $stmt->execute();
        }
    
            echo "New records created successfully"; 
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $db = null;
        }
    ?>



  </body>
</html>

