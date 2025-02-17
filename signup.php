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

    <title>Fennec: Join Us</title>

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
            <h4>Join us today and overcome your fears</h4>
            <h1>Ready to Take Action?</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="form">
    <div class="container" style="width:100%;">
      <div class="row">
        <div class="col-lg-12">
          <form id="register" action="inc/signup-inc.php" method="post">
            <div class="row">
              <div class="row">
                <div class="col-lg-6">
                  <fieldset>
                    <input type="text" name="firstName" id="first-name" placeholder="First Name" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <input type="text" name="lastName" id="last-name" placeholder="Last Name" autocomplete="on" required>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="username" id="username" placeholder="Username" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="userEmail" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="password" name="password" id="password" placeholder="Create Password"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="password" name="confirmPassword" id="password" placeholder="Confirm Password"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <a href="login.php">Already have an account?</a>
                  <button type="submit" name="submit" id="form-submit" class="main-gradient-button">Register</button>
                </fieldset>

      <?php
        if (isset($_GET["error"])){
        //Error message for empty inputs
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill up all fields!</p>";
        }
        //Error message for password mismatch
        else if($_GET["error"] == "passwordmismatch"){
            echo "<p>Passwords do not match!</p>";
        }
        //Error message for when a username or email is taken
        else if($_GET["error"] == "emailusertaken"){
            echo "<p>Username or Email has been taken!</p>";
        }
        //Error message if something went wrong with the prepared stmt @ inc/functions-inc.php
        else if($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong, please try again!</p>";
        }
        //Notifying that the user has signed up
        else if($_GET["error"] == "none"){
            echo "<p>Registration complete!</p>";
        }
    }
?>

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