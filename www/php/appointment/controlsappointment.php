<?php
require '../DbConfig.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
$database = new DbConfig();
$connect = $database->connect();

$data = $_POST["send_data"];
$get_data = json_decode($data);
$id = $get_data->id;
$status = $get_data->status;

$update = $connect->prepare("UPDATE  appointment_tbl
                                SET pbStatus = '$status'
                                WHERE id = '$id'
                                ");
$update->execute();


//echo json_encode($full_row);
