<?php
	header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    require '../DbConfig.php';

	$database = new DbConfig();
    $connect = $database->connect();
    
    $data = $_POST["send_data"];
    $get_data = json_decode($data);
    $l_name = $get_data->l_name;
    $f_name = $get_data->f_name;
    $m_name = $get_data->m_name;
    $address = $get_data->address;
    $role = $get_data->role;
    $username = $get_data->username;
    $password = $get_data->password;


    $validateUsername = $connect->prepare("SELECT * FROM account_tbl WHERE username = '$username'");    
    $validateUsername->execute();
    $count = $validateUsername->rowCount();
    if ($count>0) {
        $get_data = "error";
    } else{
        $insert = $connect->prepare("INSERT INTO user_info_tbl
              VALUES(null, '$l_name', '$f_name', '$m_name', '$address', '$role')
              ");
        $insert->execute();

        $lastId = $connect->lastInsertId();
        $hashed_pass =  password_hash($password, PASSWORD_BCRYPT);
        $insertAccount = $connect->prepare("INSERT INTO account_tbl
              VALUES(null, '$username', '$hashed_pass', '$lastId', 'Enabled')
              ");
        $insertAccount->execute();

    }

    


    echo json_encode($get_data);

?>