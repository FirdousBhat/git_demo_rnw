<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users {

    function process() {
        
        $user_name = $_REQUEST['username'];
        
        $pass_word = $_REQUEST['password'];
        if (is_numeric($user_name)) {
            include("config.php");
            $sql = "select vendor_id,shop_name, DECODE(`password`, 'secret') AS `password` from vendor_details where mobile = '$user_name'";   
            $arrQuestions = $conn->query($sql);
            if (!empty($arrQuestions)) {
                if ($arrQuestions->num_rows > 0) {
                    // output data of each row
                    $row = $arrQuestions->fetch_assoc();
                    $shopname = $row['shop_name'];
                    $vendor_id = $row['vendor_id'];
                }
            }
        }
        $mobileavailable = $this->checkMobileAvailable($user_name, $pass_word);
        if($mobileavailable){
            $loginresult = $this->checklogin($user_name, $pass_word);
            if ($loginresult) {

            header('Content-type: application/json');
            $response = array();
            $response = array(
                'status' => 'true',
                'vendor_id' => $vendor_id,
                'shop_name' => $shopname,
            );

            echo json_encode($response);
            exit;
        } else {

            header('Content-type: application/json');
            $response = array();
            $response = array(
                'status'=>'false',
                'message' => 'Entered Password was wrong'
            );

            echo json_encode($response);
            exit;
        }
        }else{
             header('Content-type: application/json');
            $response = array();
            $response = array(
                'status'=>'false',
                'message' => 'This Number Not Registered'
            );

            echo json_encode($response);
            exit;
        }
        
        
    }
    
    function checkMobileAvailable($user_name){
      include("config.php");
        if (is_numeric($user_name)) {
            $sql = "select * from vendor_details where  mobile='$user_name'";
            
        }
        $arrQuestions = $conn->query($sql);
        if (!empty($arrQuestions)) {
            if ($arrQuestions->num_rows > 0) {
                $result = true;
            } else {
                $result = false;
            }
        } return $result;  
    }

    function checklogin($user_name, $pass_word) {
        include("config.php");
        if (is_numeric($user_name)) {
            $sql = "select * from vendor_details where  mobile='$user_name' AND DECODE(`password`, 'secret')='$pass_word'";
            
        }
        $arrQuestions = $conn->query($sql);
        if (!empty($arrQuestions)) {
            if ($arrQuestions->num_rows > 0) {
                $result = true;
            } else {
                $result = false;
            }
        } return $result;
    }

   

}

$UserLogin = new Users();
$UserLogin->process($_REQUEST);
