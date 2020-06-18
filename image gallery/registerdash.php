<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register admin Pannel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>

     <div class="background" >
        <div class="container">
          <div class="row">
            <div class=" col-md-4 "></div>
            <div class="   col-md-4 text-center cont">
               <img src="img/mylogo1.png" >
               <h1 class="text-center" style="color: #FDFEFE;font-size: 30px;font-weight: 700;">REGISTER HERE!!</h1>
               <div class="contact">
                 <form action="getdatadash.php" method="post" >
                        <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;&nbsp;</span>
                        <input type="text" placeholder="Enter Your name" class="change" name="dbname" id="name" required=""><br><br><br>
                       <span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;&nbsp;</span>
                        <input type="email" placeholder="Enter Your Email" class="change" name="dbemail" id="name" required=""><br><br><br>
                         <span class="glyphicon glyphicon-eye-open" aria-hidden="true">&nbsp;&nbsp;</span>
                         <input type="password" placeholder="Enter Your password" class="change" name="dbpass" id="name" required=""><br><br><br>
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true">&nbsp;&nbsp;</span>
                        <input type="password" placeholder="Confirm password" class="change" name="dbcpass" id="name" required=""><br><br><br>
                       <input type="submit" name="submit" value="submit" id="butt1" style="padding: 5px 10px;">
                       <!-- <button type="button"  class="btn btn-default" >submit</button> -->
                      </form>
                    </div>
            </div>
            <div class="col-md-4  ">            
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