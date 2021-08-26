<?php
include "config.php";
session_start();

$action= mysqli_real_escape_string($conn, $_POST['action']);

if ($action === 'GET_USERS') {

		$sql3 = "SELECT * from users where is_group_status is NULL";
		$result3 = $conn->query($sql3);

		$result  = array();
		while ($row3 = $result3->fetch_assoc()) {
			$user_id = $row3['user_id'];
			$unique_id = $row3['unique_id'];
			$fname = $row3['fname'];
			$lname = $row3['lname'];
			$email = $row3['email'];
        	
        	$obj['id'] = $unique_id;
            $obj['name'] = $fname." ".$lname;
			$obj['email'] = $email;
        	array_push($result,$obj);
            //$result[] = $obj;
		}

    header('Content-type: text/json');              //3
    header('Content-type: application/json');
    echo json_encode($result);


}elseif ($action === 'GET_GROUPS') {

		$sql3 = "SELECT * from users where is_group_status is not NULL";
		$result3 = $conn->query($sql3);

		$result  = array();
		while ($row3 = $result3->fetch_assoc()) {
			$user_id = $row3['user_id'];
			$unique_id = $row3['unique_id'];
			$fname = $row3['fname'];
			$lname = $row3['lname'];
			$email = $row3['email'];
        	
        	$obj['id'] = $unique_id;
            $obj['name'] = $fname." ".$lname;
        	array_push($result,$obj);
            //$result[] = $obj;
		}

    header('Content-type: text/json');              //3
    header('Content-type: application/json');
    echo json_encode($result);


}elseif ($action === 'GET_MESSAGES') {

	$user_id= mysqli_real_escape_string($conn, $_POST['user_id']);

		$sql3 = "SELECT * from messages where outgoing_msg_id='$user_id' or incoming_msg_id='$user_id'";
		$result3 = $conn->query($sql3);

		$result  = array();
		while ($row3 = $result3->fetch_assoc()) {
			$msg_id = $row3['msg_id'];
			$msg = $row3['msg'];
        	
        	$obj['msg_id'] = $msg_id;
            $obj['msg'] = $msg;
        	array_push($result,$obj);
            //$result[] = $obj;
		}

    header('Content-type: text/json');              //3
    header('Content-type: application/json');
    echo json_encode($result);


}elseif ($action === 'SEND_MESSAGE') {

	$sender_id= mysqli_real_escape_string($conn, $_POST['sender_id']);
	$receiver_id= mysqli_real_escape_string($conn, $_POST['receiver_id']);
	$msg= mysqli_real_escape_string($conn, $_POST['message']);
	$id = rand(30,200);

    $sql1="INSERT INTO messages set msg_id='$id',incoming_msg_id='$receiver_id',outgoing_msg_id='$sender_id',msg='$msg'";
	$result  = array();
    if ($conn->query($sql1)===TRUE) {
       		$obj['status'] = "Message Sent";
        	array_push($result,$obj);
   	}else{
      		$obj['status'] = "Message Failed";
        	array_push($result,$obj);
   	}

    header('Content-type: text/json');              //3
    header('Content-type: application/json');
    echo json_encode($result);


}else{
	echo "INVALID_ACTION";
}