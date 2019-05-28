<?php
require '../DbConfig.php';
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
	$database = new DbConfig();
	$connect = $database->connect();
    $full_row = array();
    

	$select = $connect->prepare("SELECT *
								FROM account_tbl
								INNER JOIN user_info_tbl
								ON account_tbl.user_info_fk = user_info_tbl.user_id
                                INNER JOIN roles_tbl
                                ON user_info_tbl.role_fk = role_id");
	$select->execute();
    
    while($row = $select->fetch(PDO::FETCH_ASSOC)){
        $data = array(
            'account_id' => $row['account_id'],
            'fullname' => $row['l_name'] . ', ' . $row['f_name']. ' ' . $row['m_name'],
            'user_address' => $row['user_address'],
            'role' => $row['role_desc'],
            'account_status' => $row['account_status'],
            'actions' => '<td>
            <center>
            <button type="button" id="edit_staff" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Staff" onclick="edit_staff('.$row['account_id'].');" >
                <i class="fa fa-pencil"></i>
            </button>
            <button type="button" id="reset_pass_staff" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Reset Password" onclick="reset_pass_staff('.$row['account_id'].');" >
            <i class="fa fa-recycle"></i>
            </button>  
            <button type="button" id="disable_staff" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Disable Account" onclick="disable_staff('.$row['account_id'].');"  >
                <i class="fa fa-trash"></i>
            </button>
            </center>
        </td>'
        );
        array_push($full_row, $data);
    }

    echo json_encode($full_row);

?>