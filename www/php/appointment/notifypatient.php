<?php
require '../DbConfig.php';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
$database = new DbConfig();
$connect = $database->connect();

$data = $_POST["send_data"];
$get_data = json_decode($data);
$id = $get_data->id;

$select = $connect->prepare("SELECT *
								FROM appointment_tbl
                                INNER JOIN user_info_tbl
                                ON  user_info_tbl.user_id = appointment_tbl.user_info_fk
                                WHERE id = '$id'");
$select->execute();

$row = $select->fetch(PDO::FETCH_ASSOC);

//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number, $message, $apicode)
{
    $url = 'https://www.itexmo.com/php_api/api.php';
    $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
    $param = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($itexmo),
        ),
    );
    $context  = stream_context_create($param);
    return file_get_contents($url, false, $context);
}
//##########################################################################

$number = $row['phone_num'];
$name = $row['f_name']." ".$row['m_name']." ".$row['l_name'];
$msg = "Hi! ".$row['f_name'];
//$msg = "Hi! ".$name.", puwede ka ng pumunta sa Gurion's Children Clinic ngayon upang mag-pacheck up! :)";
$api = "TR-JUNIE212108_XCMIF";
$text = $name . ":" . $msg;


    $result = itexmo($number, $msg, $api);
    if ($result == "") {
        echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
Please CONTACT US for help. ";
    } else if ($result == 0) {
        echo "Notification Sent! :)";
    } else {
        echo "Error Num " . $result . " was encountered!";
    }

