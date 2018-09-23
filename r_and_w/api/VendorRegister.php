<?php

class Vendor_Register {

    function process($request) {

         echo "<pre>";print_R($request);exit;
        $shopname = $request['vendor_shop_name'];
        $ownername = $request['vendor_owner_name'];  
        $mobile = $request['vendor_mobile'];
        $shopaddress = $request['vendor_shop_address'];    
        $vendorlatitude = $request['vendor_latitude'];
        $vendorlongitude = $request['vendor_longitude'];
        $percentage = $request['vendor_percentage'];
        $vendordevice = $request['vendor_device'];   
        $vendorstatus = $request['vendor_status'];
        $workingdays = $request['working_days'];
        $workingtime = $request['working_time']; 
        $shopstatus = $request['shop_status']; 
        date_default_timezone_set('Asia/Kolkata');
        $createdTime = date("Y-m-d h:i:sa");
        $imgname1 = basename($_FILES['image']['name']);
        $filename1 = $_FILES['image']['tmp_name'];
        $vendorid = '';
        $currentdate = date('Y-m-d');
        
        $mobile = $_POST['mobile'];
        $checkMobile = $this->checkmobile($mobile);

        if ($checkMobile == 0) {

           $createdLead = $this->createlead($vendorid, $shopname, $ownername, $mobile,
                    $shopaddress, $vendorlatitude, $vendorlongitude, $percentage, $vendordevice,
                    $vendorstatus, $workingdays, $workingtime, $shopstatus,
                    $createdTime, $imgname1);
           $vendorid = $createdLead;
           $this->updateLeadimage($vendorid, $imgname1, $filename1);
           
        } 
       
    }

    function checkmobile($mobile) {
        include("config.php");
        $sql = "SELECT * FROM vendor_details where mobile= $mobile";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $vendorid = $row["vendor_id"];
            }
            return $vendorid;
        } else {
            return 0;
        }
    }

    function createlead($vendorid, $shopname, $ownername, $mobile,
                    $shopaddress, $vendorlatitude, $vendorlongitude, $percentage, $vendordevice,
                    $vendorstatus, $workingdays, $workingtime, $shopstatus,
                    $createdTime, $imgname1) {
        include("config.php");
        $sql = "INSERT INTO `vendor_details`(`vendor_id`, `shop_name`, `owner_name`, `mobile`, `shop_address`,"
                . " `latitude`, `longitude`, `percentage`, `device`, `status`, `working_days`, `working_time`, `created_date`, `updated_date`, `shop_status`) VALUES "
                . "('$vendorid','$shopname','$ownername','$mobile','$shopaddress','$vendorlatitude','$vendorlongitude','$percentage',"
                . " '$vendordevice','$vendorstatus','$workingdays','$workingtime',"
                . " '$createdTime','','$shopstatus')";
        //$res = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            return $last_id;
        } else {
            $result = $conn->error;
            return $result;
        }
    }

    

    function updateLeadimage($vendorid, $imgname1, $filename1) {

        include("config.php");
        if ($imgname1) {
            $img_name1 = $vendorid . '_' . $imgname1;
        } else {
            $img_name1 = 'UL-01.png';
        }    
        $sql = "UPDATE vendor_details SET imagename1 = '$img_name1' where vendor_id = '$vendorid'";
        if ($conn->query($sql) === TRUE) {
            // echo 1;
        } else {
            echo $conn->error;
        }
        $target_dir = "media/vendorimages/";
        $target_file = $target_dir . $img_name1;
        move_uploaded_file($filename1, $target_file);

    }

  

    

}

// NOTE: Take care of stripping slashes...
$vendorRegister = new Vendor_Register();
$vendorRegister->process($_REQUEST);
?>

