<?php
include "config.php";
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
?>