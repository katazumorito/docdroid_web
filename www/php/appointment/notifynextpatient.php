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
                                ON appointment_tbl.user_info_fk = user_info_tbl.user_id
                                WHERE appointment_date = '$date_now'
                                AND pbStatus = 'Pending'
                                ORDER BY queue_number DESC LIMIT 1
                                ");
	$select->execute();
    
    while($row = $select->fetch(PDO::FETCH_ASSOC)){
     //   die($row['appointment_date']." ".$date_now);
        $data = array(
            'id' => $row['id'],
            'fullname' => $row['pbLname'] . ', ' . $row['pbFname']. ' ' . $row['pbMname'],
            'address' => $row['user_address'],
            'phone_num' => $row['phone_num'],
            'email_address' => $row['email_address'],
            'appointment_date' => $row['appointment_date'],
            'message' => $row['message'],
            'queue_number' => $row['queue_number'],
            'date_filed' => $row['created_at'],
            'status' => $row['pbStatus'],
            'actions' => '<td>
            <center>
            <button type="button" id="edit_staff" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Staff" onclick="edit_staff('.$row['id'].');" >
                <i class="fa fa-pencil"></i>
            </button>
            <button type="button" id="reset_pass_staff" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Reset Password" onclick="reset_pass_staff('.$row['id'].');" >
            <i class="fa fa-recycle"></i>
            </button>  
            <button type="button" id="disable_staff" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Disable Account" onclick="disable_staff('.$row['id'].');"  >
                <i class="fa fa-trash"></i>
            </button>
            </center>
        </td>'
        );
        $full_row["mydata"] = $data;
    }

    echo json_encode($full_row);

?>