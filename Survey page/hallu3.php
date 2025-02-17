
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Fennec: Survey</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/lightbox.css">
</head>

<body>

    <!-- Header Start -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- Logo Start -->
                        <a href="../userhome.php" class="logo">
                            <img class=" logo-image" src="../assets\images\fennecLogo.png" alt="Fennec Icon">
                        </a>
                        <!-- Logo End -->
                        <!-- Menu Start -->
                        <!-- Can't utilize include_once method for header because list is different -->
                        <ul class="nav">
                            <li><a href="../userhome.php">Home</a></li>
                            <li><a href='../inc/logout-inc.php' style='padding: auto;'>Log Out</a></li>
                            <li><a href="../userinfo.php"><i class="fa fa-user"></i></a></li>
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

<body>

<section class="main-banner" id="top">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 align-self-center text-center">
        <div class="header-text">
          <h2 class = "fs-1 lh-sm">One of the possibly ways to help auditory hallucinations is by humming. I can help play a song for you to hum along to, or I can just remind you to hum. Would you like me to recommend this?</h2>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-lg-4 align-self-center">
          <div class="main-photo">
            <img src="../assets\images\fennecwriting2.png" class ="img-fluid" alt="">
          </div>
        </div>
      </div>
      <form method = "POST">
      <div class="container">
                <div class="row justify-content-center">
                
                <div class="col-sm text-center m-3">
                    <div class="main-button-gradient choice-text" id="gotoobscone"><a href="hallu5no.php">No</a></div>
                </div>
                <div class="col-sm text-center m-3">
                    <div class=" main-button-gradient choice-text" id="hallum" name= "hallum" ><a href="hallu5yes.php">Yes</a></div>
                </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>





</div>
</div>
        </div>
    </div>
    <script type="text/javascript" src="./quiz.js"></script>

</body>
</html>
<?php

if (isset($_POST['hallum'])) {
    session_start();
    $currentUserID = $_SESSION["id"];
    
    require_once '../inc/dbh-inc.php';

    $sqlQuery = "UPDATE users SET hallu_music = 'Yes' WHERE id = $currentUserID;";
    mysqli_query($conn, $sqlQuery);
    header("location: hallu5yes.php");

}
?>

</div>
</div>
        </div>
    </div>
    <script type="text/javascript" src="./quiz.js"></script>

</body>
</html>