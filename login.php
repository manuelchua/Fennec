<?php
//Includes the header
    include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Fennec: Log In</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
  </head>

<body>
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h4>It’s great to see you continue working on your wonderful self</h4>
            <h1>Welcome Back</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="form">
    <div class="container" style="width:100%;">
      <div class="row">
        <div class="col-lg-12">
          <form id="register" action="inc/login-inc.php" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="username" id="username" placeholder="Your Username or Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="password" name="password" id="password" placeholder="Enter Password"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <a href="signup.php">Don't have an account yet?</a>
                  <button type="submit" name="submit" id="form-submit" class="main-gradient-button">Log In</button>

              <?php
              //Error message for empty inputs
              if (isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                  echo "<p>Fill up all fields!</p>";
                }
              //Error message for wrong username or password
              else if($_GET["error"] == "wronglogin"){
                  echo "<p>Invalid login information!</p>";
                }
              }
              ?>
              
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php
//Includes the footer
    include_once 'footer.php';
?>