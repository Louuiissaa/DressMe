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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand dressme-header" href="#">DressMe</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <form method="POST" action="login.php">
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><input type="text" placeholder="Username" name="username" class="form-control vertical-center">
                </li>
                <li><input type="password" placeholder="Password" name="password" class="form-control vertical-center">
                </li>
                <li><button type="submit" class="btn btn-default vertical-center" onclick="FensterOeffnen">Sign in</button>
                </li>
            </ul>
        </div>
        </form>
    </div>
</div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><fontDressme>DressMe </fontDressme>   <smallh1>  Your virtual wardrobe</smallh1></h1>
        <form method="POST" action="register.php">
          <div class="fluid-container border">
            <div class="row">
              <div class="col-xs-6 col-sm-3 col-md-2">
            	 <input type="text" placeholder="Vorname" name ="firstname" class="form-control signup-input">
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
            	 <input type="text" placeholder="Nachname" name="lastname" class="form-control signup-input" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
            	 <input type="text" placeholder="Username" name="username" class="form-control signup-input" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
            	 <input type="password" placeholder="Password" name="password" class="form-control signup-input">
              </div>
            </div>
            <div class="row">
              <div class=" col-sm-4 col-md-4">
            	 <button type="submit" class="btn btn-lg pink-background left" onclick="FensterOeffnen">Sign Up &raquo;</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


    <!--div id="container">
  <div id="header">
    <div id="links">
      <ul>
        <li>Navigation</li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div>

    <div id="rechts">

    </div>
  </div>
  <div id="inhalt">

  </div>
</div-->

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




  </body>
</html>
