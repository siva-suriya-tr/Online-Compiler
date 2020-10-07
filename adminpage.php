<?php
 session_start();
 
  // if session is not set this will redirect to login page
 if(!isset($_SESSION['admin'])){
  header("Location: adminlogin.php");
  exit;
 }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Corynack</title>
    <link rel="icon" type="image/png" href="icons/fire.png">
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
          </head>
<body>
   
    <div class="container"><br>
            <div class="text-right">
                <a href="adminlogout.php"><button class="btn pull-right btn-danger">Logout</button></a>  
            </div>
            <br>
            <br>
   </div>
    <div class="w3-container w3-quarter w3-center w3-border" style="width:100%;">
    <center>
    <div style="width:50%;">
    <form method="POST" action="prob1upload.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Upload the Excel File which has the data for the Program</label><br><br>
                        <input type="file" name="file" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="Submit" class="btn btn-block btn-success">Upload</button>
                    <a href="clear_prob1.php"><div class="w3-button w3-padding w3-margin w3-red w3-round">Delete exisiting question</div></a>
                </div>
    </form>
    

    </div>
    </center>
    </div>

   <br>
   <br>
   <br><br>
   <br>
   <center>
<div class="btn">

    <h3 class="alert-link">View the <a href="viewallscores.php"><strong>scores of the candidates</strong></a></h3>

</div>
<br>
<br>
</center>
</body>
</html>