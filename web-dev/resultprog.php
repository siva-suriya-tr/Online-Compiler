<?php
session_start();
require('dbconnect.php');
if ( !isset($_SESSION['Users'])!="" ) 
{
            header("Location: logout.php");
}
$username = $_SESSION['Users'];
$res=mysqli_query($scon,"SELECT * FROM scores WHERE username = '" . $username . "'");
$row=mysqli_fetch_array($res);       
$score = $row['score']; 
?>
<html>
   <head>
      <title>Corynack</title>
      <link rel="icon" type="image/png" href="icons/fire.png">
       <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="css/w3.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link href="css/all.css" rel="stylesheet">
      <link href="css/w3-theme-red.css" rel="stylesheet">
      <style>
         table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 100%;
         }
         td, th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
         }
         tr:nth-child(even) {
         background-color: #dddddd;
         }
      </style>
   </head>
   <body class="w3-theme-l5 (w3-theme-light)">
      <div class="w3-container w3-mobile" style="padding:0;">
      <div class="w3-bar w3-theme-d4 w3-mobile" style="padding:0">
         <div class="w3-dropdown-hover">
            <button class="w3-left w3-theme-d3 w3-padding w3-button w3-hover-red"><i class="fas fa-laptop-code"></i>  PROBLEMS </button>
            <div id="navbar" class="w3-dropdown-content w3-bar-block w3-card-4"  style="width: 100%; top: 38;">
               
            </div>
         </div>
          <a href="logout.php"><div class="w3-right w3-theme-d3 w3-padding w3-hover-red"><img src="https://image.freepik.com/free-icon/power_318-10548.jpg" class="w3-circle" style="height:24px; width:auto;" ></div></a>
         
      </div>
      <!---- BEginning of main window-->
      <div class="w3-cell-row w3-mobile" style="padding:0;">
      <div class="w3-container w3-theme-l5 (w3-theme-light) w3-cell w3-mobile">
         <div class="w3-row">
            <!-- Left Column -->
            <div class="w3-col m3 w3-padding w3-mobile"  style="margin-top:20px;">
               <!-- Profile -->
               <div class="w3-card-2 w3-round w3-white w3-border w3-hover-border-red w3-mobile">
                  <div class="w3-container w3-mobile">
                     <h4 class="w3-center">My Profile</h4>
                     <p class="w3-center"><img src="https://cdn3.iconfinder.com/data/icons/rcons-user-action/32/boy-512.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                     <hr>
                     <p><i class="fas fa-pencil-alt fa-fw w3-margin-right w3-text-theme"></i> <?php echo ($_SESSION['Users'])?></p>
                     <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Chennai, TN</p>
                     <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1998</p>
                  </div>
               </div>
               <br>
               <!-- Accordion -->
               <!-- Alert Box -->
               <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-hover-border-red w3-theme-border w3-margin-bottom w3-hide-small w3-mobile">
                  <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright w3-hover-red">
                  <i class="fa fa-remove"></i>
                  </span>
                  <p class="w3-center"><strong><i class="fas fa-laptop-code fa-2x" style="color: #c5170a;"></i> Welcome! <i class="fas fa-laptop-code fa-2x" style="color: #c5170a;"></i></strong></p>
                  <hr style="border-color: red;">
                  <p class="w3-center">This is a platform to develop your programming skills.</p>
               </div>
            </div>
            <div class="w3-container w3-theme-l5 (w3-theme-light) w3-cell w3-mobile" style="padding-top:10px;">
               <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-border w3-border-red  w3-mobile" >
                  <br>      
                   <div class="w3-card w3-border w3-hover-border-red w3-centre w3-round-large w3-padding">
                       <div class="w3-margin w3-padding w3-red w3-round-large">
                     <center><B>Results</B></center>
                   </div>
                      <br>
                      
                      <p><center> Your Score : <b><?php echo ($score); ?></b> out of a possible 30 points! </center></p> 
                       
                   
                   </div>
                   
                  <div class="w3-row-padding w3-center" style="margin:0px 0px">
                     <button class="w3-theme-d1 w3-btn w3-margin-bottom w3-red w3-margin-top w3-padding w3-round" style="width:auto;" type="button" onclick="javascript:history.go(-1)"><center><b>Try Again!</b></center></button>
                      <a href="logout.php"><button class="w3-btn w3-margin-bottom w3-blue w3-margin-top w3-padding w3-round" style="width:auto;"><center><b>Logout & Exit</b></center></button></a>
                  </div>
               </div>
            </div>
            <div class="w3-container w3-theme-l5 (w3-theme-light) w3-padding w3-cell w3-mobile" style="width: 40%;">
               <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-hover-border-red w3-margin-bottom w3-hide-small w3-mobile" style="margin-top:20px;">
                  <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright w3-hover-red">
                  <i class="fa fa-remove"></i>
                  </span>
                  <p class="w3-center"><strong><img src="icons/googleflip.png"> Keep Learning! <img src="icons/google.png"></strong></p>
                  <hr style="border-color: red;">
                  <p class="w3-center">Innovation never ceases to end.</p>
                  <p class="w3-center">Use the internet to stay up-to-date or to re-learn well know concepts. </p>
                  <p class="w3-center"></p>
               </div>
               
            </div>
         </div>
      </div>
          </div>
       </div>
       <br>
      <!-- Footer -->
      <footer class="w3-container w3-theme-d5">
         <p>Powered by the CSE Dept</p>
      </footer>
   </body>
 
</html>