<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Products {

    function process() {

        
        $cat_id=$_REQUEST['category_id'];
        $allProducts = $this->getRelatedProducts($cat_id);
        
        if (!empty($allProducts)) {
            header('Content-type: application/json');
            $response = array(
                'status' => 'true',
                'result' => $allProducts
            );
        } else {
            $response = array(
                'status' => 'false',
                'message' => 'Related Products Not Found'
            );
        }
        echo json_encode($response);
    }

    function getRelatedProducts($cat_id) {
        include("config.php");
        if (!$page) {
            $page = 0;
        }
       
        $sql = "SELECT * FROM gf_products where cat_id=$cat_id group by rel_priority";
        $arrQuestions = $conn->query($sql);

        if (!empty($arrQuestions)) {
            $noOfrows = $arrQuestions->num_rows;
            for ($i = 0; $i < $noOfrows; $i++) {
                $row = $arrQuestions->fetch_assoc();
                $productdetails[] = $row;
                $productid = $productdetails[$i]['id'];
                $productname = $productdetails[$i]['pro_name'];
                $productweight = $productdetails[$i]['base_weight'];
                $productimage = $productdetails[$i]['mob_image'];
                $productprice = $productdetails[$i]['MRP'];
                $actualprice = $productdetails[$i]['sale_price'];
                $cat_id = $productdetails[$i]['cat_id'];
                $productlist [] = array('id' => $productid, 'category_id'=>$cat_id,'product_name' => $productname,
                    'product_weight' => $productweight, 'product_image' => $productimage,
                    'product_price' => $productprice, 'actual_price' => $actualprice);
            }
            return $productlist;
        }
    }

    

}

$obj = new Products();
$obj->process();
