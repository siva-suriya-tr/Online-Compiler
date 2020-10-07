<?php
session_start();
require 'dbconnect.php';
if (!isset($_SESSION['Users']) != "")
{
exit;
}
if (!isset($_SESSION['prob'])) {
    $_SESSION['prob'] = NULL;
}
if (!isset($name)) {
    $name = NULL;
}
if($_SESSION['prob']==1)    
    {
$query   = mysqli_query($scon, "SELECT * FROM scores WHERE username='" . $_SESSION['Users'] . "'");
if (!$query)    //row iruka illaya check
{
die('Error: ' . mysqli_error($con));
}
if (mysqli_num_rows($query) > 0) //already row exist aana change panradhuku
{
$name = $_SESSION['Users'];
$res  = mysqli_query($scon, "SELECT * FROM scores WHERE username='$name'");
$row  = mysqli_fetch_array($res);
$s   = $row['score'];
$us   = $row['username'];
if($s==0)
{
$query1 = "REPLACE INTO scores (username,score) VALUES('" . $us . "','" . $_SESSION['pscore'] . "');";
mysqli_query($scon, $query1);
}
else if (($s!=0) && ($_SESSION['pscore']>$s))
{
$query1 = "REPLACE INTO scores (username,score) VALUES('" . $us . "','" . $_SESSION['pscore'] . "');";
mysqli_query($scon, $query1); 
}
else if (($s!=0) && ($_SESSION['pscore']<$s))
{
$query = "REPLACE INTO scores (username,score) VALUES('" . $us . "','" . $s . "');";
mysqli_query($scon, $query); 
}
}
else //putham pudhu row set panradhuku
{
$query = "REPLACE INTO scores (username,score) VALUES('" . $_SESSION['Users'] . "','" . $_SESSION['pscore'] . "');";
mysqli_query($scon, $query);
}
unset($_SESSION['pscore']);
}

if($_SESSION['prob']==1)
{
    $res  = mysqli_query($scon, "SELECT * FROM scores WHERE username='$name'");
    $row  = mysqli_fetch_array($res);
    $p1   = $row['prob1'];
    $_SESSION['currentscore']=$p1;
            
}
unset($_SESSION['prob']);
?>