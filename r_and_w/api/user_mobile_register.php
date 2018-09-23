<?php

class User_Capture {

    function captureNow($request) {
        
//        print_r($request);exit;
        $mobile_username = $request['user_name'];
        $mobile = $request['mobile'];
        $email = $request['email']; 
        $otp = $request['otp'];
        $mobile_password = password_hash($request['password'],PASSWORD_DEFAULT);
        $createdTime = date("Y-m-d h:i:sa");     
        $imgname1="";   
        $sino = '';
        $checkMobile = $this->checkmobile($mobile);
        if($checkMobile == 0){
            if($mobile && $mobile_password){
            $userid = $this->createUser($sino,$mobile_username,$mobile,$email,$imgname1,$otp,$mobile_password,$createdTime);
             if($userid){
            header('Content-type: application/json');
           
            $response = array(
                'status' => 'true',
                'user_id' => "$userid",
                'message' => "successfully inserted"
            );
             echo json_encode($response);
        }else{
            header('Content-type: application/json');
           
            $response = array(
                'status' => 'false',
                'message' => "error in inser data"
            );
             echo json_encode($response);
        }
        }else{
            header('Content-type: application/json');
           
            $response = array(
                'status' => 'false',
                'message' => "Please fill mandatory fields"
            );
             echo json_encode($response);
        }
        }else{
            header('Content-type: application/json');
           
            $response = array(
                'status' => 'false',
                'message' => "Mobile Number already exists"
            );
             echo json_encode($response);
            
        }
              
        
    }
    
    function checkmobile($mobile) {
        include("config.php");
        $sql = "SELECT * FROM RaW_customers where user_mobile= $mobile";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $contactid = $row["user_id"];
            }
            return $contactid;
        } else {
            return 0;
        }
    }

    function createUser($sino,$mobile_username,$mobile,$email,$imgname1,$otp,$mobile_password,$createdTime) {
        include("config.php");
       try{
           $sql = "INSERT INTO RaW_customers (user_id, user_name, user_mobile, user_email, user_photo, register_otp, forgot_otp, password, updated_on, created_on) VALUES
('','$mobile_username', '$mobile','$email', '', '', '','$mobile_password','', '$createdTime')";
           if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            $result = $last_id;       
        }
       } catch (Exception $ex) {
           $result =  $ex;
       }
        return $result;
    }

  

    

    

    

}

// NOTE: Take care of stripping slashes...
$urbanCapture = new User_Capture();
$urbanCapture->captureNow($_REQUEST);
?>

