<?php
require '../DbConfig.php';
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
	$database = new DbConfig();
	$connect = $database->connect();
    $full_row = array();
    $date_now = date("Y-m-d"); 
    
	$select = $connect->prepare("SELECT *
                                 FROM appointment_tbl
                                 INNER JOIN user_info_tbl
                                ON  user_info_tbl.user_id = appointment_tbl.user_info_fk
                                WHERE appointment_date = '$date_now'
                                AND pbStatus = 'Pending'
                                ");
	$select->execute();
    
    while($row = $select->fetch(PDO::FETCH_ASSOC)){
            $fullname = $row['pbLname'] . ', ' . $row['pbFname']. ' ' . $row['pbMname'];
        $data = array(
            'id' => $row['id'],
            'fullname' => $row['pbLname'] . ', ' . $row['pbFname']. ' ' . $row['pbMname'],
            'phone_num' => $row['phone_num'],
            'email_address' => $row['email_address'],
            'appointment_date' => $row['appointment_date'],
            'message' => $row['message'],
            'queue_number' => $row['queue_number'],
            'date_filed' => $row['created_at'],
            'status' => $row['pbStatus'],
            'actions' => '<td>
            <center>
            <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Finish Appointment" onclick="finished('.$row['id'].')"  >
                <i class="fa fa-check"> Finished</i>
            </button>
            <button type="button" id="park" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Park This Number" onclick="park('.$row['id'].')" >
            <i class="fa fa-pause"> Park</i>
            </button>  
            <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Notify Patient" onclick="notify('.$row['id'].' , '."'$fullname'".')"  >
                <i class="fa fa-bell"> Notify</i>
            </button>
            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Cancel Appointment" onclick="cancel_app('.$row['id'].')"  >
                <i class="fa fa-ban"> Cancel</i>
            </button>
            </center>
        </td>'
        );
        array_push($full_row, $data);
    }

    echo json_encode($full_row);
