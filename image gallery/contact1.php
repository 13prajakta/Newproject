<?php 
  require_once'session.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact</title>

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
    <div class="container-fluid"style="margin: 0px;padding: 0px;height: 100%;width: 100%;overflow-x: hidden;">
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
                      <img src="img/sl1.jpg" alt="..." width="100%"class="img-responsive" alt="Responsive image">
                      <div class="carousel-caption">
                        <h1 class="text-center">
                           WELCOME TO YOUR WEBSITE!!!
                        </h1>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/sl2.jpg" alt="..." width="100%"class="img-responsive" alt="Responsive image">
                       <div class="carousel-caption gal">
                        <h1 class="text-center">
                          THE GALLERY
                        </h1>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/sl3.jpg" alt="..." width="100%"class="img-responsive" alt="Responsive image">
                      <div class="carousel-caption newar">
                        <h1 class="text-center">
                          A NEW ERA OF WEBSITE IS HERE....
                        </h1>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/s4.png" alt="..." width="100%"class="img-responsive" alt="Responsive image">
                      <div class="carousel-caption mod">
                        <h1 class="text-center ">
                          ALL OUR DREAMS CAN COME TRUE-- IF WE HAVE THE COURAGE TO PURSUE THEM..
                        </h1>
                      </div>
                    </div>
                    <div class="item">
                    <img src="img/sl8.jpg" alt="..." width="100%"class="img-responsive" alt="Responsive image">
                    <div class="carousel-caption new1">
                        <h1 class="text-center ">
                          TO SUCCIED IN LIFE ,YOU NEED TWO THINGS:IGNORANCE AND CONFIDENCE
                        </h1>
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/sl6.jpg" alt="..." width="100%"class="img-responsive" alt="Responsive image">
                      <div class="carousel-caption arise">
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
       <div class="container-fluid "style="margin: 0px;padding: 0px;height: 100%;width: 100%;overflow-x: hidden;">
        <div class="backcontact">
          <div class="colo">
             <div class="container ">
                <div class="row backcont img-responsive">
                    <div class="col-md-12">
                        <div class="row con">
                          <div class="col-md-12 col-xs-12 look">
                            <h1>Contact Details</h1>
                            <h4>Looking to contact us? Pick the option that fits your <br> inquiry best!</h4>
                          </div>
                        </div>
                             <div class="row con">
                               <div class="col-sm-12 col-xs-12  col-md-6 ">
                                  <form action="getdatac.php" method="post">
                                     <div class="form-group">
                                        <label for="exampleInputPassword1" >Name</label>
                                        <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Name" required name="cname">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1" >Contact</label>
                                        <input type="Number" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Number" required name="cnumber">
                                      </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1" >Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required name="cemail">
                                      </div>
                                       <div class="form-group">
                                        <label for="exampleInputEmail1" >Address</label>
                                        <textarea class="form-control" rows="4" required name="caddress"></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1" >Select Your Gender</label>
                                             <div class="radio">
                                              <label>
                                                <input type="radio" name="cRadio" id="blankRadio1" value="option1" aria-label="..." required>Male
                                              </label>
                                              <label>
                                                <input type="radio" name="cRadio" id="blankRadio1" value="option1" aria-label="..."required>Female
                                              </label>
                                              <label>
                                                <input type="radio" name="cRadio" id="blankRadio1" value="option1" aria-label="..."required>Other
                                          </label>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">How do you get to know about us?</label>
                                        <select class="form-control" required name="cselect">
                                        <option>--select--</option>
                                        <option>Facebook</option>
                                        <option>Twitter</option>
                                        <option>Linkdein</option>
                                        <option>Newspaper</option>
                                        <option>Website</option>
                                        <option>Friend</option>
                                        <option>Instagram</option>
                                        <option>Recomended by any employ of ours</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Inquiery For</label>
                                        <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="msg" required name="cmsg">
                                      </div>
                                      <button type="submit" class="btn btn-default" value="submit">Submit</button>
                                      <button type="Reset" class="btn btn-default" value="Reset">Reset</button>
                                  </form>
                               </div>
                              </div> 
                               <div class="col-sm-12 col-xs-12 col-md-6">
                                 <div class="row">
                                   <div class="col-xs-12 col-md-12">
                                    <h3 style="color: white;"> Navigation Map:</h3>
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.3906853890976!2d79.09930901440914!3d21.1368449894567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c1ce578c9087%3A0x74226fbc5a129b8c!2sWebGurukul!5e0!3m2!1sen!2sin!4v1582618538641!5m2!1sen!2sin" class="btn-block" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                   </div>
                                 </div>
                                  <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                       <div class="urate">
                                           <span class="heading"><h4 class="text-center">User Rating:</h4></span>
                                           <span class="fa fa-star checked fw"></span>
                                           <span class="rate"> <h5 class="text-center">4.6/5</h5></span>
                                       </div>
                                      <address>
                                   <div class="col-md-6 col-xs-6 add">     
                                      <strong>ADDRESS</strong><br>
                                      F-6, Shivsagar Estate,<br>Dr A.b.road, Worli<br>Mumbai, Maharashtra <br> 400018<br>
                                    </div>   
                                    <div class="col-xs-6 col-md-6 add">
                                      <strong>Contact Number</strong><br> 
                                      <abbr title="Phone">P:</abbr> +02224933119
                                      <br>
                                      <strong>Email</strong><br>
                                      <a href="mailto:#">first.last@example.com</a>
                                      <br>
                                      <strong>Fax</strong><br>
                                      <a href="mailto:#">+1-212-9876543</a>
                                   </div>   
                                    </address>
                                    </div>
                                  </div>
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
                  <a href="https://www.facebook.com/"><img src="img/face.png" class="img-responsive"></a>
                  <a href="https://twitter.com/"><img src="img/twit.png" class="img-responsive"></a>
                  <a href="https://www.instagram.com/"><img src="img/insta.png" class="img-responsive"></a>
                  <a href="https://www.google.com/gmail"><img src="img/g+.png" class="img-responsive"></a>
                  <a href="https://in.linkedin.com/"><img src="img/link.png" class="img-responsive"></a>
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