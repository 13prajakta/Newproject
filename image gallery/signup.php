
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
    <script type="text/javascript">
    function reload()
    {
    img = document.getElementById("capt");
    img.src="captcha-image.php?rand_number=" + Math.random();
    }
    </script>

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
              <form action="getdata.php" method="post">
                   <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name" name="name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="contact" placeholder="Contact Number" min="0" maxlength="10">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder=" Creat Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </div>
                    <div class="form-group">
                      <input type="password" name="rpassword" class="form-control" id="exampleInputPassword1" placeholder=" Re-enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </div>
                     <div class="form-group">
                        <textarea class="form-control" name="address" rows="4" placeholder="Address" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"style="color: #000;">Gender</label>
                        <div class="radio">
                      <label>
                      <input type="radio" name="Radio" id="blankRadio1" value="male" aria-label="..." required>Male
                      </label>
                     <label>
                      <input type="radio" name="Radio" id="blankRadio1" value="female" aria-label="..."required>Female
                     </label>
                     <label>
                        <input type="radio" name="Radio" id="blankRadio1" value="Other" aria-label="..."required>Other
                      </label>
                    </div>
               <!--  </form> -->
                <!-- <form class="form-inline">   -->
                    <form type=post action=captcha-demo-data.php>
                    <input type=text name=t1 name="igvalid" required="">
                    <img src=captcha-image.php id="capt">
                    <input type=button onClick=reload(); required="" value='Reload image' style="background-color: #D6EAF8;border: none;padding: 4px;margin-top: 10px;"><br><br>
                    <a href="home.php"><input type=submit value='SUBMIT' class="btn btn-default sub" style="float: none;margin-left: 195px;margin-top: 20px; transition: transform 1s;"></a>
               <a href="login.php" style="float: right;">already have an account?</a>
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