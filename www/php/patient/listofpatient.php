<?php
require '../DbConfig.php';
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
	$database = new DbConfig();
	$connect = $database->connect();
    $full_row = array();
    

	$select = $connect->prepare("SELECT *
								 FROM patients_tbl");
	$select->execute();
    
    while($row = $select->fetch(PDO::FETCH_ASSOC)){
        $data = array(
            'p_id' => $row['p_id'],
            'fullname' => $row['p_l_name'] . ', ' . $row['p_f_name']. ' ' . $row['p_m_name'],
            'bdate'=> $row['bdate'],
            'age'=> $row['age'],
            'sex'=> $row['sex'],
            'mother'=> $row['mother'],
            'mAge'=> $row['mAge'],
            'father'=> $row['father'],
            'fAge'=> $row['fAge'],
            'p_address'=> $row['p_address'],
            'term'=> $row['term'],
            'delivery'=> $row['delivery'],
            'birthWeight'=> $row['birthWeight'],
            'birthLength'=> $row['birthLength'],
            'headCirc'=> $row['headCirc'],
            'chestCirc'=> $row['chestCirc'],
            'abdominalCirc'=> $row['abdominalCirc'],
            'headUp'=> $row['headUp'],
            'diMatarusan'=> $row['diMatarusan'],
            'satUp'=> $row['satUp'],
            'standUp'=> $row['standUp'],
            'walked'=> $row['walked'],
            'words'=> $row['words'],
            'sentence'=> $row['sentence'],
            'firstTooth'=> $row['firstTooth'],
            'cupTraining'=> $row['cupTraining'], 
            'toiletTraining'=> $row['toiletTraining'],
            'otherBHD'=> $row['otherBHD'],
            'allergy'=> $row['allergy'],
            'diMatarusan2'=> $row['diMatarusan2'],
            'measles'=> $row['measles'],
            'rubella'=> $row['rubella'],
            'mumps'=> $row['mumps'],
            'chickenPox'=> $row['chickenPox'],
            'diphtheria'=> $row['diphtheria'],
            'asthma'=> $row['asthma'],
            'rheumaticFever'=> $row['rheumaticFever'],
            'otitisMedia'=> $row['otitisMedia'],
            'convultion'=> $row['convultion'],
            'operations'=> $row['operations'],
            'otherIllness'=> $row['otherIllness'],
            'typeOfFeeding'=> $row['typeOfFeeding'],
            'supplementary'=> $row['supplementary'],
            'bcg1'=> $row['bcg1'],
            'bcg2'=> $row['bcg2'],
            'bcg3'=> $row['bcg3'],
            'bcg4'=> $row['bcg4'],
            'bcgR'=> $row['bcgR'],
            'dpt1'=> $row['dpt1'],
            'dpt2'=> $row['dpt2'],
            'dpt3'=> $row['dpt3'], 
            'dpt4'=> $row['dpt4'],
            'dptR'=> $row['dptR'],
            'opv1'=> $row['opv1'],
            'opv2'=> $row['opv2'],
            'opv3'=> $row['opv3'],
            'opv4'=> $row['opv4'],
            'opvR'=> $row['opvR'],
            'hbv1'=> $row['hbv1'],
            'hbv2'=> $row['hbv2'],
            'hbv3'=> $row['hbv3'],
            'hbv4'=> $row['hbv4'],
            'hbvR'=> $row['hbvR'],
            'hib1'=> $row['hib1'],
            'hib2'=> $row['hib2'],
            'hib3'=> $row['hib3'],
            'hib4'=> $row['hib4'],
            'hibR' => $row['hibR'],
            'measles1'=> $row['measles1'], 
            'measles2'=> $row['measles2'],
            'measles3'=> $row['measles3'],
            'measles4'=> $row['measles4'],
            'measlesR'=> $row['measlesR'],
            'mmr1'=> $row['mmr1'],
            'mmr2'=> $row['mmr2'],
            'mmr3'=> $row['mmr3'],
            'mmr4'=> $row['mmr4'],
            'mmrR'=> $row['mmrR'],
            'varicella1'=> $row['varicella1'], 
            'varicella2'=> $row['varicella2'],
            'varicella3'=> $row['varicella3'],
            'varicella4'=> $row['varicella4'],
            'varicellaR'=> $row['varicellaR'],
            'hav1'=> $row['hav1'],
            'hav2'=> $row['hav2'],
            'hav3'=> $row['hav3'],
            'hav4'=> $row['hav4'],
            'havR' => $row['havR'],
            'typhoidFever1'=> $row['typhoidFever1'],
            'typhoidFever2'=> $row['typhoidFever2'],
            'typhoidFever3'=> $row['typhoidFever3'],
            'typhoidFever4'=> $row['typhoidFever4'],
            'typhoidFeverR'=> $row['typhoidFeverR'],
            'flu1'=> $row['flu1'],
            'flu2'=> $row['flu2'],
            'flu3'=> $row['flu3'],
            'flu4' => $row['flu4'],
            'fluR'=> $row['fluR'],
            'td1'=> $row['td1'], 
            'td2'=> $row['td2'],
            'td3 '=> $row['td3'],
            'td4'=> $row['td4'],
            'tdR' => $row['tdR'],
            'actions' => '
            <div class="text-center">
            <button type="button" id="edit_patient" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit Staff" alt="button" onclick="edit_patient('.$row['p_id'].');" >
                <i class="fa fa-pencil"></i>
            </button> 
            </div>
        '
        );
        array_push($full_row, $data);
    }

    echo json_encode($full_row);
?>