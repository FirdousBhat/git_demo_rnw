<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Categories {

    function process() {

        
        $allCategories = $this->getAllCategories();
        $total = $this->getTotal();
        if (!empty($allCategories)) {
            header('Content-type: application/json');
            $response = array(
                'status' => 'true',
                'result' => $allCategories
            );
        } else {
            $response = array(
                'status' => 'false',
                'result' => 'Categories Not Found'
            );
        }
        echo json_encode($response);
    }

    function getAllCategories() {
        include("config.php");
        if (!$page) {
            $page = 0;
        }
       
        $sql = "SELECT * FROM gf_categories";
        $arrQuestions = $conn->query($sql);

        if (!empty($arrQuestions)) {
            $noOfrows = $arrQuestions->num_rows;
            for ($i = 0; $i < $noOfrows; $i++) {
                $row = $arrQuestions->fetch_assoc();
                $catdetails[] = $row;
                $img = $catdetails[$i]['mob_images'];
                $catname = $catdetails[$i]['cat_name'];
                $cat_id = $catdetails[$i]['id'];
                $productlist [] = array('id' => $cat_id, 'catgory_name'=>$catname,'category_image' => $img);
            }
            return $productlist;
        }
    }

    function getTotal() {
        include("config.php");
        $sql = "select count(*) as count from gf_categories";
        $arrQuestions = $conn->query($sql);
        $count = $arrQuestions->num_rows;
        return $count;
    }

}

$obj = new Categories();
$obj->process();
