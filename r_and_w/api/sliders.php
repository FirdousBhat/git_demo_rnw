<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Sliders {

    function process() {

        
        $allSliders = $this->getAllSliders();
        
        if (!empty($allSliders)) {
            header('Content-type: application/json');
            $response = array(
                'status' => 'true',
                'result' => $allSliders
            );
        } else {
            $response = array(
                'status' => 'false',
                'result' => 'Sliders Not Found'
            );
        }
        echo json_encode($response);
    }

    function getAllSliders() {
        include("config.php");
        if (!$page) {
            $page = 0;
        }
       
        $sql = "SELECT * FROM gf_sliderimages";
        $arrQuestions = $conn->query($sql);

        if (!empty($arrQuestions)) {
            $noOfrows = $arrQuestions->num_rows;
            for ($i = 0; $i < $noOfrows; $i++) {
                $row = $arrQuestions->fetch_assoc();
                $slideImgDetails[] = $row;
                $slide = $slideImgDetails[$i]['mob_slide']; 
                $link = $slideImgDetails[$i]['link'];   
                $sliderList [] = array('slider' => $slide,'link' => $link);
            }
            return $sliderList;
        }
    }

   
  

}

$obj = new Sliders();
$obj->process();
