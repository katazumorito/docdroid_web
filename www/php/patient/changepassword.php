<?php
require '../DbConfig.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
$database = new DbConfig();
$connect = $database->connect();

$data = $_POST["send_data"];
$get_data = json_decode($data);
$p_id = $get_data->p_id;
$newPass = password_hash($get_data->newPassword, PASSWORD_BCRYPT);

$full_row = array();


$updaatePass = $connect->prepare("UPDATE account_tbl
                                SET password = '$newPass'
                                WHERE user_info_fk = '$p_id' ");
$updaatePass->execute();

echo json_encode("success");
