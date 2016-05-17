<DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="Louisa Pabst">
      <link rel="icon" href="favicon.ico">
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
      <?php
         include 'menustrukturoben.php';
         include 'menustrukturlinks.php';
         ?>
      <div class="col-sm-9">
         <div class="container">
            <!-- Page Heading -->
            <div class="row">
               <div class="col-lg-12">
                  <fontDressMe>Hinzufügen<br/></fontDressMe>
                  <spanunterschrift>Hier kannst du neue Kleidungsstücke zu deinem Kleiderschrank hinzufügen:<br/><br/></spanunterschrift>
                  <!--form id="bootstrapTagsInputForm" class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data"-->
                  <form id="bootstrapTagsInputForm" class="form-horizontal" method="post" action="addpictoDB.php" enctype="multipart/form-data">
                     <div class="fluid-container border">
                        <div class="row">
                           <div class="form-group">
                              <div class="col-xs-8 col-sm-8">
                                 <input type="text" placeholder="Name your clothes piece" name="clotheslabel" class="form-control" style="width: 24%;" />
                              </div>
                           </div>
                           <hr>
                           <p>Zu welcher Kategorie gehört dein Kleidungsstück?</p>
                           <table>
                              <tr>
                                 <td>
                                    <div class="radio">
                                       <label><input type="radio" value="Top" name="optcategory" checked="checked">Tops</label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="radio layoutleft">
                                       <label><input type="radio" value="Bottom" name="optcategory">Bottoms</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="radio">
                                       <label><input type="radio" value="Dresses & Rompers" name="optcategory">Dresses & Rompers</label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="radio layoutleft">
                                       <label><input type="radio" value="Swim" name="optcategory">Swim</label>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="radio">
                                       <label><input type="radio" value="Shoes" name="optcategory">Shoes</label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="radio layoutleft">
                                       <label><input type="radio" value="Accessories" name="optcategory">Accessories</label>
                                    </div>
                                 </td>
                              </tr>
                           </table>
                           <hr>
                           <input type="file" name="img" size="60" style="border-radius: 3px;">
                           <p><br/></p>
                           <p>Füge noch Tags passend zu deinem hochgeladenen Bild hinzu:</br></p>
                           <div class="form-group">
                              <div class="col-xs-8 col-sm-8">
                                 <table>
                                    <tr>
                                       <td>
                                          <input type="text" placeholder="Your Tags..." name="clothestags" class="form-control" style="width: 40%;" data-role="tagsinput"> 
                                       </td>
                                    </tr>
                                 </table>
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
   </body>
</html>