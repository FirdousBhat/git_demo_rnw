<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("config.php");

session_start();


$sql = "SELECT * FROM gf_products";
$arrQuestions = $conn->query($sql);
if (!empty($arrQuestions)) {
    if ($arrQuestions->num_rows > 0) {
        // output data of each row
        while ($row = $arrQuestions->fetch_assoc()) {

           $products_data[] = $row;
        }
    }
}

function getCategoryName($id) {
    include("config.php");
    $sql = "SELECT * FROM gf_categories where id = '$id'";
    $arrQuestions = $conn->query($sql);
    if (!empty($arrQuestions)) {
        if ($arrQuestions->num_rows > 0) {
            $row = $arrQuestions->fetch_assoc();
            $resultUrbanUser[] = $row;
            $category = $resultUrbanUser[0]['cat_name'];
        }
    }
    return $category;
}


$sql = "SELECT * FROM gf_categories";
$arrQuestions = $conn->query($sql);
if (!empty($arrQuestions)) {
    if ($arrQuestions->num_rows > 0) {
        // output data of each row
        while ($row = $arrQuestions->fetch_assoc()) {

           $products_cat_data[] = $row;
        }
    }
}


if(isset($_POST['save_category'])){
$cat_name=$_POST['cat_name'];
$cat_web_image=$_POST['web_images'];
$cat_mob_image=$_POST['mob_images'];
$createdTime = date("Y-m-d h:i:sa");
    $modifiedTime = date("Y-m-d h:i:sa");
$createCategory=createCategory($cat_name,$cat_web_image,$cat_mob_image,$modifiedTime,$createdTime);
}

if(isset($_POST['save_slider'])){

$web_slide =$_POST['web_slider'];
$mob_slide =$_POST['mob_slider'];
$link=$_POST['link'];
$createdTime = date("Y-m-d h:i:sa");
$modifiedTime = date("Y-m-d h:i:sa");
$createSlider=SaveSliderImages($web_slide,$mob_slide,$link,$modifiedTime,$createdTime);
}




if(isset($_POST['save_product'])){ 
    
        $id = $_REQUEST['productid'];
        $product_name=  $_POST['product_name'];
        $product_description=  $_POST['product_description'];
        $product_category=  $_POST['product_category'];
        $product_mrp=  $_POST['product_mrp'];
        $product_saleprice=  $_POST['product_saleprice'];
        $product_base_weight=  $_POST['product_base_weight'];
        $featured_img_desk_url=  $_POST['featured_img_desk_url'];
        $featured_img_mob_url=  $_POST['featured_img_mob_url'];
        $gallery_desk_img1 =  $_POST['gallery_desk_img1'];
        $gallery_desk_img2 =  $_POST['gallery_desk_img2'];
        $gallery_desk_img3=  $_POST['gallery_desk_img3'];
        $gallery_desk_img4=  $_POST['gallery_desk_img4'];
        $gallery_mob_img1=  $_POST['gallery_mob_img1'];
        $gallery_mob_img2=  $_POST['gallery_mob_img2'];
        $gallery_mob_img3=  $_POST['gallery_mob_img3'];
        $gallery_mob_img4=  $_POST['gallery_mob_img4'];
        $rel_priority=$_POST['rel_priority'];
        $featured = $_POST['featured']?1:0;
        $units=$_POST['units'];
        
    $createdTime = date("Y-m-d h:i:sa");
    $modifiedTime = date("Y-m-d h:i:sa");
        if($id){
   $updateLead = updateProduct($product_name, $product_description,$product_category,$product_mrp,$product_saleprice,$product_base_weight,$featured_img_desk_url,$featured_img_mob_url,$gallery_desk_img1,$gallery_desk_img2,$gallery_desk_img3,$gallery_desk_img4,$gallery_mob_img1,$gallery_mob_img2,$gallery_mob_img3,$gallery_mob_img4,$createdTime,$modifiedTime,$rel_priority,$id,$featured,$units);
        }else{
$createdLead = addProduct($product_name, $product_description,$product_category,$product_mrp,$product_saleprice,$product_base_weight,$featured_img_desk_url,$featured_img_mob_url,$gallery_desk_img1,$gallery_desk_img2,$gallery_desk_img3,$gallery_desk_img4,$gallery_mob_img1,$gallery_mob_img2,$gallery_mob_img3,$gallery_mob_img4,$createdTime,$modifiedTime,$rel_priority,$featured,$units);
          }
        
        
        
        
}

