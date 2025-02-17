
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


        <div class="question" id="ocd4">Other people can find it helpful to hum along to something. I can help play a song for you to hum along to, or I can just remind you to hum. <br>Would you like me to reccomend this? 
            </div>           
        <img class="fennec" src="fennecnotes2.png" width="200 px" height="300 px" style="display:flex">     

         <form method="POST">  
        <button class="choice-text" id="ocd" name="ocdm"><a>Yes</a></button>
                <button  class="choice-text" id="gotoobscone"><a href="ocd5no.php">>No</a></button>


<?php

if (isset($_POST['ocdm'])) {
    session_start();
    $currentUserID = $_SESSION["id"];

        require_once '../inc/dbh-inc.php';

    $sqlQuery = "UPDATE users SET ocd_music  = 'Yes' WHERE id = $currentUserID;";
    mysqli_query($conn, $sqlQuery);
    header("location: ocd5yes.php");

}

?>

</div>
</div>
        </div>
    </div>
    <script type="text/javascript" src="./quiz.js"></script>

</body>
</html>