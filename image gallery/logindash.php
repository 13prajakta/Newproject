
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login Admin Pannel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>
     <div class="background1" >
        <div class="container">
          <div class="row">
            <div class=" col-sm-4 col-md-4 "></div>
            <div class="col-sm-4 col-md-4 ">
               <div class="contact1">
                 <form method="post" action="checkdash.php" >
                  <img src="img/user.png" class="img-circle">
                  <h3 style="color: white;padding-top: 70px;padding-bottom: 20px;" class="text-center">Get Started!!</h3>

                      <div class="form-group">
                        <label for="exampleInputEmail1" id="label">User Id</label><br>
                        <input type="email" placeholder="Enter Your Email" class="change" name="dbemail"  id="name2" required=""><br><br>
                      </div>

                         <div class="form-group">
                        <label for="exampleInputEmail1" id="label">Password</label><br>
                          <input type="password" placeholder="Enter Your password" class="change" name="dbpass"  id="name2" required=""><br><br>
                      </div>     

                      <!--  <button type="button" value="submit" class="btn btn-default text-center" id="butt2" >submit</button><br> -->
                      <input type="submit" name="submit" value="submit" id="butt2" style="padding: 10px 10px;">

                      <a href="" id="a1">Lost password?</a><br>

                      <a href="registerdash.html" id="a2">Sign Up Here Before You Login!</a>
                      </form>
                    </div>
            </div>
            <div class="col-sm-4 col-md-4">            
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