function addProduct($product_name, $product_description,$product_category,$product_mrp,$product_saleprice,$product_base_weight,$featured_img_desk_url,$featured_img_mob_url,$gallery_desk_img1,$gallery_desk_img2,$gallery_desk_img3,$gallery_desk_img4,$gallery_mob_img1,$gallery_mob_img2,$gallery_mob_img3,$gallery_mob_img4,$createdTime,$modifiedTime,$rel_priority,$featured,$units) {
    include("config.php");
    $sql = "INSERT INTO gf_products(id, cat_id, pro_name,rel_priority,pro_desc, MRP, sale_price, base_weight,units, web_image, mob_image, web_gallery_1, web_gallery_2, web_gallery_3, web_gallery_4, mob_gallery_1, mob_gallery_2, mob_gallery_3, mob_gallery_4, last_mod_date, created_date,featured) VALUES "
            . "('','$product_category','$product_name','$rel_priority','$product_description','$product_mrp','$product_saleprice','$product_base_weight','$units',"
            . "'$featured_img_desk_url','$featured_img_mob_url','$gallery_desk_img1','$gallery_desk_img2','$gallery_desk_img3','$gallery_desk_img4','$gallery_mob_img1','$gallery_mob_img2','$gallery_mob_img3','$gallery_mob_img4','$createdTime','$modifiedTime','$featured')";
  
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
    }

    header("Location: http://" . $_SERVER['SERVER_NAME'] . "/rednwhites/admin/add-product.php"); /* Redirect browser */
    exit();
}


function updateProduct($product_name, $product_description,$product_category,$product_mrp,$product_saleprice,$product_base_weight,$featured_img_desk_url,$featured_img_mob_url,$gallery_desk_img1,$gallery_desk_img2,$gallery_desk_img3,$gallery_desk_img4,$gallery_mob_img1,$gallery_mob_img2,$gallery_mob_img3,$gallery_mob_img4,$createdTime,$modifiedTime,$rel_priority,$id,$featured,$units){
include("config.php");
$sql = "UPDATE gf_products SET cat_id='$product_category',pro_name='$product_name',rel_priority='$rel_priority',pro_desc='$product_description',MRP='$product_mrp',sale_price='$product_saleprice',base_weight='$product_base_weight',units='$units',web_image='$featured_img_desk_url',mob_image='$featured_img_mob_url',web_gallery_1='$gallery_desk_img1',web_gallery_2='$gallery_desk_img2',web_gallery_3='$gallery_desk_img3',web_gallery_4='$gallery_desk_img4',mob_gallery_1='$gallery_mob_img1',mob_gallery_2='$gallery_mob_img2',mob_gallery_3='$gallery_mob_img3',mob_gallery_4='$gallery_mob_img4',last_mod_date='$modifiedTime',created_date='$createdTime',featured='$featured' WHERE id= $id";
$res = mysqli_query($conn, $sql);
        header("Location: http://" . $_SERVER['SERVER_NAME'] . "/rednwhites/admin/product-listing.php"); /* Redirect browser */
        exit();
}




function createCategory($cat_name,$cat_web_image,$cat_mob_image,$modifiedTime,$createdTime){
include("config.php");
$sql="INSERT INTO gf_categories(id, cat_name, web_images, mob_images, last_mod_date, created_date) VALUES ('','$cat_name','$cat_web_image','$cat_mob_image','$modifiedTime','$createdTime')";

if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
    }

    header("Location: http://" . $_SERVER['SERVER_NAME'] . "/rednwhites/admin/add-category.php"); /* Redirect browser */
    exit();

}


function SaveSliderImages($web_slide,$mob_slide,$link,$modifiedTime,$createdTime){

include("config.php");
$sql="INSERT INTO gf_sliderimages(id,web_slide,mob_slide,link,last_mod_date, created_date) VALUES ('','$web_slide','$mob_slide','$link','$modifiedTime','$createdTime')";
if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
    }

    header("Location: http://" . $_SERVER['SERVER_NAME'] . "/rednwhites/admin/slider-images.php"); /* Redirect browser */
    exit();
}





