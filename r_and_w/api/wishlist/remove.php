<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class removeWishList {

    function process() {
        $userid = $_REQUEST['user_id'];
        $product_id = $_REQUEST['product_id'];
        $result = $this->deleteWishList($userid, $product_id);
        if($result == 1){
            header('Content-type: application/json');
            $response = array(
                'status' => 'true',
                'message' => 'wish list removed successfully',
            );
        }else{
            header('Content-type: application/json');
            $response = array(
                'status' => 'false',
                'message' => $result
            );
        }
        echo json_encode($response);
    }

    function deleteWishList($userid, $product_id) {
        include("config.php");
        $sql = "DELETE FROM gf_wish_list WHERE user_id= $userid AND product_id=$product_id";

        if ($conn->query($sql) === TRUE) {
            $result = 1;
            
        } else {
           $result = $conn->error;
            
        }
        return $result;
    }

}

$obj = new removeWishList();
$obj->process();