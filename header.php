<?php

//Starts session if user Logs in
session_start();

//Stuff shown in the header if user is logged in (userhome.php)
if (isset($_SESSION["username"])) {
        /* -- Added on -- */
        echo "
        <!DOCTYPE html>
        <html lang='en'>

        <head>

        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta name='description' content=''>
        <meta name='author' content=''>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900' rel='stylesheet'>

        <title>Fennec: Home</title>

        <link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
        <link rel='stylesheet' href='assets/css/fontawesome.css'>
        <link rel='stylesheet' href='assets/css/main.css'>
        <link rel='stylesheet' href='assets/css/owl.css'>
        <link rel='stylesheet' href='assets/css/lightbox.css'>
        </head>

        <body>

        <header class='header-area header-sticky'>
        <div class='container'>
        <div class='row'>
        <div class='col-12'>
        <nav class='main-nav'>
        ";
/* -- Added on -- */
echo "
        <a href='userhome.php' class='logo'> 
          <img class=' logo-image' src='assets/images/fennecLogo.png' alt='Fennec Icon'>
        </a>
        <ul class='nav'>
        "; //Change href if needed

/* Main content for header. Change if needed */
echo "<li class='scroll-to-section'><a href='#top' class='active'>Home</a></li>"; //Can be removed to include userinfo.php
// echo "<li class='scroll-to-section'><a href='execusteps1.php'>Survey</a></li>";
echo "<li><a href='Survey page/survey1.php'>Survey</a></li>"; //Link to .php file
echo "<li><a href='Survey page/Fennec_Home.php'>Methods</a></li>"; //Link to .php file
echo "<li class='scroll-to-section'><a href='#articles'>Motivation</a></li>"; //Link to .php file
echo "<li class='scroll-to-section'><a href='#techniques'>Techniques</a></li>"; //Link to .php file
echo "<li><a href='inc/logout-inc.php' style='padding: auto;'>Log Out</a></li>"; 
echo "<li><a href='userinfo.php'><i class='fa fa-user'></i></a></li>";

/* Main content for header. Change if needed */

/* -- Added on -- */
echo "
        </ul>        
         <a class='menu-trigger'>
          <span>Menu</span>
        </a>
        </nav>
        </div>
        </div>
        </div>
        </header>
        ";
/* -- Added on -- */
} 

//Stuff shown in the header if user is NOT logged in (index.php)
else {
    /* -- Added on -- */
    echo "
                        <!DOCTYPE html>
                        <html lang='en'>

                        <head>

                        <meta charset='utf-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                        <meta name='description' content=''>
                        <meta name='author' content=''>
                        <link href='https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900' rel='stylesheet'>

                        <title>Fennec: Mental Health Companion</title>

                        <link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
                        <link rel='stylesheet' href='assets/css/fontawesome.css'>
                        <link rel='stylesheet' href='assets/css/main.css'>
                        <link rel='stylesheet' href='assets/css/owl.css'>
                        <link rel='stylesheet' href='assets/css/lightbox.css'>
                        </head>

                        <body>

                        <header class='header-area header-sticky'>
                        <div class='container'>
                        <div class='row'>
                        <div class='col-12'>
                        <nav class='main-nav'>
                        ";
    /* -- Added on -- */
    echo "
                        <a href='index.php' class='logo'> 
                          <img class=' logo-image' src='assets/images/fennecLogo.png' alt='Fennec Icon'>
                        </a>
                        <ul class='nav'>
                        "; //Change href if needed

    /* Main content for header. Change if needed */
    echo "<li><a href='login.php' style='padding: auto;'>Log In</a></li>";
    echo "<li><a href='signup.php'>Sign Up</a></li>";
    /* Main content for header. Change if needed */

    /* -- Added on -- */
    echo "
                        </ul>        
                         <a class='menu-trigger'>
                          <span>Menu</span>
                        </a>
                        </nav>
                        </div>
                        </div>
                        </div>
                        </header>
                        ";
    /* -- Added on -- */
}
?>