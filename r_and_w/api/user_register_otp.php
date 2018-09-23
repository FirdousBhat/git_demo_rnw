<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_POST['mobile']) {

    
        $otp = rand(1000, 9999);
        $mobile_number = $_POST['mobile'];
        $sms_msg = "One Time Password for registration is : $otp."
                . " Please use the password to complete the registration.";
        funcsendsmsSmsport($mobile_number, $sms_msg);
        header('Content-type: application/json');
        $response = array(
            'status' => 'true',
            'otp' => $otp
        );

        echo json_encode($response);
    
}else{
    header('Content-type: application/json');
        $response = array(
            'status' => 'false',
            'message' => "mobile number not valid"
        );

        echo json_encode($response);
    
}

function funcsendsmsSmsport($mobile_number, $message) {

    $username = "PMT College";  // The user name of gateway
    $password = "Albab123*";    // the password of gateway
    $sender = "PMTLKO";
    $ch = curl_init();


    curl_setopt($ch, CURLOPT_URL, "http://smsport.biz/API/WebSMS/Http/v1.0a/index.php?");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "username=$username&password=$password&to=$mobile_number&sender=$sender&message=$message");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    curl_close($ch);

    if (strpos($result, 'Successfully')) {
        $result = 1;
    }
    return $result;
}

