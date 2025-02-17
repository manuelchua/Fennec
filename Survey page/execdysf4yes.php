
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

           
        <div class="question" id="excu4" style="display:none">Sometimes meditation helps in calming your brain down to work! I can't offer any deep techniques, but I can offer you help with slowly breathing in and out. 
         <br>
         Would you like me to recommend this? 
          </div>        
        <img class="fennec" src="fennecnotes2.png" width="200 px" height="300 px" style="display:flex">   
        <form method="POST">  
            <button class="choice-text" id="execdysfm" name="execdysfm"><a>Yes</a></button>
            <button class="choice-text" id="gotoobscone"><a href="execdysf7no.php">>No</a></button>
</form>
<?php

if (isset($_POST['execdysfm'])) {
    session_start();
    $currentUserID = $_SESSION["id"];

    require_once '../inc/dbh-inc.php';

    $sqlQuery = "UPDATE users SET exec_med = 'Yes' WHERE id = $currentUserID;";
    mysqli_query($conn, $sqlQuery);
    header("location: execdysf7yes.php");

}
?>
</div>
</div>
        </div>
    </div>
    <script type="text/javascript" src="./quiz.js"></script>

</body>
</html>