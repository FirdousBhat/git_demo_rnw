<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ProductDetails {

    function process() {

        $pid = $_REQUEST['product_id'];
        $userid = $_REQUEST['user_id'];
        if($userid){
            $favInfo = $this->getFavProducts($userid,$pid);
        }else{
            $favInfo =0;
        }
        $productInfo = $this->getProductInfo($pid);  
        $productInfo['wish_list'] =$favInfo;
        
        if (!empty($productInfo)) {
            header('Content-type: application/json');
            $response = array(
                'status' => 'true',
                'result' => $productInfo
               
            );
        } else {
            $response = array(
                'status' => 'false',
                'message' => 'Product Id Not Found'
            );
        }
        echo json_encode($response);
    }


    
    
    function getProductInfo($pid){
        
        include("config.php");
        $sql = "SELECT * FROM gf_products where id=$pid";
        $arrQuestions = $conn->query($sql);

        if (!empty($arrQuestions)) {
            $noOfrows = $arrQuestions->num_rows;
                if($noOfrows > 0){
                $row = $arrQuestions->fetch_assoc();
                $productdetails[] = $row;
                
                $productname = $productdetails[0]['pro_name'];
                $productweight = $productdetails[0]['base_weight'];
                $productimage = $productdetails[0]['mob_image'];
                $productprice = $productdetails[0]['MRP'];
                $actualprice = $productdetails[0]['sale_price'];
                //$cat_id = $productdetails[0]['cat_id'];
                $product_desc = $productdetails[0]['pro_desc'];
                $gal_img1=$productdetails[0]['mob_gallery_1'];
                $gal_img2=$productdetails[0]['mob_gallery_2'];
                $gal_img3=$productdetails[0]['mob_gallery_3'];
                $gal_img4=$productdetails[0]['mob_gallery_4'];
                $productlist  = array('product_name' => $productname,
                    'product_weight' => $productweight, 'product_image' => $productimage,
                    'mrp' => $productprice, 'sales_price' => $actualprice,'product_desc'=>$product_desc,
                    'gal_img1'=>$gal_img1,'gal_img2'=>$gal_img2,'gal_img3'=>$gal_img3,'gal_img4'=>$gal_img4);
                
            return $productlist;
}else{
     return 0;
}
        }
        
        
    }
    
    function getFavProducts($userid,$pid){
             include("config.php");
             $sql ="select * from gf_wish_list where user_id=$userid AND product_id=$pid";
             $arrQuestions = $conn->query($sql);
              if (!empty($arrQuestions)) {
                  $noOfrows = $arrQuestions->num_rows;
                  if($noOfrows > 0){
                      $result = 1;
                  }else{
                      $result = 0;
                  }
              }
              return $result;
             
        }

}

$obj = new ProductDetails();
$obj->process();
