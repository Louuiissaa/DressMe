<!DOCTYPE html>
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

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

    <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

    <link href="stylesheet.css" rel="stylesheet">

    <?php include 'loginCheck.php'; ?>

</head>

<body>

    <?php include 'menustrukturoben.php'; include 'menustrukturlinks.php'; ?>

    <div class="col-sm-9">
        <div class="container">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <fontDressMe>T-Shirt and Tanks</fontDressMe>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects Row -->
            <!--div class="row gallery-margin">
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="<?php $tagname=4; $no=0; include "img_get.php";?>" alt="">
                </a>
            </div>
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="<?php $tagname=4; $no=1; include "img_get.php";?>" alt="">
                </a>
            </div>
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="<?php $tagname=4; $no=2; include "img_get.php";?>" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

            <!-- Projects Row -->
            <!--div class="row gallery-margin">
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

            <!-- Projects Row -->
            <!--div class="row gallery-margin">
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

            <table>
                <?php
                try{
                    //Database Connection
                    include ( "dbzugriff.php");
                    include ( "createDatabaseTables.php");

                    $selectedCategory = $_GET[ 'category'];
                    $query = 'SELECT * FROM BILDER WHERE category = :category' ;
                    $stmt = $db->prepare($query);
                    $stmt->bindParam(':category', $selectedCategory);
                    $stmt->execute();
                    $counter = 0;
                    $numberperrow = 3;
                    if($stmt->fetch() == null){
                        echo '</br><p>Du hast leider noch keine '.$selectedCategory.' in deinem Kleiderschrank';
                    }
                    while($row = $stmt->fetch()) {
                        if($counter == $numberperrow){
                            echo '<div class="row gallery-margin">';
                        }
                        //echo $row['imgpath'];
                        echo '<div class="col-xs-9 col-sm-3 col-md-2 portfolio-item gallery-margin">
                                <a href='.$row['imgpath'].'>
                                    <div class="wrapper">
                                        <img class="img-responsive" src='.$row['imgpath'].' alt='.$row['imglabel'].'>
                                    </div>
                                </a>
                            </div>';
                        if($counter == $numberperrow){
                            echo '</div>';
                        }
                        if($counter < $numberperrow){
                            $counter= $counter + 1;
                        } else { 
                            $counter=0 ;
                        }
                    }
                }catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                    if ($e->errorInfo[1] == 1146) {
                        header('Location: start.php');
                    }
                }
                ?>
                </br>
            </table>
        </div>
    </div>
    <hr>

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-sm-9 col-lg-9">
            <ul class="pagination text">
                <li>
                    <a class="pagination-design" href="#">&laquo;</a>
                </li>
                <li>
                    <a class="pagination-design" href="#">1</a>
                </li>
                <li>
                    <a class="pagination-design" href="#">2</a>
                </li>
                <li>
                    <a class="pagination-design" href="#">3</a>
                </li>
                <li>
                    <a class="pagination-design" href="#">4</a>
                </li>
                <li class="pagination-design">
                    <a class="pagination-design" href="#">5</a>
                </li>
                <li>
                    <a class="pagination-design" href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->
    </div>


    <hr>

    <footer>
        <p style="margin: 10px;">&copy; 2016 Louisa Pabst</p>
    </footer>
    </div>
    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <!--script src="../../dist/js/bootstrap.min.js"></script-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="../../assets/js/ie10-viewport-bug-workaround.js"></script-->




</body>

</html>