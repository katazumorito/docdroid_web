<?php
session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
require '../DbConfig.php';

$database = new DbConfig();
$connect = $database->connect();

$error_message = array();

$data = $_POST["send_data"];
$get_data = json_decode($data);
$bLname = $get_data->bLname;
$bFname = $get_data->bFname;
$bMname = $get_data->bMname;
$phone = $get_data->phone;
$email = $get_data->email;
$bookDate = $get_data->bookDate;
$message = $get_data->message;
$bookDate = strtotime($bookDate);
$bookDate = date("Y-m-d", $bookDate);
$userFk = $_SESSION["login_info"]["user_id"];
$date_now = $today = date("Y-m-d");
//die($phone);
if ($bookDate == "") {
    echo "error";
} else {
    //  echo json_encode($data);\

    $select_queue_number = $connect->prepare("SELECT *
                                           FROM appointment_tbl 
                                           WHERE appointment_date = '$bookDate'
                                        --    AND user_info_fk  = '$userFk'
                                        --    AND pbStatus = 'Pending'
                                           ORDER BY id DESC LIMIT 1
                                           ");
    $select_queue_number->execute();

    $duplicate = $connect->prepare("SELECT *
                                           FROM appointment_tbl 
                                           WHERE appointment_date = '$bookDate'
                                           AND user_info_fk  = '$userFk'
                                           AND pbStatus = 'Pending'
                                           ORDER BY id DESC LIMIT 1
                                           ");
    $duplicate->execute();

    $row = $select_queue_number->fetch(PDO::FETCH_ASSOC);

    if ($duplicate->rowCount() > 0) {
        echo "error_rebook";
    } else {
        $queue_number = $row["queue_number"];
        $date_appointment = $row["appointment_date"];
        $date_appointment = strtotime($row["appointment_date"]);
        $date_appointment =  date("Y-m-d", $date_appointment);

        if ($queue_number != 100 && $date_appointment != $date_now) {
            $queue_number++;
        } else {
            $queue_number = 1;
        }

        $insert = $connect->prepare("INSERT INTO appointment_tbl
            VALUES(null, '$bLname', '$bFname', '$bMname', '$phone', '$email', '$bookDate', '$message', '$queue_number', '$date_now', 'Pending', '$userFk')
            ");
        $insert->execute();
        echo json_encode($queue_number);
    }
}
