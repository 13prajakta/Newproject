
<?php 
  require_once'sessiondash.php';
  $con = new mysqli('localhost','root','','igc');
  $query = "SELECT * FROM contact";
  $result = $con->query($query); 

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Contact Pannel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>
    <div class="back">
      <div class="container">
        <!-- header -->
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="row header">
            <div class="col-md-12 col-xs-12" style="padding: 0 0px;">
             <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <div class="col-md-4 btn-block">
                    <a class="navbar-brand" href="#"><img src="img/mylogo2.png" class="img-responsive" alt="Responsive image"></a>
                    </div>
                     <div class="profile text-center "style="display: inline-block;margin-bottom: 20px;margin-left: 300px;"> 
                      <img src="img/ap3.png"class="img-circle">
                      <h2 style="padding-left: 0px;text-decoration: none;color: #fff;display: inline;font-size: 27px;">Prajakta</h2>
                    </div>
                  </div>
                  
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      <li class="logb"><a href="logoutdash.php"><h2><button type="button" class="btn btn-default btn-lg">Log Out</button></h2></a></li>
                      <li><a href="#"  style="text-decoration: none;"><h2><img src="img/bell1.png"><span class="badge">42</span></h2></a></li>
                      <li><a href="#" style="text-decoration: none;">
                          <div class="dropdown">
                          <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <h2><img src="img/setting1.png" style="border-left: 1px solid #fff;padding-left: 20px;"></h2>
                         </a>
                          <ul class="dropdown-menu" aria-labelledby="dLabel">
                           <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                        </li> 
                      </a>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
            </div>

            <!-- sidebar -->
              <div class="row" >
                  <div class="col-md-3 col-xs-12 sidebar" style="min-height: 595px;">
                   <a href="dashboard.php"><div class="col-md-12 col-xs-12 dash"><h2>DASHBOARD</h2></div></a>
                    <a href="images.php"><div class="col-md-12 col-xs-12 dash"><h2>IMAGES</h2></div></a>
                    <a href="feedbackdash.php"><div class="col-md-12 col-xs-12 dash"><h2>FEEDBACK</h2></div></a>
                    <a href="contactdash.php"><div class="col-md-12 col-xs-12 dash"><h2>CONTACT US</h2></div></a>
                  </div>
                  <!-- mainsection -->
                  <div class="col-md-9 col-xs-12 main" style="background-color: #fff;">
                    <div class="row">
                      <div class="col-md-12">
                        <h1>USER CONTACT DETAILS:</h1>
                        <div class="table-responsive">
                          <table class="table table-hover table-bordered">
                            <tr class="headfeed">
                              <th class="text-center">SR.NO</th>
                              <th class="text-center">NAME <span class="glyphicon glyphicon-text-background" aria-hidden="true"></span></th>
                              <th class="text-center">CONTACT <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></th>
                              <th class="text-center">EMAIL <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></th>
                              <th class="text-center">ADDRESS <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></th>
                              <th class="text-center">GENDER <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></th>
                              <th class="text-center">HOW THEY REACH TO US!<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></th>
                              <th class="text-center">INQUIRED FOR ?</th>
                              <th class="text-center">ACTION</th>
                            </tr>
                          
                            <?php 
                                while ($data = $result->fetch_object()) {
                                  echo"<tr>";
                                  echo "<td>$data->c_id</td>";
                                  echo "<td>$data->cnname</td>";
                                  echo "<td>$data->cncontact</td>";
                                  echo "<td>$data->cnemail</td>";
                                  echo "<td>$data->cnaddress</td>";
                                  echo "<td>$data->cngender</td>";
                                  echo "<td>$data->cnreach</td>";
                                  echo "<td>$data->cninq</td>";
                                  echo "<td>";
                                    echo "<a href='delete.php?cid=$data->c_id'>DELETE</a>";
                                  echo "</td>";
                                  echo "</tr>";
                                }
                            ?>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- footer -->
              <div class="row">
                <div class="col-md-12 col-xs-12 footer">
                   <div class="col-md-4 col-xs-4"></div>
                   <div class="col-md-4 col-xs-12 text-center">
                      <a href="https://www.facebook.com/"><img src="img/face.png"></a>
                      <a href="https://twitter.com/"><img src="img/twit.png"></a>
                      <a href="https://www.instagram.com/"><img src="img/insta.png"></a>
                      <a href="https://www.google.com/gmail"><img src="img/g+.png"></a>
                      <a href="https://in.linkedin.com/"><img src="img/link.png"></a>
                      <h4>Copy-right @webgurukul 2019-20</h4>
                   </div>
                   <div class="col-md-4 col-xs-4"></div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
     
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  