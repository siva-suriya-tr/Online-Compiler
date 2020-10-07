<?php
    session_start();
    require 'dbconnect.php';
    if (!isset($_SESSION['Users']) != "")
    {
        exit;
    }
    $query="TRUNCATE TABLE `prob1`";
    mysqli_query($scon,$query );
    header("Location: adminpage.php");
 ?>