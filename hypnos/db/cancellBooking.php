<?php
session_start();
include('db.php');
$data    = array();                                         
$id  = $_GET['id'];                                  

$qryToDelete = "SELECT * FROM booking WHERE id='$id'"; 
$res = mysqli_query($con,$qryToDelete);
if($res)
{
    if(mysqli_num_rows($res)>0)
    {
       $row = mysqli_fetch_array($res);
       $row['start_date'];
       $now = time();
       $startDate = $row['start_date_num']/1000;
       $datediff = $now - $startDate;
       $nights          = round($datediff / (60 * 60 * 24));
       if($nights<3)
       {
           $data=333;

       }
       else
       {
           $qryToCencell = "UPDATE booking SET status='CANCELLED' WHERE id='$id'";
           if(mysqli_query($con,$qryToCencell))
           {
               $data=786;
           }
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
  
