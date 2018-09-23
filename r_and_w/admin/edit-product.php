<?php 
 include('function_gofresh.php');
include("config.php");
$id = $_REQUEST['id'];
$sql = "SELECT * FROM gf_products WHERE id=$id";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res)) {
    while ($row = mysqli_fetch_array($res)) {
        
        $id = $row['id'];
        $prod_name = $row['pro_name'];
        $prod_desc = $row['pro_desc'];
        $category=$row['cat_id'];
        $mrp=$row['MRP'];
        $sale_price=$row['sale_price'];
        $base_weight = $row['base_weight'];
       $fd_img=$row['web_image'];
        $fm_img=$row['mob_image'];
         $gd_img1=$row['web_gallery_1'];
         $gd_img2=$row['web_gallery_2'];
         $gd_img3=$row['web_gallery_3'];
         $gd_img4=$row['web_gallery_4'];
         $gm_img1=$row['mob_gallery_1'];
         $gm_img2=$row['mob_gallery_2'];
         $gm_img3=$row['mob_gallery_3'];
         $gm_img4=$row['mob_gallery_4'];
         $featured=$row['featured'];
         $units=$row['units'];
         $cat_name = getCategoryName($category);

       
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Orders</title>
        <meta name="description" content="Static &amp; Dynamic Tables" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="assets/css/custom.css" />
        <script src="assets/js/ace-extra.min.js"></script> 
        <style type="text/css">
            .pn{
                padding-left: 0px;
                padding-right: 0
            }
        </style>
    </head>
    <body class="no-skin">
        <?php include('top-header.php'); ?>
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                        ace.settings.loadState('main-container')
                    } 
                        catch (e) {
                    }
            </script>

            <?php include('side-menu.php'); ?>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                            <h1>Add product</h1>
                        </div>
                        <form method="post" action="function_gofresh.php" class="register-form contact-form form-box overlay-color" id="contactform1"  enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <input type="text" id="form-field-1" name="product_name" placeholder="product name" class="form-control"  value="<?php echo $prod_name ?>">	
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="form-field-1" name="product_description" placeholder="product description" class="form-control" value="<?php echo $prod_desc ?>">	
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-3">
                                            <select name="product_category" class="form-control">
  <option value="<?php echo $category; ?>"><?php echo "$cat_name"; ?></option>
                                                
                                                
        <?php for ($i = 0; $i < count($products_cat_data); $i++) { ?>
                                                       <?php  if($products_cat_data[$i]['id'] != $category){ ?>
                                                        
                                                        <option value="<?php echo $products_cat_data[$i]['id'];?>"><?php echo $products_cat_data[$i]['cat_name'];?></option>
                                                       <?php }?>
                                                    <?php } ?>
                                            </select>	
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text"  name="product_mrp" id="" placeholder="Mrp" class="form-control" value="<?php echo $mrp?>">	
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="product_saleprice" id="" placeholder="sale price" class="form-control" value="<?php echo $sale_price?>">	
                                        </div>
                                        <div class="col-md-2" style="padding-right: 0>
                                            <input type="text" name="product_base_weight" id="" placeholder="base weight" class="form-control" value="<?php echo $base_weight?>">	
                                        </div>
                                        <div class="col-md-1" style="padding-left: 0">
                                            <select name="units" class="form-control" required="">
                                                <option value="<?php echo $units?>"><?php echo $units?></option>
                                                <option value="gm">gm</option>
                                                <option value="kg">kg</option> 
                                                <option value="piece">piece</option>
                                            </select>   
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <input type="text" id="form-field-1" name="featured_img_desk_url" placeholder="featured image desktop url" class="form-control" value="<?php echo $fd_img?>">	
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" id="form-field-1" name="featured_img_mob_url" placeholder="featured image mobile url" class="form-control" value="<?php echo $fm_img?>">	
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6 pn">
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1"  name="gallery_desk_img1" placeholder="gallery desktop image1" class="form-control" value="<?php echo $gd_img1?>">	
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_desk_img2" placeholder="gallery desktop image2" class="form-control" value="<?php echo $gd_img2?>">	
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_desk_img3" placeholder="gallery desktop image3" class="form-control" value="<?php echo $gd_img3?>">	
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_desk_img4" placeholder="gallery desktop image4" class="form-control" value="<?php echo $gd_img4?>">	
                                            </div>
                                        </div>
                                        <div class="col-md-6 pn">
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_mob_img1" placeholder="gallery mobile image1" class="form-control" value="<?php echo $gm_img1?>">	
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_mob_img2" placeholder="gallery mobile image2" class="form-control" value="<?php echo $gm_img2?>">	
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_mob_img3" placeholder="gallery mobile image3" class="form-control" value="<?php echo $gm_img3?>">	
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_mob_img4" placeholder="gallery mobile image4" class="form-control" value="<?php echo $gm_img4?>">	
                                            </div>	
                                        </div>
                                    </div>
                                    <div class="col-md-12 pn"> 
                                        <div class="checkbox">
                                            <label>
                                                <input name="featured" class="ace ace-checkbox-2" type="checkbox" <?php if($featured) echo checked?>>
                                                <span class="lbl"> Is Featured?</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 pn">
                                        <input type="hidden" name="productid" value="<?php echo $id?>">
                                        <button class="btn btn-success" name="save_product" >Save</button>
                                    </div>
                                </div><!-- /.col -->
                            </div>
                        </form><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Ace</span>
                            Application &copy; 2013-2014
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div>
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="assets/js/dataTables.buttons.min.js"></script>
        <script src="assets/js/buttons.flash.min.js"></script>
        <script src="assets/js/buttons.html5.min.js"></script>
        <script src="assets/js/buttons.print.min.js"></script>
        <script src="assets/js/buttons.colVis.min.js"></script>
        <script src="assets/js/dataTables.select.min.js"></script>
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>
    </body>
</html>
