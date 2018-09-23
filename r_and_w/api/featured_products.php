<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FeaturedProducts {

    function process() {

        $user_id = $_REQUEST['user_id'];
        $allProducts = $this->getAllProducts($user_id);
        $total = $this->getTotal();
        if (!empty($allProducts)) {
            header('Content-type: application/json');
            $response = array(
                'status' => 'true',
                'total'=>$total,
                'result' => $allProducts
            );
        } else {
            $response = array(
                'status' => 'false',
                'result' => 'Featured Products Not Found'
            );
        }
        echo json_encode($response);
    }

    function getAllProducts($user_id) {
        include("config.php");
        if (!$page) {
            $page = 0;
        }
       
        $sql = "SELECT * FROM gf_products where featured = 1";
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
                $wishlist = $this->getWishlistStatus($user_id,$productid);
                $productlist [] = array('id' => $productid, 'category_id'=>$cat_id,'product_name' => $productname,
                    'product_weight' => $productweight, 'product_image' => $productimage,
                    'mrp' => $productprice, 'sales_price' => $actualprice,'wish_list'=>$wishlist);
            }
            return $productlist;
        }
    }

     function getTotal() {
        include("config.php");
        $sql = "select count(*) as count from gf_products where featured=1";
        $arrQuestions = $conn->query($sql);

        if ($arrQuestions->num_rows > 0) {
            // output data of each row
            $row = $arrQuestions->fetch_assoc();

            $count = $row['count'];
        }return $count;
    }
    
    function getWishlistStatus($user_id,$productid){
        include("config.php");
        $sql = "select *  from gf_wish_list where product_id=$productid AND user_id=$user_id";
        $arrQuestions = $conn->query($sql);
        $count = $arrQuestions->num_rows;
        if($count > 0){
            $result = 1;
        }else{
            $result = 0;
        }
        return $result;
    }

}

$obj = new FeaturedProducts();
$obj->process();

