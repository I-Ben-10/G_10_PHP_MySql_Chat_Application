<?php 

include_once "config.php";

  $msg_id= mysqli_real_escape_string($conn, $_POST['msg_id']);

  $sql1="DELETE from messages where msg_id='$msg_id'";
  if ($conn->query($sql1)===TRUE) {
   echo "SUCCESS";
 }else{
   echo "FAILED";
 }
    
?>