<?php
require '../DbConfig.php';
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
	$database = new DbConfig();
    $connect = $database->connect();
    
    $data = $_POST["send_data"];
    $get_data = json_decode($data);
    $account_id = $get_data->account_id;
    $f_name = $get_data->f_name;
    $l_name = $get_data->l_name;
    $m_name = $get_data->m_name;
    $address = $get_data->address;
    $role = $get_data->role;
    //$full_row = array();

    $update = $connect->prepare("UPDATE account_tbl
    INNER JOIN user_info_tbl
    ON account_tbl.user_info_fk = user_info_tbl.user_id
    INNER JOIN roles_tbl
    ON user_info_tbl.role_fk = role_id
    SET l_name = '$l_name', f_name = '$f_name', m_name = '$m_name', user_address = '$address', role_desc = '$role'
    WHERE account_id = '$account_id'");
    $update->execute();


    echo json_encode($get_data);

?>