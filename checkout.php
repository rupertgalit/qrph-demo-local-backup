<?php        
        include 'base_url.php';
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demo Shop - Product Listing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/ngsi.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hover.css">
    

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<style>

/* INTERNAL CSS */
.payment{
    border-color: transparent;
    background-color: transparent;
    padding: -10px;

}
.img-fluid{
    margin: 0px 20px 0px -19px;
   
}
.img-card{
    max-width: 160%; 
    height: auto;
    margin: 0px 20px 0px -19px;
}
button.payment{
    padding: 9px -36px;
}

/* RESPONSIVE DESIGN  */

@media (min-width: 576px) {
  
}


/*// Medium devices (tablets, 768px and up)*/
@media (min-width: 768px) {

 }

/* Large devices (desktops, 992px and up)*/
@media (min-width: 992px) {

   
}
  


/* Extra large devices (large desktops, 1200px and up)*/
@media (min-width: 1200px) {
    

}
</style>
   
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@netglobalsolutions.net</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://facebook.com" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="<?php echo $base_url;?>">
                Demo
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $base_url;?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $base_url;?>/shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="navbar align-self-center ">                  
                    <a class="cart nav-icon position-relative text-decoration-none" href="<?php echo $base_url;?>/cart-test.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">0</span>
                    </a>                    
                </div>
            </div>

        </div>
    </nav>
 <!-- end header -->

 <div class="container wrapper">
    <div class="row cart-head">
        <div class="container">
        <div class="row">
            <p></p>
        </div>
       
        <div class="row">
            <p></p>
        </div>
        </div>
    </div>
    
    <?php
        // $api_url = "http://localhost/demo-qrph/payment-checkout.php";
        $api_url = "#";
    ?>

    <div class="row cart-body">

        

        
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-6 col-sm-6">
        <form class="form-horizontal needs-validation" name="myForm" onsubmit="return klik()" method="GET" action="<?php echo $api_url; ?>" novalidate>
            <!--SHIPPING METHOD-->
            <div class="panel panel-info">
                <div class="panel-heading">CHECKOUT</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-12">
                            <h4>Billing Details</h4>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <strong>First Name:</strong>
                            <input type="text" name="first_name" class="form-control" oninput="myFunction()" id="main_first_name" value="" required/>
                            <div class="valid-feedback">
                            Looks good!
                        </div>
                        </div>
                        
                        <div class="span1"></div>
                        <div class="col-md-6 col-xs-12">
                            <strong>Last Name:</strong>
                            <input type="text" name="last_name" class="form-control" oninput="myFunction()" id="main_last_name" value="" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12"><strong>Address:</strong></div>
                        <div class="col-md-12">
                            <input type="text" name="address" class="form-control" oninput="myFunction()" id="main_address" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12"><strong>City:</strong></div>
                        <div class="col-md-12">
                            <input type="text" name="city" class="form-control" oninput="myFunction()" id="main_city" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12"><strong>State:</strong></div>
                        <div class="col-md-12">
                            <input type="text" name="state" class="form-control" oninput="myFunction()" id="main_state" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                        <div class="col-md-12">
                            <input type="text" name="zip_code" class="form-control" oninput="myFunction()" id="main_zip_code" value="" />
                        </div>
                    </div>
                    <div class="form-group  ">
                        <div class="col-md-12"><strong>Phone Number:</strong></div>


                        
                        <div class="col-sm-2 ">                                                            
                            <select name="phone_numbers" oninput="myFunction()" class="form-control" value="" >
                                <option value="63">(+63)</option>
                            </select>                                                                                    
                        </div>
                        <div class="col-sm-10" >                                                            
                            <input type="text" name="phone_number" oninput="myFunction()" class="form-control" value="" id="main_phone_number" required maxlength="10"/>                                                                                    
                        </div>
                       
                        





                    </div>
                    <div class="form-group">
                        <div class="col-md-12"><strong>Email Address:</strong></div>
                        <div class="col-md-12"><input type="text" name="email_address" oninput="myFunction()" class="form-control" value="" id="main_email_address" required /></div>
                    </div>
                </div>
            </div>
            <!--SHIPPING METHOD END-->
                <button hidden  type="submit" name="" id="myBtn">ss</button>
            </form>
            <!--CREDIT CART PAYMENT-->

            <!-- FORM VALIDATION SCRIPT -->
            <script>               
                function klik(){
                    var x = document.forms["myForm"]["first_name"].value;
                    var y = document.forms["myForm"]["last_name"].value;
                    var z = document.forms["myForm"]["phone_number"].value;
                    var w = document.forms["myForm"]["email_address"].value;
                        if (x == "" || x == null) {
                            alert("First Name must be filled out");
                            return false;
                            }
                        else if(y == "" || y == null ){
                            alert("Last Name must be filled out");
                            return false;
                        }
                        else if(z == "" || z == null ){
                            alert("Mobile Number must be filled out");
                            return false;
                        }
                        else if(w == "" || w == null ){
                            alert("Email Address must be filled out");
                            return false;
                        }
                    }
            </script>

                     
            <!--REVIEW ORDER END-->
           
            <!--CREDIT CART PAYMENT END-->
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-6 col-sm-6">
            <!--REVIEW ORDER-->

            <div class="panel panel-info">
                <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
                <div class="panel-body">
                    <div class="form-group">
                    <center>
                    <img src="img/TEXTMARK3.png" class="img-fluid" style="max-width: 70%; height: auto;">
                    </center>   
                    <hr>
                    <center>
                        <div class="col-md-12"><strong>TOTAL PRICE:</strong> ₱<span id="total-price"></span> </div> 
                    </center>                          
                        <input class="form-check-input" type="hidden" name="total-price" id="total-price" value="">
                        <script>
                            let cartCost = localStorage.getItem('totalCost');
                            cartCost = parseInt(cartCost);
                            cartCost = cartCost.toLocaleString("en-US"); 
                            document.getElementById("total-price").innerHTML = cartCost+".00";
                            document.getElementById("total-price").value = cartCost;
                       </script>
                       
                                                            
                    </div>
                    <hr><hr>
                    
                    
                    <!-- <div class="form-group">
                        <div class="col-md-12">
                            <span><strong>Select Payment Method</strong></span>
                        </div><br>
                        <br>
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="api_url" id="flexRadioDefault1" value="google.com">
                                <label class="form-check-label" for="flexRadioDefault1">
                                
                                <img src="img/qrph.png" class="img-fluid" style="max-width: 20%; height: auto;">

                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="api_url" id="flexRadioDefault2" value="youtube.com" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                 <b>Ewallet</b>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="api_url" id="flexRadioDefault1" value="http://localhost/demo-qrph/payment-checkout.php" >
                                <label class="form-check-label" for="flexRadioDefault1">
                                <div class="form-group">
                            <div class="col-md-12">
                                <span>Pay secure using your credit card.</span>
                            </div>
                            <div class="col-md-12">
                                <ul class="cards">
                                    <li class="visa hand">Visa</li>
                                    <li class="mastercard hand">MasterCard</li>
                                    <li class="amex hand">Amex</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                              </div> <br>
                            <div class="clearfix"></div>
                        </div>
                        
                        
                    </div> -->

                    <div class="form-group">
                    <hr>
                        <div class="col-md-12">
                            
                            <center><span><strong>Select Payment Method</strong></span></center>
                        </div><br>
                        <br>
                        <br>
                        
                        
                        <div class="col-md-12">
                            

                            <!--E-WALLET/2C2P PAYMENT -->        
                            <div class="col-xs-4">
                                <center>
                                    <form method="GET" action="<?php echo $base_url;?>/gcash-front-page.php" onsubmit="return klik()">
                                                <!-- <span id = "total">sss</span> -->
                                                <input type="hidden" name="first_name" class="form-control" id="qr_first_name" value="" required/>
                                                <input type="hidden" name="last_name" class="form-control" id="qr_last_name" value="" required/>
                                                <input type="hidden" name="address" class="form-control" id="qr_address" value="" required/>
                                                <input type="hidden" name="city" class="form-control" id="qr_city" value="" required/>
                                                <input type="hidden" name="state" class="form-control" id="qr_state" value="" required/>
                                                <input type="hidden" name="zip_code" class="form-control" id="qr_zip_code" value="" required/>
                                                <input type="hidden" name="phone_number" class="form-control" id="qr_phone_number" value="" required/>
                                                <input type="hidden" name="email_address" class="form-control" id="qr_email_address" value="" required/>

                                        <button type="submit" class="payment pulse" >
                                            <img src="img/ewallet.png" class=" img-card" >  
                                        </button>
                                        <span>E-WALLET</span>
                                    </form>
                                </center>  
                            </div>



                            <!-- CARD/2C2P PAYMENT -->
                            <div class="col-xs-4 ">
                                <center>

                                        <form method="GET" action="<?php echo $base_url;?>/payment-checkout.php" onsubmit="return klik()" >
                                            <!-- <span id = "total">sss</span> -->
                                            <input type="hidden" name="first_name" class="form-control" id="card_first_name" value="" required/>
                                                <input type="hidden" name="last_name" class="form-control" id="card_last_name" value="" required/>
                                                <input type="hidden" name="address" class="form-control" id="card_address" value="" required/>
                                                <input type="hidden" name="city" class="form-control" id="card_city" value="" required/>
                                                <input type="hidden" name="state" class="form-control" id="card_state" value="" required/>
                                                <input type="hidden" name="zip_code" class="form-control" id="card_zip_code" value="" required/>
                                                <input type="hidden" name="phone_number" class="form-control" id="card_phone_number" value="" required/>
                                                <input type="hidden" name="email_address" class="form-control" id="card_email_address" value="" required/>

                                            <button type="submit" class="payment pulse">
                                            
                                                <img src="img/card-payment.png" class="img-fluid" style="max-width: 180%; height: auto; margin-right: 2px;">                                            
                                            
                                            </button> 
                                            <span>Debit/Credit CARDS</span>
                                            

                                        </form>                                                                 
                                </center>
                            </div>

                            <!-- QRPH PAYMENT -->
                            <div class="col-xs-4 ">
                                    
                                <center>
                                    <form action="<?php echo $base_url;?>/qrph-static.php">
                                        <button type="submit" class="payment pulse" >
                                            <img src="img/qrph.png" class="img-fluid" style="max-width: 160%; height: auto;">                                 
                                        </button> 
                                        <span>QRPh</span> 
                                    </form>                          
                            </div>

                            <script>
                                                                                                        
                            function myFunction() {
                                document.getElementById("qr_first_name").value = document.getElementById("main_first_name").value;                               
                                document.getElementById("qr_last_name").value = document.getElementById("main_last_name").value;
                                document.getElementById("qr_address").value = document.getElementById("main_address").value;
                                document.getElementById("qr_city").value = document.getElementById("main_city").value;
                                document.getElementById("qr_state").value = document.getElementById("main_state").value;
                                document.getElementById("qr_zip_code").value = document.getElementById("main_zip_code").value;
                                document.getElementById("qr_phone_number").value = document.getElementById("main_phone_number").value;
                                document.getElementById("qr_email_address").value = document.getElementById("main_email_address").value;
                                
                                document.getElementById("card_first_name").value = document.getElementById("main_first_name").value;                               
                                document.getElementById("card_last_name").value = document.getElementById("main_last_name").value;
                                document.getElementById("card_address").value = document.getElementById("main_address").value;
                                document.getElementById("card_city").value = document.getElementById("main_city").value;
                                document.getElementById("card_state").value = document.getElementById("main_state").value;
                                document.getElementById("card_zip_code").value = document.getElementById("main_zip_code").value;
                                document.getElementById("card_phone_number").value = document.getElementById("main_phone_number").value;
                                document.getElementById("card_email_address").value = document.getElementById("main_email_address").value; 
 
                                 }                

                            </script>
                        
                              
                              
                            <div class="clearfix"></div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        
                    </div>                    


                    
                    <!-- <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                        </div>
                    </div> -->
                </div>
            </div>
            
            <!--REVIEW ORDER END-->
        </div>
        
        
        

        <script>
            $('input[type=radio]').click(function(e) {
		
            var api_url = $(this).val(); 
            $('.result').html(api_url);
		
             });
        </script>

    </div>  <!--row car--body-->
            
    
            <div class="row cart-footer">

            </div>
</div>     <!--container wrapper-->




<!-- modal -->


  
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>






    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brands</h1>
                    <p>
                        
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Demo Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 West Capitol Drive
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@netglobalsolutions.net</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Laptops</a></li>
                        <li><a class="text-decoration-none" href="#">Tablets</a></li>
                        <li><a class="text-decoration-none" href="#">Mobile Phone</a></li>
                        <li><a class="text-decoration-none" href="#">PC Desktop</a></li>
                        
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2022 Netglobal Solutions Inc. 
                            | Designed by <a rel="sponsored" href="#" target="_blank">NGSI DEV</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="main.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- End Script -->

</body>

</html>