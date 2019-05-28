<?php
require '../DbConfig.php';
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
	$database = new DbConfig();
    $connect = $database->connect();
    
    $data = $_POST["send_data"];
    $get_data = json_decode($data);
    $p_id = $get_data->p_id;
    $f_name = $get_data->f_name;
    $l_name = $get_data->l_name;
    $m_name = $get_data->m_name;
    $address = $get_data->address;
    $sex = $get_data->sex;
    //$full_row = array();

    $update = $connect->prepare("UPDATE patients_tbl
                                 SET p_l_name = '$l_name', p_f_name = '$f_name', p_m_name = '$m_name', p_address = '$address'
                                 WHERE p_id = '$p_id'");
    $update->execute();


    echo json_encode($get_data);

?>