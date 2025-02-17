<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Fennec: Change Password</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>

<body>

    <!-- Header Start -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- Logo Start -->
                        <a href="userhome.php" class="logo">
                            <img class=" logo-image" src="assets\images\tempFennecIcon.jpg" alt="Fennec Icon">
                        </a>
                        <!-- Logo End -->
                        <!-- Menu Start -->
                        <!-- Can't utilize include_once method for header because list is different -->
                        <ul class="nav">
                            <li><a href="userhome.php">Home</a></li>
                            <li><a href='inc/logout-inc.php' style='padding: auto;'>Log Out</a></li>
                            <li><a href="userinfo.php"><i class="fa fa-user"></i></a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- Menu End -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- reference the dewsignated user's information fields here as the placeholders -->
    <section class="form">
        <div class="container" style="width:100%;">
            <h2>Change Password</h2>
            <div class="row">
                <div class="col-lg-12">
                    <form id="register" action="inc/changePassword-inc.php" method="post">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-6">
                                    <fieldset>
                                        <p style="margin-bottom: 1em;">New Password</p>
                                        <input type="password" name="newPassword" id="newPass" placeholder="New Password" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <p style="margin-bottom: 1em;">Confirm Password</p>
                                        <input type="password" name="confirmPassword" id="confPass" placeholder="Confirm Password" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                

                                <?php
                                if (isset($_GET["error"])) {
                                    //Error message for mismatched passwords
                                    if ($_GET["error"] == "changePasswordMismatch") {
                                        echo "<p>Passwords do not match!</p>";
                                    }
                                    else if ($_GET["error"] == "isAlreadyPassword") {
                                        echo "<p>This is your current password!</p>";
                                    }
                                    //Error message if something went wrong with the prepared stmt @ inc/functions-inc.php
                                    else if ($_GET["error"] == "stmtfailed") {
                                        echo "<p>Something went wrong, please try again!</p>";
                                    }
                                    //Notifys that user has updated their credentials
                                    else if ($_GET["error"] == "none") {
                                        echo "<p>Password Changed!</p>";
                                    }
                                }
                                ?>

                                <button type="submit" name="submit" id="form-submit" class="main-gradient-button">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    //Includes the footer in the index page
    include_once 'footer.php';
    ?>