<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Add Product</title>
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
                } catch (e) {
                }
            </script>

            <?php include('side-menu.php'); ?>

            <div class="main-content">
                <div class="main-content-inner">

                    <div class="page-content">

                        <div class="page-header">
                            <h1>
                                Add product
                            </h1>
                        </div><!-- /.page-header -->
                        <form method="post" action="function_gofresh.php" class="register-form contact-form form-box overlay-color" id="contactform1"  enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <input type="text" id="form-field-1" name="product_name" placeholder="product name" class="form-control" required>   
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" id="" name="rel_priority" placeholder="related priority" class="form-control">   
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" id="form-field-1" name="product_description" placeholder="product description" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-3">
                                            <select name="product_category" class="form-control">
                                                <option value="">Select Category</option>
                                                <option value="1">Chiken</option>
                                                <option value="2">Mutton</option>
                                                <option value="3">Sea Foods</option>
                                                <option value="4">Eggs</option>
                                                <option value="5">Exotic meals</option>
                                            </select>   
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text"  name="product_mrp" id="" placeholder="Mrp" class="form-control">    
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="product_saleprice" id="" placeholder="sale price" class="form-control">    
                                        </div>
                                        <div class="col-md-2" style="padding-right: 0">
                                            <input type="text" name="product_base_weight" id="" placeholder="base weight" class="form-control"> 
                                        </div>
                                        <div class="col-md-1" style="padding-left: 0">
                                            <select name="units" class="form-control" required="">
                                                <option value="">units</option>
                                                <option value="gm">gm</option>
                                                <option value="kg">kg</option> 
                                                <option value="piece">piece</option>
                                            </select>   
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <input type="text" id="form-field-1" name="featured_img_desk_url" placeholder="featured image desktop url" class="form-control">    
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" id="form-field-1" name="featured_img_mob_url" placeholder="featured image mobile url" class="form-control">  
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6 pn">
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1"  name="gallery_desk_img1" placeholder="gallery desktop image1" class="form-control">   
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_desk_img2" placeholder="gallery desktop image2" class="form-control">    
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_desk_img3" placeholder="gallery desktop image3" class="form-control">    
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_desk_img4" placeholder="gallery desktop image4" class="form-control">    
                                            </div>
                                        </div>
                                        <div class="col-md-6 pn">
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_mob_img1" placeholder="gallery mobile image1" class="form-control">  
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_mob_img2" placeholder="gallery mobile image2" class="form-control">  
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_mob_img3" placeholder="gallery mobile image3" class="form-control">  
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <input type="text" id="form-field-1" name="gallery_mob_img4" placeholder="gallery mobile image4" class="form-control">  
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-md-12 pn"> 
                                        <div class="checkbox">
                                            <label>
                                                <input name="featured" class="ace ace-checkbox-2" type="checkbox">
                                                <span class="lbl"> Is Featured?</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 pn">
                                        <button class="btn btn-success" name="save_product" >Save</button>
                                    </div>
                                    

                                    <!-- PAGE CONTENT ENDS -->
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

        <!-- ace scripts -->
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

    </body>
</html>
