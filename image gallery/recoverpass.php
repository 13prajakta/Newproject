<?php 

  $r_id = $_GET['rid'];
  $con= new mysqli('localhost','root','','ig');
  $query="SELECT *FROM image WHERE i_id='$r_id'";
  $result = $con->query($query);
  $data=$result->fetch_object();

 ?>
<!DOCTYPE html>
<html  lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recover password</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid " style=" margin:0px;padding: 0px;height: 100%;width: 100%;overflow-x: hidden;">
        <div class="reback">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 forc1">
              <form method="post" action="updater.php">
                <input type="hidden" name="rid" value="<?php echo $data->i_id ?>">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color: #1B4F72 ">New Password</label>
                  <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="color: #1B4F72 ">retype password</label>
                  <input type="repassword" class="form-control" id="exampleInputEmail1" placeholder="Re Enter password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
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