<?php
	header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    require '../DbConfig.php';

	$database = new DbConfig();
    $connect = $database->connect();
    
    // echo json_encode($_POST);
    // die();

    $data = $_POST["send_data"];
    $get_data = json_decode($data);

    $l_name = $get_data->l_name;
    $f_name = $get_data->f_name;
    $m_name = $get_data->m_name;
    $bdate = $get_data->bdate;
    $age = $get_data->age;
    $sex = $get_data->sex;
    $mother = $get_data->mother;
    $mAge = $get_data->mAge;
    $father = $get_data->father;
    $fAge = $get_data->fAge;
    $address = $get_data->address;

    $term = $get_data->term;
    $delivery = $get_data->delivery;
    $birthWeight = $get_data->birthWeight;
    $birthLength = $get_data->birthLength;
    $headCirc = $get_data->headCirc;
    $chestCirc = $get_data->chestCirc;
    $abdominalCirc = $get_data->abdominalCirc;
    $headUp = $get_data->headUp;
    $diMatarusan = $get_data->diMatarusan;
    $satUp = $get_data->satUp;
    $standUp = $get_data->standUp;
    $walked = $get_data->walked;
    $words = $get_data->words;
    $sentence = $get_data->sentence;
    $firstTooth = $get_data->firstTooth;
    $cupTraining = $get_data->cupTraining;
    $toiletTraining = $get_data->toiletTraining;
    $otherBHD = $get_data->otherBHD;
    $allergy = $get_data->allergy;
    $diMatarusan2 = $get_data->diMatarusan2;
    $measles = $get_data->measles;
    $rubella = $get_data->rubella;
    $mumps = $get_data->mumps;
    $chickenPox = $get_data->chickenPox;
    $diphtheria = $get_data->diphtheria;
    $asthma = $get_data->asthma;
    $rheumaticFever = $get_data->rheumaticFever;
    $otitisMedia = $get_data->otitisMedia;
    $convultion = $get_data->convultion;
    $operations = $get_data->operations;
    $otherIllness = $get_data->otherIllness;
    $typeOfFeeding = $get_data->typeOfFeeding;
    $supplementary = $get_data->supplementary;
    $bcg1 = $get_data->bcg1;
    $bcg2 = $get_data->bcg2;
    $bcg3 = $get_data->bcg3;
    $bcg4 = $get_data->bcg4;
    $bcgR = $get_data->bcgR;
    $dpt1 = $get_data->dpt1;
    $dpt2 = $get_data->dpt2;
    $dpt3 = $get_data->dpt3;
    $dpt4 = $get_data->dpt4;
    $dptR = $get_data->dptR;
    $opv1 = $get_data->opv1;
    $opv2 = $get_data->opv2;
    $opv3 = $get_data->opv3;
    $opv4 = $get_data->opv4;
    $opvR = $get_data->opvR;
    $hbv1 = $get_data->hbv1;
    $hbv2 = $get_data->hbv2;
    $hbv3 = $get_data->hbv3;
    $hbv4 = $get_data->hbv4;
    $hbvR = $get_data->hbvR;
    $hib1 = $get_data->hib1;
    $hib2 = $get_data->hib2;
    $hib3 = $get_data->hib3;
    $hib4 = $get_data->hib4;
    $hibR = $get_data->hibR;
    $measles1 = $get_data->measles1;
    $measles2 = $get_data->measles2;
    $measles3 = $get_data->measles3;
    $measles4 = $get_data->measles4;
    $measlesR = $get_data->measlesR;
    $mmr1 = $get_data->mmr1;
    $mmr2 = $get_data->mmr2;
    $mmr3 = $get_data->mmr3;
    $mmr4 = $get_data->mmr4;
    $mmrR = $get_data->mmrR;
    $varicella1 = $get_data->varicella1;
    $varicella2 = $get_data->varicella2;
    $varicella3 = $get_data->varicella3;
    $varicella4 = $get_data->varicella4;
    $varicellaR = $get_data->varicellaR;
    $hav1 = $get_data->hav1;
    $hav2 = $get_data->hav2;
    $hav3 = $get_data->hav3;
    $hav4 = $get_data->hav4;
    $havR = $get_data->havR;
    $typhoidFever1 = $get_data->typhoidFever1;
    $typhoidFever2 = $get_data->typhoidFever2;
    $typhoidFever3 = $get_data->typhoidFever3;
    $typhoidFever4 = $get_data->typhoidFever4;
    $typhoidFeverR = $get_data->typhoidFeverR;
    $flu1 = $get_data->flu1;
    $flu2 = $get_data->flu2;
    $flu3 = $get_data->flu3;
    $flu4 = $get_data->flu4;
    $fluR = $get_data->fluR;
    $td1 = $get_data->td1;
    $td2 = $get_data->td2;
    $td3 = $get_data->td3;
    $td4 = $get_data->td4;
    $tdR = $get_data->tdR;



        $insert = $connect->prepare("INSERT INTO patients_tbl
              VALUES(null, '$l_name', '$f_name', '$m_name', '$bdate', '$age', '$sex', '$mother', '$mAge',
               '$father', '$fAge', '$address', '$term', '$delivery', '$birthWeight', '$birthLength', '$headCirc', '$chestCirc', '$abdominalCirc',
'$headUp', '$diMatarusan', '$satUp', '$standUp', '$walked', '$words', '$sentence', '$firstTooth', '$cupTraining', 
'$toiletTraining', '$otherBHD', '$allergy', '$diMatarusan2', '$measles', '$rubella', '$mumps', '$chickenPox',
'$diphtheria', '$asthma','$rheumaticFever', '$otitisMedia', '$convultion', '$operations', '$otherIllness',
'$typeOfFeeding', '$supplementary', '$bcg1', '$bcg2', '$bcg3', '$bcg4', '$bcgR', '$dpt1', '$dpt2', '$dpt3', '$dpt4', '$dptR',
'$opv1', '$opv2', '$opv3', '$opv4', '$opvR', '$hbv1', '$hbv2', '$hbv3', '$hbv4', '$hbvR', '$hib1', '$hib2', '$hib3', '$hib4', '$hibR' ,
'$measles1', '$measles2', '$measles3', '$measles4', '$measlesR', '$mmr1', '$mmr2', '$mmr3', '$mmr4', '$mmrR',
'$varicella1', '$varicella2', '$varicella3', '$varicella4', '$varicellaR', '$hav1', '$hav2', '$hav3', '$hav4', '$havR' ,
'$typhoidFever1', '$typhoidFever2', '$typhoidFever3', '$typhoidFever4', '$typhoidFeverR', '$flu1', '$flu2', '$flu3', '$flu4' ,
'$fluR', '$td1', '$td2', '$td3 ', '$td4', '$tdR')
              ");
        $insert->execute();


    


    echo json_encode($get_data);




?>