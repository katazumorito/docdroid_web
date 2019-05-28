<?php
require '../DbConfig.php';
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
	$database = new DbConfig();
    $connect = $database->connect();
    
    $data = $_POST["send_data"];
    $get_data = json_decode($data);
    $account_id = $get_data->account_id;
    $full_row = array();
    

	$select = $connect->prepare("SELECT *
								FROM account_tbl
								INNER JOIN user_info_tbl
								ON account_tbl.user_info_fk = user_info_tbl.user_id
                                INNER JOIN roles_tbl
                                ON user_info_tbl.role_fk = role_id
                                WHERE account_id = '$account_id'");
	$select->execute();
    
    while($row = $select->fetch(PDO::FETCH_ASSOC)){
        $data = array(
            'account_id' => $row['account_id'],
            'l_name' => $row['l_name'],
            'f_name' => $row['f_name'],
            'm_name' => $row['m_name'],
            'user_address' => $row['user_address'],
            'role' => $row['role_desc']
        );
        array_push($full_row, $data);
    }
    echo json_encode($full_row);

?>