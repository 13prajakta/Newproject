<?php 

  $id = $_GET['id'];
  $con= new mysqli('localhost','root','','ig');
  $query="SELECT *FROM image WHERE i_id='$id'";
  $result = $con->query($query);
  $data=$result->fetch_object();

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
  </head>
  <body>
    
      <div class="signupback" >
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-xs-4"></div>
            <div class="col-md-4 col-xs-4 signi">
              <img src="img/mylogo.png" class="img-responsive text-center" alt="Responsive image">
            </div>
            <div class="col-md-4 col-xs-12 signb">
              <form method="post" action="update.php">
                    <input type="hidden" name="id" value="<?php echo $data->i_id ?>">
                   <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name" name="name" value="<?php echo $data->igname ?>">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="contact" placeholder="Contact Number" min="0" maxlength="10" value="<?php echo $data->igcontact ?>">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $data->igemail ?>">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder=" Creat Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php echo $data->igpassword ?>">
                    </div>
                    <div class="form-group">
                      <input type="password" name="rpassword" class="form-control" id="exampleInputPassword1" placeholder=" Re-enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php echo $data->igrpassword ?>">
                    </div>
                     <div class="form-group">
                        <textarea class="form-control" name="address" rows="4" placeholder="Address" required value="<?php echo $data->igaddress ?>"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"style="color: #000;">Gender</label>
                        <div class="radio">
                      <label>
                      <input type="radio" name="Radio" id="blankRadio1" value="option1" aria-label="..." required value="<?php echo $data->igradio ?>">Male
                      </label>
                     <label>
                      <input type="radio" name="Radio" id="blankRadio1" value="option1" aria-label="..."required value="<?php echo $data->igradio ?>">Female
                     </label>
                     <label>
                        <input type="radio" name="Radio" id="blankRadio1" value="option1" aria-label="..."required value="<?php echo $data->igradio ?>">Other
                      </label>
                    </div>
               <!--  </form> -->
                <!-- <form class="form-inline">   -->
                    <div class="form-group">
                      <input type="text" name="valid" class="form-control"  value="<?php echo $data->igvalid ?>" id="exampleInputEmail3" style="border-radius: 0px;width: 30%;">
                      <lable id="exampleInputEmail3"  style="color: #0a4267;font-size: 20px;font-weight: bold;">GAk3$1z</lable>
                    </div>    
                  <!-- </form> -->
               <a href="home.html"><button value="submit" type="submit" class="btn btn-default sub" style="float: none;margin-left: 195px;margin-top: 20px; transition: transform 1s;">Submit</button></a>
              </form>
            </div>   
            <div class="col-md-2"></div> 
          </div>
        </div>
      </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  