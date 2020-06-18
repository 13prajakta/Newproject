
<?php 
  require_once'sessiondash.php';
  $con = new mysqli('localhost','root','','dashboard');
  $query = "SELECT * FROM dash";
  $result = $con->query($query); 

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

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
                      <img src="img/ap3.png"class="img-circle img-responsive" style="float: left;">
                      <h2 style="padding-left: 0px;float: right;text-decoration: none;color: #fff;font-size: 27px;">Prajakta</h2>
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
              <div class="row">
                  <div class="col-md-3 col-xs-12 sidebar">
                    <a href="dashboard.php"><div class="col-md-12 col-xs-12 dash text-center"><h2>DASHBOARD</h2></div></a>
                    <a href="images.php"><div class="col-md-12 col-xs-12 dash text-center"><h2>IMAGES</h2></div></a>
                    <a href="feedbackdash.php"><div class="col-md-12 col-xs-12 dash text-center"><h2>FEEDBACK</h2></div></a>
                    <a href="contactdash.php"><div class="col-md-12 col-xs-12 dash text-center"><h2>CONTACT US</h2></div></a>
                  </div>
                  <!-- mainsection -->
                  <div class="col-md-9 col-xs-12 main" style="background-color: #fff;">
                    <div class="row">
                      <div class="col-md-12 col-xs-12">
                        <h1>DASHBOARD</h1>
                        <h3 style="margin-bottom: 40px;">Hi prajakta ! Have a Look at Your Dashboard</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-xs-12">
                        <div class="col-md-4 col-xs-12">
                          <div class="row text-center">
                            <div class="col-md-12 col-xs-6">
                              <div class="thumbnail">
                                <img src="img/d1.jpg" alt="...">
                                <h4 style="color: #fff;margin-top: -80px;margin-bottom: 40px;font-weight: bold;">COUNT <br> <span class="badge">2000</span></h4 style="color: #fff;margin-top: -80px;margin-bottom: 40px;">
                                <div class="caption text-center">
                                  <span class="glyphicon glyphicon-picture" aria-hidden="true"><h3 style="margin-top: 0px;">IMAGES</h3></span>
                                </div>
                               </div> 
                            </div>
                            <div class="col-md-12 col-xs-6">
                              <div class="thumbnail">
                                <img src="img/d22.jpg" alt="...">
                                <h4 style="color: #AB1916;margin-top: -80px;margin-bottom: 40px;font-weight: bold;">COUNT <br> <span class="badge">7.1 M</span> </h4 style="color: #fff;margin-top: -80px;margin-bottom: 40px;">
                                  <div class="caption text-center">
                                     <span class="glyphicon glyphicon-stats" aria-hidden="true"><h3 style="margin-top: 0px;">FEEDBACK</h3></span>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div> 
                        <div class="col-md-4 col-xs-12 text-center">
                          <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-7 col-xs-4 text-center new" >
                             <div class="thumbnail" style="padding: 0px;padding-bottom: 20px;padding-top: 20px;border-radius: 50%;border: 10px solid #C7F197"> 
                                 <span class="glyphicon glyphicon-heart btn " aria-hidden="true" style="padding-top: 20px;"></span><span class="badge" style="margin-top: 20px;background-color: #e1e1e1;">10000</span>
                             </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-7 col-xs-4 text-center new a">
                              <div class="thumbnail" style="padding: 0px;border-radius: 50%;border: 10px solid #FDF534">
                                <a href="" style="text-decoration: none;">
                                  <h2>4.2/5.0</h2>
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Ratings
                                </a>
                              </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-7 col-xs-4 text-center new b">
                              <div class="thumbnail " style="padding: 0px;border-radius: 50%;border: 10px solid #97EEFE">
                                <a href="" style="text-decoration: none;"><h2>3.2 M</h2>
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Views
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-4  anch">
                          <div class="row text-center">
                            <div class="col-md-12 col-xs-12">
                              <div class="col-md-6 col-xs-6">
                                <div class="thumbnail fb">
                                   <img src="img/face.png">
                                   <a href="#" style="text-decoration: none;">Contacted <br><span class="badge">42322</span></a>
                                 </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                <div class="thumbnail insta">
                                  <img src="img/insta.png">
                                  <a href="#" style="text-decoration: none;">Contacted <br><span class="badge">9822</span></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row text-center">
                            <div class="col-xs-12 col-md-12 ">
                              <div class="col-xs-6 col-md-6 ">
                                <div class="thumbnail google">
                                  <img src="img/g+.png">
                                  <a href="#" style="text-decoration: none;">Contacted <br><span class="badge">42322</span></a>
                                </div>
                              </div>
                              <div class="col-md-6 col-xs-6">
                                <div class="thumbnail twit">
                                  <img src="img/twit.png">
                                  <a href="#" style="text-decoration: none;">Contacted <br><span class="badge">1.5 M</span></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row text-center">
                            <div class="col-md-12 col-xs-12">
                              <div class="col-md-3 col-xs-3"></div>
                              <div class="col-md-6 col-xs-6">
                                <div class="thumbnail link">
                                  <img src="img/link.png">
                                  <a href="#" style="text-decoration: none;">Contacted <br><span class="badge">2.2 M</span></a>
                                </div>
                              </div>
                              <div class="col-md-3 col-xs-3"></div>
                            </div>
                          </div>
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
    </div>
     
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  