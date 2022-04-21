<?php
session_start();
include('db.php');
$data    = array();                                         
$dishId  = $_GET['id'];                                  

$qryToDelete = "SELECT * FROM user WHERE id='$dishId'";  
$res = mysqli_query($con,$qryToDelete);
if($res)
{
    if(mysqli_num_rows($res)>0)
    {
       while( $row = mysqli_fetch_array($res) )
       {
              array_push($data,$row);
       } 
    } 
}
else
{
    $data=420;
}


header('content-type: application/json');
echo json_encode($data);
?>
  
