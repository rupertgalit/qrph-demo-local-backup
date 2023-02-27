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
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="2c2p.css">
    
    <!-- Load fonts style after rendering the layout styles -->
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet" id="bootstrap-css">

<style>

   .cred{
    font-size: 125%;
    font-family: "Lucida Console", Courier, monospace;
    padding-left: 10px;
   }
   .cred-amount{
    font-size: 115%;
    font-family: "Lucida Console", Courier, monospace;
    padding-left: 15px;
   }
   .cred-span{
    font-size: 90%;
    font-weight: 400;

   }
   .form-signin{
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    width: 200%;
  }

  /* Responsive design */





</style>

</head>



<body>

    
        <div class="wrapper">
            
            <form class="form-signin" method="POST" action="https://apipay-dendi.netglobalsolutions.cn/api/v3/payment-gateway/create_order">       
              <!-- <h2 class="form-signin-heading">Please login</h2> -->

              <?php 
                    $pid = isset($_GET['pid']) ? $_GET['pid'] : time();            
                    $first_name = $_GET['first_name'];
                    $last_name = $_GET['last_name'];
                    $full_name = $first_name.' '.$last_name;
                    $mobile_num = $_GET['phone_number'];
                    $email_address = $_GET['email_address'];
                    $ph_mobile_num = '(+63)'.$_GET['phone_number'];
              ?>





              <br>
              <center>
              <img src="img/TEXTMARK3.png" class="img-fluid" style="max-width: 80%; height: auto;">
              </center>
              <br>
              <hr>
              <br>
              <label class="cred">Full Name : <span class="cred-span"><?php echo $full_name ?></span></label><br>
              <input type="hidden" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
              <label class="cred">Email : <span class="cred-span"><?php echo $email_address ?></span></label><br>
              <input type="hidden" class="form-control" name="password" placeholder="Password" required=""/>  
              <label class="cred">Mobile Phone : <span class="cred-span"><?php echo $ph_mobile_num ?></span></label>
              <br>
              <hr>
              <br>
              <label class="cred-amount">Product Price &nbsp;  : ₱ <span id="total-price"></span></label><br>
              <label class="cred-amount">Transaction Fee : ₱ <span id="total-price"></span>55.00</label><br>
              <label class="cred-amount"><span id="total-price"></span>--------------------------</label><br>
              <label class="cred-amount">Total Price &nbsp;&nbsp;&nbsp;   : ₱ <span id="total-payment"></span></label><br><br><br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Pay</button>

              <hr>
              <center>
              <img src="img/gcash-grabpay.png" class="img-fluid" style="max-width: 40%; height: auto;">
              </center>
              <script>
                            let cartCost = localStorage.getItem('totalCost');
                            cartCost = parseInt(cartCost);
                            let prePay = parseInt(cartCost);
                            let tranPay = 55;
                            tranPay = parseInt(tranPay);
                            prePay = prePay + tranPay;

                            
                            prePay = prePay.toLocaleString("en-US");
                            cartCost = cartCost.toLocaleString("en-US"); 
                            
                            document.getElementById("total-price").innerHTML = cartCost+".00";
                            document.getElementById("total-payment").innerHTML =prePay+".00";
                            // document.getElementById("basic-amount").value = cartCost;

                            let totalCost = localStorage.getItem('totalCost');
                            
                            document.cookie = "total = "+ totalCost;

              </script>
              
              
              <?php

                  // $first_name = isset($_GET['first_name']) ? $_GET['first_name'] : NULL;
                  // $last_name = isset($_GET['last_name']) ? $_GET['last_name'] : NULL;
                  // $mobile_num = isset($_GET['phone_number']) ? $_GET['phone_number'] : NULL;
                  // $email_address = isset($_GET['email_address']) ? $_GET['email_address'] : NULL;
                  // $amount = isset($_GET['amount']) ? $_GET['amount'] : NULL;
                 

                  $rand= (rand(10,100));
                  $date = date("Ymdhis");
                  $randid= $rand.+$date;
                  // <?php if(isset($_GET['amount'])){echo $_GET['amount'];}

                  $totalCost = $_COOKIE['total'];
                  $totalCost = intval($totalCost);
                  $totalCost = $totalCost + 55;
                 
                  // echo $totalCost;
                ?>

                    <input type="hidden" name="page_source" value="<?php echo $_GET['pogo'] ?? 1; ?>">  

                  <div class="form-group  ">     
                    <input class="form-control mb-3 " type="hidden" id="external_id" name="external_id" value="<?php echo $randid;  ?>" placeholder="Enter Member Account" >                    
                  </div>

                  <div class="form-group  ">
                    <input type="hidden" class="form-control " id="fname" name="fname" value="<?php echo $first_name; ?>" placeholder="First and Last Name" required="">
                  </div>
                  <div class="form-group ">
                  <input class="form-control mb-3" type="hidden" id="emailaddress" name="emailaddress" value="<?php echo $email_address; ?>"
                        placeholder="Email" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+" required="">
                  </div>

                  <input class="form-control mb-3" type="hidden" id="lname" name="lname" value="<?php echo $last_name; ?>" placeholder="Last Name" >
                  <input class="form-control mb-3" type="hidden" id="contnumber" name="contnumber" placeholder="Mobile" value="<?php echo $mobile_num; ?>">
                  <input class="form-control mb-3" type="hidden" id="emailaddress" name="emailaddress" value="<?php echo $email_address; ?>"
                        placeholder="安全邮箱 - Email" pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+" required="">
                        
                  <input type = hidden name="currency" value="PHP">
                  
                  <div class="input-group">
                    <input type="hidden" class="form-control" placeholder="Amount" id="basic-amount" name="amount"
                        value=<?php echo $totalCost ?> placeholder="Amount" required="">
                        <div class="input-group-btn"> 
                          <!-- <button class="btn " id="btn-cur"  type="submit"  placeholder="USD" disbaled>
                          
                          <?php
                            $cny= "CNY";
                            $usd = "USD"; 
                              
                            if ($cny == "CNY"){
                            echo $cny; 
                            }
                           ?>
                           </button> -->
                           <!-- <span class="btn " id="btn-cur-usd"  placeholder="USD" disbaled>USD</span> -->
                        </div>
                  </div>


            </form>
          </div>
     
 

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