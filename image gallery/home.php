<?php 
    require_once 'session.php';
	$con = new mysqli('localhost','root','','igimage');
	$query = "SELECT * FROM upi";
	$result = $con->query($query);

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
                  <?php  
                  echo "<div class='row'>";
                    echo "<div class='col-md-12'>";    
                           echo "<div class='row'>"; 
                             $q = 1;
                             
                             while ($data = $result->fetch_object()) {
                               echo "<div class='col-xs-4 col-md-4 pic'>";
                               echo "<a href='#' class='thumbnail image-responsive'>";
                               echo " <img src = 'uploads/$data->Iimage' class='image-responsive text-center image' data-target='#myModal$q' type='button' data-toggle='modal'>";
                               echo "<div class='middle'>";
                               echo "<div class='text'><button><img src='img/downlode.png'></button></div>";
                               echo "<a href='#' class='heart'>";
                               echo " <img src='img/heart.png'>";
                               echo " <span class='badge'>42</span>";
                               echo "</a> ";
                               echo "</div> ";
                               echo "</a>";
                               echo "</div>";

                              echo "<div class='modal fade bs-example-modal-lg' id='myModal$q' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
                              echo " <div class='modal-dialog modal-lg' role='document'>";
                              echo "<div class='modal-content'>";
                              echo "<div class='modal-header'>";
                              echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                              echo "<h4 class='modal-title' id='myModalLabel'>IMAGE PREVIEW</h4>";
                              echo "</div>";
                              echo "<div class='modal-body'>";   
                              echo " <img src = 'uploads/$data->Iimage' class='btn-block' download>";                       
                              echo "</div>";
                              echo " <div class='modal-footer'>";
                             echo "<a href='login.php' type='button' class='btn btn-default'><span class='glyphicon glyphicon-heart' aria-hidden='true'></span>LIKE</a>";
                              echo " <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
                             echo "<div class='dropup'>";
                             echo "<button class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>DOWNLODE<span class='caret'></span></button>";
                             echo " <ul class='dropdown-menu' aria-labelledby='dropdownMenu2'>";
                             echo "<li>SELECT YOUR SUTAIBLE IMG SIZE</li>";
                             echo "<li role='separator' class='divider'></li>";
                             echo "<li> <input type='radio' name='optionsRadios' id='optionsRadios1' value='option1' checked>Large (1920x2880)</li>";
                             echo "<li role='separator' class='divider'></li>";
                             echo "<li> <input type='radio' name='optionsRadios' id='optionsRadios1' value='option1' checked>Medium (1280x1919)</li>";
                             echo "<li role='separator' class='divider'></li>";
                             echo "<li> <input type='radio' name='optionsRadios' id='optionsRadios1' value='option1' checked>Small (640x949)</li>";
                             echo "<li role='separator' class='divider'></li>";
                             echo "<li> <input type='radio'  name='optionsRadios' id='optionsRadios1' value='option1' checked>Custom Size <br><input type='text'class='downme' placeholder='width'><input type='text' class='downme' placeholder='height'></li>";
                             echo "<li role='separator' class='divider'></li>";
                              echo "<li> <a href='downlode.php?id=$data->ig_path'type='button' class='btn btn-primary'>Downlode</a></li>";
                             echo " </ul>";
                              echo "</div>";
                              echo "</div>";
                              echo "</div>";
                              echo "</div>";
                              echo "</div>";
                              
                            
                               $q++;
                             }
                                echo "</div>";
                               echo "</div>";
                               echo "</div>";
                             ?>
                              <?php
         $dbhost = 'localhost:3036';
         $dbuser = 'root';
         $dbpass = 'rootpassword';
         
         $rec_limit = 10;
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         mysql_select_db('test_db');
         
         /* Get total number of records */
         $sql = "SELECT count(emp_id) FROM employee ";
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         $row = mysql_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT emp_id, emp_name, emp_salary ". 
            "FROM employee ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         
         while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
            echo "EMP ID :{$row['emp_id']}  <br> ".
               "EMP NAME : {$row['emp_name']} <br> ".
               EMP SALARY : {$row['emp_salary']} <br> ".
               "--------------------------------<br>";
         }
         
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
         }
         
         mysql_close($conn);
      ?>
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