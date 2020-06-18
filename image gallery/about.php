<?php 
  require_once'session.php'; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
  </head>
  <body>
    
      <div class="container">
      <!-- header section -->
        <div class="row header">
          <div class="col-md-12 col-xs-12 fullheader">
           
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
                  <a class="navbar-brand" href="#">
                    <img src="img/mylogo1.png">
                  </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php" class="text-center">Gallery</a></li>
                    <li><a href="about.php" class="text-center">About</a></li>
                    <li><a href="feedback.php" class="text-center">Feedback</a></li>
                    <li><a href="contact1.php" class="text-center">Contact</a></li>
                    <li class="text-center"><a href="logout.php" type="button" class="btn btn-primary" style="background-color: #042331;padding: 10px;color: #ddd;" >LOGOUT</a></li>
                  </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>   
      </div>
      <!-- slider section -->
    <div class="container-fluid" style="margin: 0px;padding: 0px;height: 100%;width: 100%;overflow-x: hidden;">
        <div class="row slider">
          <div class="col-md-12 col-xs-12">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="img/sl1.jpg" alt="..." width="100%" class="img-responsive" alt="Responsive image">
                      <div class="carousel-caption">
                        <h1 class="text-center">
                          WELCOME TO YOUR WEBSITE!!!
                        </h1>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/sl2.jpg" alt="..." width="100%" class="img-responsive" alt="Responsive image">
                      <div class="carousel-caption gal">
                        <h1 class="text-center">
                          THE GALLERY
                        </h1>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/sl3.jpg" alt="..." width="100%" class="img-responsive" alt="Responsive image">
                      <div class="carousel-caption">
                        <h1 class="text-center">
                          A NEW ERA OF WEBSITE IS HERE....
                        </h1>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/s4.png" alt="..." width="100%" class="img-responsive" alt="Responsive image">
                       <div class="carousel-caption mod">
                        <h1 class="text-center ">
                          ALL OUR DREAMS CAN COME TRUE-- IF WE HAVE THE COURAGE TO PURSUE THEM..
                        </h1>
                      </div>
                    </div>
                    <div class="item">
                    <img src="img/sl8.jpg" alt="..." width="100%" class="img-responsive" alt="Responsive image">
                    <div class="carousel-caption ">
                        <h1 class="text-center ">
                          TO SUCCIED IN LIFE ,YOU NEED TWO THINGS:IGNORANCE AND CONFIDENCE
                        </h1>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/sl6.jpg" alt="..." width="100%" class="img-responsive" alt="Responsive image">
                      <div class="carousel-caption">
                        <h1 class="text-center">
                          ARISE,AWAKE AND STOP NOT TILL THE GOAL IS REACHED..
                        </h1>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>    
          </div>
        </div> 
       </div> 
      </div>
       <!-- category section -->
      <div class="container-fluid" style="margin: 0px;padding: 0px;height: 100%;width: 100%;overflow-x: hidden;">
        <div class="aboutback">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-xs-12 feed">
                <div class="col-md-4 col-xs-4 text-center about1 abouth">
                  <div class="thumbnail1">
                    <img src="img/about3.png" alt="..." class="btn-block">
                    <div class="caption">
                      <h3>One simple commercial <br> License for all content</h3>
                      <p>We want to make it easy <br> for you to do the right thing.<br> That’s why we came up with <br> one license that gives you<br>  broad commercial rights,<br>  and applies to everything.<br> so you can use items<br>  with confidence in all <br> your projects.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-4 text-center about2 abouth">
                   <div class="thumbnail1 ab ">
                    <img src="img/about1.png" alt="..." class="btn-block">
                    <div class="caption">
                      <h3>Unlimited downloads <br> for a single fee</h3>
                      <p>You want to focus on<br>  great design,not worry <br> about adding credits or<br>  managing download limits.<br> With unlimited downloads<br> ,you’re free to push your <br> creative boundaries and <br> try new things.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-4 text-center about3 abouth">
                   <div class="thumbnail1 ab1">
                    <img src="img/about2.png" alt="..." class="btn-block">
                    <div class="caption">
                      <h3>Powerd by a community <br>of independent designer</h3>
                      <p>we know you want <br> consistently high quality <br> and unique assests for your <br> projects. and the best way to<br>  do that is to tap into a<br>  community of talented designers<br>  who are passionate<br>  about what they do.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- footer section -->
            <div class="container-fluid"style="margin: 0px;padding: 0px;height: 100%;width: 100%;overflow-x: hidden;">
              <div class="row footer">
                <div class="col-md-12 text-center">
                  <a href="https://www.facebook.com/"><img src="img/face.png"></a>
                  <a href="https://twitter.com/"><img src="img/twit.png"></a>
                  <a href="https://www.instagram.com/"><img src="img/insta.png"></a>
                  <a href="https://www.google.com/gmail"><img src="img/g+.png"></a>
                  <a href="https://in.linkedin.com/"><img src="img/link.png"></a>
                  <h4>Copy-right @webgurukul 2019-20</h4>
                </div>
              </div>
            </div>
           
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  