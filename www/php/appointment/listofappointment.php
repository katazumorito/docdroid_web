<?php
require '../DbConfig.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
$database = new DbConfig();
$connect = $database->connect();
$full_row = array();


$select = $connect->prepare("SELECT *
								FROM appointment_tbl");
$select->execute();

while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
    $data = array(
        'id' => $row['id'],
        'fullname' => $row['pbLname'] . ', ' . $row['pbFname'] . ' ' . $row['pbMname'],
        'phone_num' => $row['phone_num'],
        'email_address' => $row['email_address'],
        'appointment_date' => $row['appointment_date'],
        'message' => $row['message'],
        'queue_number' => $row['queue_number'],
        'date_filed' => $row['created_at'],
        'status' => $row['pbStatus'],
        'actions' => '<td>

        </td>'
    );
    array_push($full_row, $data);
}

echo json_encode($full_row);
