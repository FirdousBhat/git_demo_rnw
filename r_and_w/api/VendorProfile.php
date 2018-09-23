<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo 'hereeeeeeeeeeeeeeeee';exit;
class VendorProfile{
    
    function process(){
        
        $vendor_id = $_REQUEST['vendor_id'];
        if($vendor_id){
           $VendorInfo = $this->getVendorInfo($vendor_id); 
           if($VendorInfo){
               header('Content-type: application/json');
            $response = array();
            $response = array(
                'status' => 'true',
                'vendor_info' => $VendorInfo
                
            );

            echo json_encode($response);
            exit;
           }else{
              header('Content-type: application/json');
            $response = array();
            $response = array(
                'status' => 'false',
                'message' => 'VendorId not found'
                
            );

            echo json_encode($response);
            exit; 
           }
           
        }
        
    }
    
    function getVendorInfo($vendor_id){
        
        include("config.php");
        $sql = "select * from vendor_details where vendor_id=$vendor_id";
        
        $arrQuestions = $conn->query($sql);
        $noOfrows = $arrQuestions->num_rows;
            for($i=0;$i<$noOfrows;$i++){
                
                 $row = $arrQuestions->fetch_assoc();
                 $vendorInfo[] = $row;
                
                $shop_name = $vendorInfo[$i]['shop_name'];
                $owner_name = $vendorInfo[$i]['owner_name'];
                $mobile = $vendorInfo[$i]['mobile'];
                
                $vendorimage = $this->getVendorImage($vendor_id);
                if(empty($vendorimage)){
                    $vendorimage = "media/vendorimages/default_vendor.jpeg";
                }
                $shop_address = $vendorInfo[$i]['shop_address'];
                $working_days = $vendorInfo[$i]['working_days'];
                $working_time = $vendorInfo[$i]['working_time'];
                $vendorInformation [] = array('mobile' => $mobile,
                    'owener_name' => $owner_name,
                    'shop_name' => $shop_name, 
                    'client_number' => $mobile, 
                    'shop_address' => $shop_address,
                    'vendor_image' => $vendorimage,
                    'working_days' => $working_days,
                    'working_time' => $working_time);
               return $vendorInformation;
            }
    }
    
     private function getVendorImage($id) {
        include("config.php");
        $sql = "select * from vendor_image_details where vendorid = $id";
        
        $arrQuestions = $conn->query($sql);

        if (!empty($arrQuestions)) {
            if ($arrQuestions->num_rows > 0) {

                $row = $arrQuestions->fetch_assoc();
                $resultimageInfo[] = $row;
                $imagePath = $resultimageInfo[0]['image_path'];
                
            }
        }return $imagePath;
    }
    
}

$obj = new VendorProfile();
$obj->process();