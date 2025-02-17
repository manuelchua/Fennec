
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

           
        <div class="question" id="excu3" style="display:none">One of the ways people cope with executive dysfunction is by breaking a task down in steps. For example, the idea of washing the dishes can seem daunting, but I can help you walk through breaking the steps down. 
         <br>
         Would you like me to recommend this? 
          </div>        
        <img class="fennec" src="fennecnotes2.png" width="200 px" height="300 px" style="display:flex">    
                 <form method="POST">     
 
        <button class="choice-text" id="execdysfs" name="execdysfs"><a>Yes</a></button>
                <button  class="choice-text" id="gotoobscone"><a href="execdysf4no.php">>No</a></button>
<?php

if (isset($_POST['execdysfs'])) {
    session_start();
    $currentUserID = $_SESSION["id"];

    require_once '../inc/dbh-inc.php';

    $sqlQuery = "UPDATE users SET exec_steps = 'Yes' WHERE id = $currentUserID;";
    mysqli_query($conn, $sqlQuery);
    header("location: execdysf4yes.php");

}
?>
</div>
</div>
        </div>
    </div>
    <script type="text/javascript" src="./quiz.js"></script>

</body>
</html>