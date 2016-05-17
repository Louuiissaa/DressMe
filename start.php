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
      <link href="/stylesheet.css" rel="stylesheet">
      <?php
         include 'loginCheck.php';
         ?>
   </head>
   <body>
      <?php
         include 'menustrukturoben.php';
         ?>
      <!-- Carousel
         ================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <img class="first-slide" src="src/start/Collage_FotorTitel2.jpg" alt="First slide">
               <div class="container">
                  <div class="carousel-caption">
                     <hcarousel>Your personal Wardrobe</hcarousel>
                     <p>Check out your own Wardrobe.</p>
                     <p><a class="btn btn-lg pink-background button-font" href="wardrobe.php" role="button">Your Wardrobe</a></p>
                  </div>
               </div>
            </div>
            <div class="item">
               <img class="second-slide" src="GlitzerSchuh.png" alt="Second slide">
               <div class="container">
                  <div class="carousel-caption">
                     <hcarousel>Add some items to your Wardrobe</hcarousel>
                     <p>You can add any type of clothes to your wardrobe:<br> Tops, Dresses, Skirts, Shoes, ...</p>
                     <p><a class="btn btn-lg pink-background button-font" href="#" role="button">Add item</a></p>
                  </div>
               </div>
            </div>
            <div class="item">
               <img class="third-slide" src="Collage_Licht.png" alt="Third slide">
               <div class="container">
                  <div class="carousel-caption">
                     <hcarousel>One more for good measure.</hcarousel>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                     <p><a class="btn btn-lg pink-background button-font" href="#" role="button">Browse gallery</a></p>
                  </div>
               </div>
            </div>
         </div>
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <!-- /.carousel -->
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
      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   </body>
</html>