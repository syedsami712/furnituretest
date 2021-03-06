<?php session_start();
  
  if(isset($_GET['status'])){
    if($_GET['status'] === "loggedout") {
      $_SESSION['username'] ="";
    }
  }

  include 'GlobalVariables.php';
  
 ?>
<html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Furniture Bazaar - Login</title>
<meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet-skin2.css" />
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Droid+Sans' type='text/css'>
<!-- CSS Part End-->
</head>
<body>
<?php include "header.php"; ?>
<div id="container">
    <div class="container">
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <br>
          <h1 class="title">Account Login</h1>
          <div class="row">
            <div class="col-sm-6">
              <h2 class="subtitle">New Customer</h2>
              <p><strong>Register Account</strong></p>
              <p>By Creating an Account you will be able to save carts and create a token for Order Replacements and Cancellation</p>
              <a href="register.php" class="btn btn-primary">Continue</a> </div>
              <form method="POST" action="?">
            <div class="col-sm-6">
              <h2 class="subtitle">Returning Customer</h2>
              <p><strong>I am a returning customer</strong></p>
                <div class="form-group">
                  <label class="control-label" for="input-email">E-Mail Address</label>
                  <input type="email" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" required />
                </div>
                <div class="form-group">
                  <label class="control-label" for="input-password">Password</label>
                  <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" required />
                  <br />
                  <a href="#">Forgotten Password</a></div>
                <input type="submit" value="Login" name="submitForm" class="btn btn-primary" style="margin-bottom: 16px;" />
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include "footer.php" ?>

<?php 
// php section 
include 'functions/dbconfig.php';
if(isset($_POST['submitForm'])){

  if(!empty($_POST['email']) && !empty($_POST['password'])) {
      
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $row_count=0;
    $firstName = "";
    $uid = 0 ;
    $result = $conn->prepare("Select count(*) as row_count, Fname ,uid from customers where email=? AND password=?");
    $result->bind_param("ss", $email, $password);
    $result->execute();
    $result->store_result();
    $result->bind_result($row_count, $firstName,$uid);
    $result->fetch();

    echo '<pre>';
      echo md5($_POST['password']);
    echo '</pre>';
        if($row_count > 0) {
        $_SESSION["username"] = $firstName;
        $_SESSION["userid"] = $uid ;
         print('<script>
                         window.location.href= "http://localhost:8012/FurnitureBazaar/index.php";
                          </script>');
    }
    else {
       print('<script>
                          function myFunction() {
                          alert("Please Check your email or password");
                          }
                          myFunction();
                          </script>');
    }


  }else {
    print('<script>
                          function myFunction() {
                          alert("please Enter all the details");
                          }
                          myFunction();
                          </script>');
  }
}

?>
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- JS Part End-->
</body>
</html>