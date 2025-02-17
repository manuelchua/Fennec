<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Fennec: Home</title>

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
            <h2>Your Information</h2>
            <div class="row">
                <div class="col-lg-12">
                    <form id="register" action="inc/userInfo-inc.php" method="post">
                        <!-- Action leads to userInfo-inc.php (to be made) -->
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-6">
                                    <fieldset>
                                        <p style="margin-bottom: 1em;">First Name</p>
                                        <input type="text" name="firstName" id="first-name" placeholder="First Name" autocomplete="on">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <p style="margin-bottom: 1em;">Last Name</p>
                                        <input type="text" name="lastName" id="last-name" placeholder="Last Name" autocomplete="on">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <p style="margin-bottom: 1em;">Username</p>
                                        <input type="text" name="username" id="username" placeholder="Username">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <p style="margin-bottom: 1em;">Email</p>
                                        <input type="text" name="userEmail" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <p style="margin-bottom: 1em;">Contact's Name</p>
                                        <input type="text" name="contactName" id="contactName" placeholder="Name of Family Member/Friend">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <p style="margin-bottom: 1em;">Contact's Messaging Link</p>
                                        <input type="text" name="contactLink" id="contactLink" placeholder="Contact's Messaging Link">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <p style="margin-bottom: 1em;">Therapist's Name</p>
                                        <input type="text" name="therapistName" id="proName" placeholder="Name of Therapist">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <p style="margin-bottom: 1em;">Therapist's Messaging Link</p>
                                        <input type="text" name="therapistLink" id="proLink" placeholder="Therapist's Messaging Link">
                                    </fieldset>
                                </div>
                                <a href="changePassword.php">Change Password</a> <br><br>

                                <?php
                                if (isset($_GET["error"])) {
                                    //Error message for empty inputs
                                    if ($_GET["error"] == "emptyinput") {
                                        echo "<p>Fill up all fields!</p>";
                                    }
                                    //Error message for when a username or email is taken
                                    else if ($_GET["error"] == "emailusertaken") {
                                        echo "<p>Username or Email has been taken!</p>";
                                    }
                                    //Error message if something went wrong with the prepared stmt @ inc/functions-inc.php
                                    else if ($_GET["error"] == "stmtfailed") {
                                        echo "<p>Something went wrong, please try again!</p>";
                                    }
                                    //Notifys that user has updated their credentials
                                    else if ($_GET["error"] == "none") {
                                        echo "<p>Credentials updated!</p>";
                                    }
                                }
                                ?>
                                <button type="submit" name="submit" id="form-submit" class="main-gradient-button">Update Data</button>
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