<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login here</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
  </head>
  <body>
    
      <div class="loginback">
        <div class="container">
          <div class="row  text-center">
            <div class="col-md-4"></div>
            <div class="col-md-4 myl">
              <img src="img/mylogo.png">
              <form class="log" method="post" action="check.php">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Id or Email"  name="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" >
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember" /> Remember Me
                  </label>
                </div>
                <div class="form-group">
                  <a href="forgot.php" class="help-block">Forgotten account?</a>
                </div>
                <button value="submit" type="submit" class="btn btn-default" href="home.php">LOGIN</button>
                <span class="log1" ><a type="submit" class="btn btn-default" href="signup.php">SIGNUP</a></span>
                <div class="form-group">
                 <a href="https://www.facebook.com/"><img src="img/face.png"></a>
                 <a href="https://www.google.com/gmail"><img src="img/g+.png"></a>   
                </div>
              </form>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  