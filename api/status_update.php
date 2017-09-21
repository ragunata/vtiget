<?php
	session_start();
	$first_login = '';
	include('../own_config.php');
	$status = $_POST['status'];
	$status = explode('#', $status);
	$status_id = $status[0];
	$status_val = "'".$status[1]."'";
	$userid= $_SESSION['authenticated_user_id'];
	if(isset($_SESSION['authenticated_user_status'])){
		$first_login = 'yes';
	}
	$_SESSION['authenticated_user_status'] = $status_val;
	$session_id = session_id();
	/* User Table status update */
	$result = $mysqli->query("UPDATE `vtiger_users` set user_status_val= $status_val, user_status = $status_id WHERE id = $userid");
	if($result &&  !empty($first_login)){		
		/* Select Before status */
		$cDateTime = date('Y-m-d H:i:s');
		$cDate = date('Y-m-d');
		$usersStatusResult = $mysqli->query(
					"SELECT * from `user_status_history` where uid = $userid and DATE(create_date) = '".$cDate."' ORDER BY id desc LIMIT 1") or die($mysqli_fetch_array->error());
		$row1 = mysqli_fetch_array($usersStatusResult);
		/* user_status_history Table create new entry */
		$result = $mysqli->query("INSERT INTO `user_status_history` ( `uid`, `status_id`, `create_date`, `last_updated`, `duration`, `session_id`) VALUES ( $userid, $status_id, '".$cDateTime."', '".$cDateTime."', 0, '".$session_id."')");	
		if($row1){
		 	$create_date = $row1['create_date'];
		 	$user_status_id = $row1['status_id'];
			$datetime1 = strtotime($create_date);
			$datetime2 = strtotime($cDateTime);
			$interval  = abs($datetime2 - $datetime1);
			$minutes   = round($interval / 60);
			$id = $row1['id'];
			/* Update Duration */
			$result = $mysqli->query("UPDATE `user_status_history` set duration= $minutes  WHERE id = $id");

			/* Master Table update */
			$usersStatusMasterResult = $mysqli->query(
					"SELECT * from `user_status_history_master` where uid = $userid and DATE(create_date) = '".$cDate."' and status_id = $status_id ORDER BY id desc LIMIT 1") or die($mysqli_fetch_array->error());
			$rowMaster1 = mysqli_fetch_array($usersStatusMasterResult);			
			if(!$rowMaster1){
			 	$result = $mysqli->query("INSERT INTO `user_status_history_master` ( `uid`, `status_id`, `create_date`, `unixtime`, `total_hour`) VALUES ( $userid, $status_id, '".$cDateTime."', '".$cDateTime."', 0)"); 	
			}

			/* Update total hour */
			$result = $mysqli->query("UPDATE `user_status_history_master` set total_hour= (total_hour + $minutes)  WHERE uid = $userid and DATE(create_date) = '".$cDate."' and status_id = $user_status_id");
		}
		echo "Status Updated!";
	}else{
		echo "Error!!";
	}
?>