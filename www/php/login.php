<?php
session_start();
require 'DbConfig.php';
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
	$database = new DbConfig();
	$connect = $database->connect();
	$data = $_POST["send_data"];
	$get_data = json_decode($data);
	$myArr["myArr"] = array();
	$username = $get_data->username;
	$password = $get_data->password;
	$login_info;
	$select = $connect->prepare("SELECT *
								FROM account_tbl
								INNER JOIN user_info_tbl
								ON account_tbl.user_info_fk = user_info_tbl.user_id
								WHERE username = ?");
	$select->execute([$username]);

	$row = $select->fetch(PDO::FETCH_ASSOC);
	if (password_verify($password, $row["password"]) && $row["account_status"]!="Disabled") {
			//$login_info = $row["role_fk"];
			$_SESSION["login_info"] = array(
				'account_id' => $row['account_id'],
				'fullname' => $row['l_name'] . ', ' . $row['f_name']. ' ' . $row['m_name'],
				'l_name' => $row['l_name'],
				'f_name' => $row['f_name'],
				'm_name' => $row['m_name'],
				'user_address' => $row['user_address'],
				'role' => $row['role_fk'],
				'user_id' => $row['user_id']
			);
	}else{
		$_SESSION["login_info"] = array(
			'account_id' => $row['account_id'],
			'fullname' => $row['l_name'] . ', ' . $row['f_name']. ' ' . $row['m_name'],
			'l_name' => $row['l_name'],
			'f_name' => $row['f_name'],
			'm_name' => $row['m_name'],
			'user_address' => $row['user_address'],
			'role' => '0'
		);
	}
	echo json_encode($_SESSION);
	//print_r($row);
?>