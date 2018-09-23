<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SearchProducts{
    
    function process(){
        $input = $_REQUEST['product_name'];
        $page = $_REQUEST['page_no'];
        $cat_id = $_REQUEST['category_id'];
         $user_id = $_REQUEST['user_id'];
        $searchlist = $this->getSearchProducts($input,$page,$cat_id,$user_id);
        
        
        $total = $this->getTotal($input,$cat_id);
        if (!empty($searchlist)) {
            header('Content-type: application/json');
            $response = array(
                'status' => 'true',
                'total'=>$total,
                'result' => $searchlist
            );
        } else {
            $response = array(
                'status' => 'false',
                'result' => 'Products Not Found'
            );
        }
        echo json_encode($response);
    }
    function getSearchProducts($input,$page,$cat_id,$user_id){
        include("config.php");
        if (!$page) {
            $page = 0;
        }
        //if($cat_id){
          // $sql = "SELECT * FROM gf_products   where pro_name LIKE '%$input%' AND cat_id=$cat_id limit $page , 10"; 
        //}else{
          $sql = "SELECT * FROM gf_products   where pro_name LIKE '%$input%' limit $page , 10";  
        //}
        
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
                $wishlist = $this->getWishlistStatus($user_id, $productid);
                $productlist [] = array('id' => $productid, 'category_id'=>$cat_id,'product_name' => $productname,
                    'product_weight' => $productweight, 'product_image' => $productimage,
                    'mrp' => $productprice, 'sales_price' => $actualprice,'wish_list'=>$wishlist);
            }
            return $productlist;
        }
    }
    
     function getTotal($input,$cat_id) {
        include("config.php");
       /* if($cat_id){
            $sql = "select count(*) as count from gf_products where pro_name LIKE '%$input%' AND cat_id=$cat_id";
        }else{*/
            $sql = "select count(*) as count from gf_products where pro_name LIKE '%$input%'";
        //}
        
        $arrQuestions = $conn->query($sql);
        if ($arrQuestions->num_rows > 0) {
            $row = $arrQuestions->fetch_assoc();
            $count = $row['count'];
        }return $count;
    }
    
    function getWishlistStatus($user_id, $productid) {
        include("config.php");
        $sql = "select *  from gf_wish_list where product_id=$productid AND user_id=$user_id";
        $arrQuestions = $conn->query($sql);
        $count = $arrQuestions->num_rows;
        if ($count > 0) {
            $result = 1;
        } else {
            $result = 0;
        }
        return $result;
    }
    
}


$obj = new SearchProducts();
$obj->process();
