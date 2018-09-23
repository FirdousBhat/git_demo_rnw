<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 0, "stickySetTop": "0", "stickyChangeLogo": true}'>
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-logo">
                    <a href="index.php">
                        <img alt="Porto" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/Humbre.png">
                    </a>
                </div>
                <div class="header-logo header_address">
                    <p>Muneer Manzil, 1st Main Rd, KEB Colony, 1st Stage, BTM Layout 1, Bengaluru, Karnataka 560029, India <i class="fa fa-angle-down"></i></p>
                    <span style="display: none" class="get_address">HI</span>
                </div> 
                <div class="header-column">
                    <div class="header-row">    
                        <div class="header-nav">
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                <i class="fa fa-bars"></i>
                            </button>       
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <?if(isset($_SESSION['user_id'])){
                                                    $user_id = $_SESSION['user_id'];

                                                    $stmt = $user->getUserName($user_id);
                                                    echo $stmt;
                                            }else{?>
                                            <a class="dropdown-toggle" href="#" onclick="openNav()">
                                                Sign In
                                            </a>
                                            <?}?>
                                            <ul class="dropdown-menu">
                                                <li><a href="profile.php">Profile</a></li>
                                                <li><a href="orders.php">Orders</a></li>
                                                <li><a href="#">Logout</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-mega dropdown-mega-shop" id="headerShop">
                                            <a class="dropdown-toggle" href="page-login.html">
                                                <i class="fa fa-user"></i> Cart (1)
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="dropdown-mega-content">
                                                        <table class="cart">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="product-thumbnail">
                                                                        <a href="shop-product-sidebar.html">
                                                                            <img width="100" height="100" alt="" class="img-responsive" src="img/products/product-1.jpg">
                                                                        </a>
                                                                    </td>
                                                                    <td class="product-name">
                                                                        <a href="shop-product-sidebar.html">Photo Camera<br><span class="amount"><strong>$299</strong></span></a>
                                                                    </td>
                                                                    <td class="product-actions">
                                                                        <a title="Remove this item" class="remove" href="#">
                                                                            <i class="fa fa-times"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="actions" colspan="6">
                                                                        <div class="actions-continue">
                                                                            <button type="submit" class="btn btn-default">View All</button>
                                                                            <button type="submit" class="btn pull-right btn-primary" onclick="document.location.href='checkout.php';">Proceed to Checkout <i class="fa fa-angle-right ml-xs"></i></button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="col-sm-12 login">
        <form autocomplete="off" method="POST" action="functions/model.php" name="login">
            <div class="col-sm-12">
                <h4>Log in and buy the best taste you like.</h4>

                <input type="text" name="loginmobile" id="Username" Placeholder="Username" autocomplete="off"/>
            </div>
            <div class="col-sm-12">
                <input type="password" name="password" id="password" Placeholder="Password" autocomplete="new-password"/>
            </div>
            <div class="col-sm-12">
                <input type="submit" id="user_login" name="user_login" class="submit" />
                <p><span class="signup">Sign Up</span> <span class="frgt_pass">Forgot Password ?</span></p>
            </div>
        </form>
    </div>
    <div class="col-sm-12 register"  hidden="">
        <form autocomplete="off" name="register">
            <h4>Register</h4>
            <div class="col-sm-12 first">
                <div class="col-sm-12">
                    <input type="text" name="username" Placeholder="Enter name"/>
                </div>
                <div class="col-sm-12">
                    <input type="number" name="mobile" Placeholder="Enter mobile"/>
                </div>
                <div class="col-sm-12">
                    <input type="text" name="otp" Placeholder="Enter otp"/>
                </div>
                <div class="col-sm-12">
                    <input type="submit" class="submit next" value="Next" />
                    <p><span class="signin">Sign In</span> <span class="frgt_pass">Forgot Password ?</span></p>
                </div>
            </div>
            <div class="col-sm-12 second">
                <div class="col-sm-12">
                    <input type="text" name="regpassword" Placeholder="Enter password"/>
                </div>
                <div class="col-sm-12">
                    <input type="number" name="confirm_password" Placeholder="Confirm password"/>
                </div>
                <div class="col-sm-12">
                    <input type="submit" class="submit" value="Submit"/>
                    <p><span class="signup">Sign Up</span> <span class="frgt_pass">Forgot Password ?</span></p>
                </div>
            </div>
            
        </form>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.12.0/validate.min.js"></script>
<script type="text/javascript" src="js/form-validation.js"></script>

<script>
    $(document).ready(function(){

        $('#user_login').click(function(){
            //alert('yes');
        });
    });
</script>