<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class addWishList {

    function process() {
        $userid = $_REQUEST['user_id'];
        $product_id = $_REQUEST['product_id'];
        $result = $this->createWishList($userid, $product_id);
        if($result == 1){
            header('Content-type: application/json');
            $response = array(
                'status' => 'true',
                'message' => 'wish list added successfully',
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

    function createWishList($userid, $product_id) {
        include("config.php");
        $sql = "INSERT INTO gf_wish_list(id, user_id, product_id) VALUES ('',$userid,$product_id)";

        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            $result = 1;
        } else {
            $result = $conn->error;
            
        }
        return $result;
    }

}

$obj = new addWishList();
$obj->process();

