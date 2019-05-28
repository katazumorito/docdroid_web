<?php
require '../DbConfig.php';
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
	$database = new DbConfig();
    $connect = $database->connect();
    
    $data = $_POST["send_data"];
    $get_data = json_decode($data);
    $p_id = $get_data->p_id;
    $full_row = array();
    

	$select = $connect->prepare("SELECT *
								FROM patients_tbl
                                WHERE p_id = '$p_id'");
	$select->execute();
    
    while($row = $select->fetch(PDO::FETCH_ASSOC)){
        $data = array(
            'p_id' => $row['p_id'],
            'p_l_name' => $row['p_l_name'],
            'p_f_name' => $row['p_f_name'],
            'p_m_name' => $row['p_m_name'],
            'p_address' => $row['p_address'],
        );
        array_push($full_row, $data);
    }
    echo json_encode($full_row);

?>