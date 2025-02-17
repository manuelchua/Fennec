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
  <!-- Header End -->

  <!-- whatever else in here -->
<form method="POST">          
<section class="form">
        <div class="container" style="width:100%;">
        <h1>Executive Dysfunction</h1>
        <?php
session_start();
$currentUserID = $_SESSION["id"];

require_once '../inc/dbh-inc.php';
//Change exec_steps to other methods
$sqlQuery = "SELECT exec_steps FROM users WHERE id = $currentUserID;";
$checkVal;

$resultsData = mysqli_query($conn, $sqlQuery);


while ($row = mysqli_fetch_array($resultsData)){
        $checkVal = $row["exec_steps"]; //Change exec_steps to other methods
}

if ($checkVal == "Yes"){
      echo '<div class="main-button-gradient">
      <div><a href="../copingmechanism/execusteps1.php">Break Into Steps</a></div>
        </div>';
} else {

}
?>







<?php
 
$currentUserID = $_SESSION["id"];

require_once '../inc/dbh-inc.php';
//Change exec_steps to other methods
$sqlQuery = "SELECT exec_med FROM users WHERE id = $currentUserID;";
$checkVal;

$resultsData = mysqli_query($conn, $sqlQuery);


while ($row = mysqli_fetch_array($resultsData)){
        $checkVal = $row["exec_med"]; //Change exec_steps to other methods
}

if ($checkVal == "Yes"){
   echo '<div class="main-button-gradient">
      <div><a href="../copingmechanism/meditationMethod.php">Meditation</a></div>
        </div>';
} else {
 
}

?>
   

        <h1>Hallucination</h1>
        <?php
 
 $currentUserID = $_SESSION["id"];
 
 require_once '../inc/dbh-inc.php';
 //Change exec_steps to other methods
 $sqlQuery = "SELECT hallu_music FROM users WHERE id = $currentUserID;";
 $checkVal;
 
 $resultsData = mysqli_query($conn, $sqlQuery);
 
 
 while ($row = mysqli_fetch_array($resultsData)){
         $checkVal = $row["hallu_music"]; //Change exec_steps to other methods
 }
 
 if ($checkVal == "Yes"){
     echo '<div class="main-button-gradient">
     <div><a href="../copingmechanism/MusicMethod.php">Music</a></div>
       </div>';
 } else {
         
 }
 
 
 ?>
 
 <?php
  
 $currentUserID = $_SESSION["id"];
 
 require_once '../inc/dbh-inc.php';
 //Change exec_steps to other methods
 $sqlQuery = "SELECT hallu_jj  FROM users WHERE id = $currentUserID;";
 $checkVal;
 
 $resultsData = mysqli_query($conn, $sqlQuery);
 
 
 while ($row = mysqli_fetch_array($resultsData)){
         $checkVal = $row["hallu_jj"]; //Change exec_steps to other methods
 }
 
 if ($checkVal == "Yes"){
   echo '<div class="main-button-gradient">
   <div><a href="../copingmechanism/jjMethod.php">Exercise</a></div>
     </div>';
  
 } else {
          
 }
 
 
 
 ?>



        <h1>OCD</h1>

        <?php
 
$currentUserID = $_SESSION["id"];

require_once '../inc/dbh-inc.php';
//Change exec_steps to other methods
$sqlQuery = "SELECT ocd_music  FROM users WHERE id = $currentUserID;";
$checkVal;

$resultsData = mysqli_query($conn, $sqlQuery);


while ($row = mysqli_fetch_array($resultsData)){
        $checkVal = $row["ocd_music"]; //Change exec_steps to other methods
}

if ($checkVal == "Yes"){
       echo '<div class="main-button-gradient">
       <div><a href="../copingmechanism/jjMethod.php">Exercise</a></div>
         </div>';
} else {
         
}


?>


<?php
 
$currentUserID = $_SESSION["id"];

require_once '../inc/dbh-inc.php';
//Change exec_steps to other methods
$sqlQuery = "SELECT ocd_jj  FROM users WHERE id = $currentUserID;";
$checkVal;

$resultsData = mysqli_query($conn, $sqlQuery);


while ($row = mysqli_fetch_array($resultsData)){
        $checkVal = $row["ocd_jj"]; //Change exec_steps to other methods
}

if ($checkVal == "Yes"){
      echo '<div class="main-button-gradient">
      <div><a href="../copingmechanism/musicMethod.php">music Method</a></div>
        </div>';
} else {
      
}




?>
</form>
                </div>
            </div>
        </div>
    </section>


 

















  </section>








<?php
  //Includes the footer in the index page
  include_once 'footer.php';
  ?>
</body>
</html>