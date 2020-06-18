<?php 
/*  require_once'session.php'; */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
  </head>
  <body>
     <div class="container" >
      <!-- header section -->
        <div class="row header">
          <div class="col-md-12 col-xs-12 fullheader" >
           
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
                  <a class="navbar-brand" href="#" >
                    <img src="img/mylogo1.png" class="img-responsive" alt="Responsive image">
                  </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php" class="text-center">Gallery</a></li>
                    <li><a href="about.php" class="text-center">About</a></li>
                    <li><a href="feedback.php" class="text-center">Feedback</a></li>
                    <li><a href="contact1.php" class="text-center">Contact</a></li>
                    <li class="text-center"><a href="logout.php" type="button" class="btn btn-primary" style="background-color: #042331;padding: 10px;color: #ddd;" >LOGOUT</a ></li>
                  </ul> 
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>   
      </div>
    <div class="container-fluid">
        <div class="row slider">
          <div class=" col-xs-12 col-sm-12 col-md-12" style="margin: 0px;padding: 0px;height: 100%;width: 100%;overflow-x: hidden;">
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
                        <h1 class="text-center" >
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
           <!-- main section -->
      <div class="backhome">   
        <div class="container">
            <div class="back">
                <div class="row">
                    <div class="col-md-12">    
                            <div class="row">
                              <!-- image1 -->
                              <div class="col-xs-4 col-md-4 pic">
                                <a href="#" class="thumbnail">
                                  <img src="img/image01.png" alt="..." class="image" data-target="#myModal" type="button" data-toggle="modal">
                                  <div class="middle">
                                    <div class="text"><img src="img/downlode.png"></div>
                                     <a href="#" class="heart"><img src="img/heart.png" class="img-responsive"><span class="badge">902</span></a> 
                                 </div>                    
                                </a>
                              </div>
                              <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">image1</h4>
                                    </div>
                                    <div class="modal-body">
                                      <img src=" img/img1.jpg" class=" btn-block">
                                    </div>
                                    <div class="modal-footer">
                                      <h4 class="text-left">Image-type: jpg <br>  Dimension:1024x768 px <br>  size:180 kb</h4>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                      <button type="button" class="btn"><img src="img/heart.png"></button>
                                    </div>
                                 </div>
                              </div>
                          </div>
                          <!-- Image2 -->
                              <div class=" col-xs-4 col-md-4 pic">
                                 <a href="#" class="thumbnail">
                                <img src="img/image02.png" alt="..." class="image"  data-target="#myModal1" type="button" data-toggle="modal">
                                <div class="middle">
                                  <div class="text"><img src="img/downlode.png"></div>
                                  <a href="#" class="heart"><img src="img/heart.png"><span class="badge">290</span></a> 
                                </div>                 
                              </a>
                              </div>
                              <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">image2</h4>
                                  </div>
                                  <div class="modal-body">
                                    <img src="img/img2.jpg" class=" btn-block">
                                  </div>
                                <div class="modal-footer">
                                  <h4 class="text-left">Image-type: jpg <br>  Dimension:1920x1080 px <br>  size: 551 kb</h4>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                <button type="button" class="btn"><img src="img/heart.png"></button>
                                </div>
                              </div>
                            </div>
                          </div>
                              <!-- Image3 -->
                              <div class="col-xs-4  col-md-4  pic">
                                <a href="#" class="thumbnail">
                                <img src="img/image04.png" alt="..." class="image"  data-target="#myModal2" type="button" data-toggle="modal">
                                <div class="middle">
                                  <div class="text"><img src="img/downlode.png"></div>
                                   <a href="#" class="heart"><img src="img/heart.png"><span class="badge">672</span></a> 
                                </div>                
                              </a>
                              </div>
                            </div>
                             <div class="modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">image3</h4>
                                  </div>
                                  <div class="modal-body">
                                    <img src="img/img4.jpg" class=" btn-block">
                                  </div>
                                <div class="modal-footer">
                                  <h4 class="text-left">Image-type: jpg <br>  Dimension:3840x2160 px <br>  size: 879 kb</h4>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                <button type="button" class="btn"><img src="img/heart.png"></button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <!-- image4 -->
                                <div class="col-xs-4 col-md-4 pic" data-target="#myModal3" type="button" data-toggle="modal">
                                  <a href="#" class="thumbnail">
                                  <img src="img/image03.png" alt="..."  class="image" >
                                  <div class="middle">
                                    <div class="text"><img src="img/downlode.png"></div>
                                    <a href="#" class="heart"><img src="img/heart.png"><span class="badge">662</span></a>
                                  </div>                 
                                </a>
                                </div>
                                <div class="modal" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">image4</h4>
                                  </div>
                                  <div class="modal-body">
                                    <img src="img/img3.png" class=" btn-block">
                                  </div>
                                <div class="modal-footer">
                                  <h4 class="text-left">Image-type: png <br>  Dimension: 2560x1600 px <br>  size: 2.97 Mb</h4>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                <button type="button" class="btn"><img src="img/heart.png"></button>
                                </div>
                              </div>
                            </div>
                          </div>

                                <!-- image5 -->
                                <div class="col-xs-4  col-md-4 pic">
                                   <a href="#" class="thumbnail">
                                  <img src="img/image05.png" alt="..." class="image" data-target="#myModal4" type="button" data-toggle="modal">
                                  <div class="middle">
                                    <div class="text"><img src="img/downlode.png"></div>
                                    <a href="#" class="heart1"><img src="img/heart.png"><span class="badge bag">2453</span></a>
                                  </div>                       
                                </a>
                                </div>
                                 <div class="modal" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">image5</h4>
                                  </div>
                                  <div class="modal-body">
                                    <img src="img/img5.jpg" class=" btn-block">
                                  </div>
                                <div class="modal-footer">
                                  <h4 class="text-left">Image-type: jpg <br>  Dimension: 274x184 px <br>  size: 5.91 kb</h4>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                <button type="button" class="btn"><img src="img/heart.png"></button>
                                </div>
                              </div>
                            </div>
                          </div>

                                <!-- image6 -->
                                <div class="col-xs-4 col-md-4 pic">
                                  <a href="#" class="thumbnail">
                                  <img src="img/image06.png" alt="..." class="image" data-target="#myModal5" type="button" data-toggle="modal">
                                  <div class="middle">
                                    <div class="text"><img src="img/downlode.png"></div>
                                    <a href="#" class="heart1"><img src="img/heart.png"><span class="badge bag">1004</span></a> 
                                  </div>                 
                                </a>
                                </div>
                              </div>
                                <div class="modal" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">image6</h4>
                                  </div>
                                  <div class="modal-body">
                                    <img src="img/img6.jpg" class=" btn-block">
                                  </div>
                                <div class="modal-footer">
                                  <h4 class="text-left">Image-type: jpg <br>  Dimension: 512x320 px <br>  size: 5.91 kb</h4>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                <button type="button" class="btn"><img src="img/heart.png"></button>
                                </div>
                              </div>
                            </div>
                          </div>

                               <div class="row">
                                <!-- image7 -->
                                      <div class="col-xs-4 col-md-4 pic">
                                        <a href="#" class="thumbnail">
                                          <img src="img/image07.png" alt="..."  class="image" data-target="#myModal6" type="button" data-toggle="modal">
                                          <div class="middle">
                                            <div class="text"><img src="img/downlode.png"></div>
                                             <a href="#" class="heart"><img src="img/heart.png"><span class="badge">562</span></a> 
                                          </div>                  
                                        </a>
                                      </div>
                                        <div class="modal" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">image7</h4>
                                          </div>
                                          <div class="modal-body">
                                            <img src="img/img7.jpg" class=" btn-block">
                                          </div>
                                        <div class="modal-footer">
                                          <h4 class="text-left">Image-type: jpg <br>  Dimension: 512x288 px <br>  size: 40.8 kb</h4>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                        <button type="button" class="btn"><img src="img/heart.png"></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                      <!-- image8 -->
                                      <div class="col-xs-4  col-md-4 pic">
                                         <a href="#" class="thumbnail">
                                        <img src="img/image08.png" alt="..." class="image" data-target="#myModal7" type="button" data-toggle="modal">
                                        <div class="middle">
                                          <div class="text"><img src="img/downlode.png"></div>
                                          <a href="#" class="heart"><img src="img/heart.png"><span class="badge">352</span></a> 
                                        </div>                  
                                      </a>
                                      </div>
                                       <div class="modal" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">image8</h4>
                                          </div>
                                          <div class="modal-body">
                                            <img src="img/img8.jpg" class=" btn-block">
                                          </div>
                                        <div class="modal-footer">
                                          <h4 class="text-left">Image-type: jpg <br>  Dimension: 512x288 px <br>  size: 41.8 kb</h4>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                        <button type="button" class="btn"><img src="img/heart.png"></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                      <!-- image9 -->
                                      <div class="col-xs-4 col-md-4 pic">
                                        <a href="#" class="thumbnail">
                                        <img src="img/image09.png" alt="..." class="image" data-target="#myModal8" type="button" data-toggle="modal">
                                        <div class="middle">
                                          <div class="text"><img src="img/downlode.png"></div>
                                          <a href="#" class="heart"><img src="img/heart.png"><span class="badge">142</span></a> 
                                        </div>                    
                                      </a>
                                      </div>
                                    </div>
                                     <div class="modal" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">image9</h4>
                                          </div>
                                          <div class="modal-body">
                                            <img src="img/img9.jpg" class=" btn-block">
                                          </div>
                                        <div class="modal-footer">
                                          <h4 class="text-left">Image-type: jpg <br>  Dimension: 852x480 px <br>  size: 29.7 kb</h4>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                        <button type="button" class="btn"><img src="img/heart.png"></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                    <!-- image10 -->
                                    <div class="row">
                                      <div class="col-xs-4 col-md-4 pic">
                                        <a href="#" class="thumbnail">
                                        <img src="img/image010.png" alt="..." class="image" data-target="#myModal9" type="button" data-toggle="modal">
                                        <div class="middle">
                                          <div class="text"><img src="img/downlode.png"></div>
                                          <a href="#" class="heart"><img src="img/heart.png"><span class="badge">202</span></a> 
                                        </div>                    
                                      </a>
                                      </div>
                                      <div class="modal" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">image10</h4>
                                          </div>
                                          <div class="modal-body">
                                            <img src="img/img10.jpg" class=" btn-block">
                                          </div>
                                        <div class="modal-footer">
                                          <h4 class="text-left">Image-type: jpg <br>  Dimension: 852x480 px <br>  size: 70.2 kb</h4>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                        <button type="button" class="btn"><img src="img/heart.png"></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                      <!-- image11 -->
                                      <div class="col-xs-4 col-md-4 pic">
                                         <a href="#" class="thumbnail">
                                        <img src="img/image013.png" alt="..." class="image" data-target="#myModal10" type="button" data-toggle="modal">
                                        <div class="middle">
                                          <div class="text"><img src="img/downlode.png"></div>
                                          <a href="#" class="heart"><img src="img/heart.png"><span class="badge">123</span></a> 
                                        </div>                     
                                      </a> 
                                      </div>
                                      <div class="modal" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">image11</h4>
                                          </div>
                                          <div class="modal-body">
                                            <img src="img/img13.jpg" class=" btn-block">
                                          </div>
                                        <div class="modal-footer">
                                          <h4 class="text-left">Image-type: jpg <br>  Dimension: 1024x768 px <br>  size: 92.6 kb</h4>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                        <button type="button" class="btn"><img src="img/heart.png"></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                      <!-- image12 -->
                                      <div class="col-xs-4 col-md-4 pic">
                                        <a href="#" class="thumbnail">
                                        <img src="img/image015.png" alt="..." class="image" data-target="#myModal11" type="button" data-toggle="modal">
                                        <div class="middle">
                                          <div class="text"><img src="img/downlode.png"></div>
                                          <a href="#" class="heart"><img src="img/heart.png"><span class="badge">80</span></a> 
                                        </div>                 
                                      </a>
                                      </div>
                                    </div>
                                    <div class="modal" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">image12</h4>
                                          </div>
                                          <div class="modal-body">
                                            <img src="img/img15.jpg" class=" btn-block">
                                          </div>
                                        <div class="modal-footer">
                                          <h4 class="text-left">Image-type: jpg <br>  Dimension: 1024x681 px <br>  size: 183 kb</h4>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orinal</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                        <button type="button" class="btn"><img src="img/heart.png"></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                    <div class="row">
                                      <!-- image13 -->
                                      <div class="col-xs-4 col-md-4 pic">
                                        <a href="#" class="thumbnail">
                                        <img src="img/image012.png" alt="..." class="image" data-target="#myModal12" type="button" data-toggle="modal">
                                        <div class="middle">
                                          <div class="text"><img src="img/downlode.png"></div>
                                          <a href="#" class="heart"><img src="img/heart.png"><span class="badge">242</span></a>
                                        </div>                         
                                      </a>
                                      </div>
                                       <div class="modal" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">image13</h4>
                                          </div>
                                          <div class="modal-body">
                                            <img src="img/img12.jpg" class=" btn-block">
                                          </div>
                                        <div class="modal-footer">
                                          <h4 class="text-left">Image-type: jpg <br>  Dimension: 1920x1020 px <br>  size: 1.27 Mb</h4>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                        <button type="button" class="btn"><img src="img/heart.png"></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                      <!-- image14 -->
                                      <div class="col-xs-4 col-md-4 pic">
                                         <a href="#" class="thumbnail">
                                        <img src="img/image014.png" alt="..." class="image" data-target="#myModal13" type="button" data-toggle="modal">
                                        <div class="middle">
                                          <div class="text"><img src="img/downlode.png"></div>
                                           <a href="#"  class="heart"><img src="img/heart.png"  ><span class="badge">200</span></a> 
                                        </div>                   
                                      </a>
                                      </div> 
                                      <div class="modal" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">image14</h4>
                                          </div>
                                          <div class="modal-body">
                                            <img src="img/img14.jpg" class=" btn-block">
                                          </div>
                                        <div class="modal-footer">
                                          <h4 class="text-left">Image-type: jpg <br>  Dimension: 2048x2048 px <br>  size: 337 kb</h4>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                        <button type="button" class="btn"><img src="img/heart.png"></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                      <!-- image15 -->
                                      <div class="col-xs-4 col-md-4 pic">
                                        <a href="#" class="thumbnail">
                                          <img src="img/image016.png" alt="..." class="image" data-target="#myModal14" type="button" data-toggle="modal">
                                          <div class="middle">
                                            <div class="text"><img src="img/downlode.png"></div>
                                            <a href="#" class="heart"><img src="img/heart.png"><span class="badge">42</span></a> 
                                          </div>                  
                                        </a>
                                      </div>
                                    </div>
                                     <div class="modal" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">image16</h4>
                                          </div>
                                          <div class="modal-body">
                                            <img src="img/img16.jpg" class=" btn-block">
                                          </div>
                                        <div class="modal-footer">
                                          <h4 class="text-left">Image-type: jpg <br>  Dimension: 1920x1080 px <br>  size: 407 kb</h4>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Downlode orignal</button>
                                        <button type="button" class="btn"><img src="img/heart.png"></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <nav aria-label="...">
                <ul class="pager">
                  <li><a href="home.php">Previous</a></li>
                  <li><a href="home1.php">Next</a></li>
                </ul>
              </nav>
                </div>  
          </div>
      </div>  
            <!-- footer section -->
            <div class="container-fluid"style="margin: 0px;padding: 0px;height: 100%;width: 100%;overflow-x: hidden;">
              <div class="row footer">
                <div class="col-md-12 col-xs-12 text-center">
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