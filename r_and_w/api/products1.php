<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Products {
    
    function process($_REQUEST){
        $page = $_REQUEST['page_no'];
        $allProducts = $this->getAllProducts($page);
        if(!empty($allProducts)){
            header('Content-type: application/json'); 
        $response = array(
            'status' => 'true',
            'result' => $allProducts
        );
        
        }else{
            $response = array(
            'status' => 'false',
            'result' => 'Products Not Found'
        );
        }
        echo json_encode($response);
    }
    
    function getAllProducts($page){
        include("config.php");
        if(!$page){
            $page = 0;
        }
        
        
        $sql = "SELECT * FROM gf_products limi1 $page , 10";
        $arrQuestions = $conn->query($sql);
        
        if (!empty($arrQuestions)) {
            $noOfrows = $arrQuestions->num_rows;
            for($i=0;$i<$noOfrows;$i++){
                 $row = $arrQuestions->fetch_assoc();
                 $productdetails[] = $row;
                $productid = $productdetails[$i]['id'];
                $productname = $productdetails[$i]['pro_name'];
                $productweight= $productdetails[$i]['base_weight`'];
                $productimage = $productdetails[$i]['mob_image'];
                $productprice = $productdetails[$i]['MRP'];
                $actualprice = $productdetails[$i]['sale_price'];
                $productlist [] = array('id'=>$productid,'product_name' => $productname,
                    'product_weight' => $productweight, 'product_image' => $productimage,
                    'product_price' => $productprice,'actual_price'=>$actualprice);
                
            }          
            return $productlist;
        }
        
    }
    
}

$obj = new Products();
$obj->process($_REQUEST);