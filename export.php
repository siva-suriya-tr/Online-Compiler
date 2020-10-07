<?php  
session_start();

 require 'dbconnect.php';
   
//mysqli_select_db($scon, 'EmployeeDB');  
  
$setSql = "SELECT * FROM scores";  
$setRec = mysqli_query($scon, $setSql);  
  
$columnHeader = '';  
$columnHeader = "User Name" . "\t" ."Programming Total Score" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Student_Score_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  