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
            <li><a href="hinzufuegen.php">Kleidungsstück hinzufügen</a></li>
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
                <fontDressMe>T-Shirt and Tanks</fontDressMe>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row gallery-margin">
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="img_get.php?id=1" alt="">
                </a>
            </div>
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="GlitzerSchuh.png" alt="">
                </a>
            </div>
            <div class="col-xs-9 col-sm-3 col-md-3 portfolio-item gallery-margin">
                <a href="#">
                    <img class="img-responsive" src="<?php include "img_get.php";?>" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row gallery-margin">
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
        <div class="row gallery-margin">
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

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-sm-9 col-lg-9">
                <ul class="pagination">
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
                    <li class="pagination-design" >
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
</div>


      <hr>

      <footer>
        <p style="margin: 10px;">&copy; 2016 Louisa Pabst</p>
      </footer>
    <!--/div--> <!-- /container -->


      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!--script src="../../dist/js/bootstrap.min.js"></script-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="../../assets/js/ie10-viewport-bug-workaround.js"></script-->




  </body>
</html>
