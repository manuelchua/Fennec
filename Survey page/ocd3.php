
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="./quiz.css">
    <link rel="stylesheet" href="./start.css">
</head>
<body>
    <div class="container">    
        <div id="game" class="justify-center flex-column">


        <div class="question" id="ocd3">Some people find it helpful to move around. What I offer is us doing jumping jacks together! <br>
            Would you like me to reccomend this?  </div>           
        <img class="fennec" src="fennecnotes2.png" width="200 px" height="300 px" style="display:flex"> 
            <form method="POST">     
        <button class="choice-text" id="ocdjj" name = ocdjj><a>Yes</a></button>
                <button  class="choice-text" id="gotoobscone"><a href="ocd4no.php">>No</a></button>

<?php

if (isset($_POST['ocdjj'])) {
    session_start();
    $currentUserID = $_SESSION["id"];

    require_once '../inc/dbh-inc.php';

    $sqlQuery = "UPDATE users SET ocd_jj  = 'Yes' WHERE id = $currentUserID;";
    mysqli_query($conn, $sqlQuery);
    header("location: ocd4yes.php");

}
?>
</div>
</div>
        </div>
    </div>
    <script type="text/javascript" src="./quiz.js"></script>

</body>
</html>