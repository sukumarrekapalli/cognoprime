<?php 
include 'config.php';
if($dbconnect){
  echo " connected";
}
else{
  echo " not connected";
}

$query = "select * from questions_table";
$result=mysqli_query($dbconnect,$query);
$table = $result->fetch_array();
echo print_r($table);
?>