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
    <link rel="stylesheet" href="gcash-assets/gcash.css">
    
    <!-- Load fonts style after rendering the layout styles -->
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet" id="bootstrap-css">
    <script src="qrcode-lib/easy.qrcode.min.js"></script>

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
    width: 250%;
  }
  .btn-next{
    width: 50%;
    border-radius: 15px;
  }
  .btn-check{
    color: black;

  }
  

  /* Responsive design */


</style>

</head>



<body>


        <div class="wrapper">
            
            <form class="form-signin" method="" action="<?php echo $base_url;?>/checkout.php">       
              <!-- <h2 class="form-signin-heading">Please login</h2> -->

              <?php 
                    // $pid = isset($_GET['pid']) ? $_GET['pid'] : time();            
                    // $first_name = $_GET['first_name'];
                    // $last_name = $_GET['last_name'];
                    // $full_name = $first_name.' '.$last_name;
                    // $mobile_num = $_GET['phone_number'];
                    // $email_address = $_GET['email_address'];
                    // $ph_mobile_num = '(+63)'.$_GET['phone_number'];
              ?>

              <br>
              <center>
              <img src="img/TEXTMARK3.png" class="img-fluid" style="max-width: 80%; height: auto;">
              </center>
              <br>
              <hr>
              <center>
              <img src="img/qrph-head.png" class="img-fluid" style="max-width: 25%; height: auto;"><br><br>
              <!-- <img src="img/qr.png" class="img-fluid" style="max-width: 80%; height: auto;"> -->
              <div id="qrcode"></div>
              
              <br>
              <br> 
              
              <label class="cred">Account No.&nbsp;: xxxxxxxxxxxx3438 <span class="cred-span"></span></label><br>
              <label class="cred">Amount &nbsp;: PHP <span id="total-price"></span></label><br><br>
              <!-- <input type="hidden" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" /> -->
              
              <!-- <input type="hidden" class="form-control" name="password" placeholder="Password" required=""/>   -->
              
              <span>QRcode will expire in </span>
              <div class="countdown"></div>
              <hr>
              
              <!-- <label class="cred-amount">Login to pay with Netglobal E-wallet &nbsp; </span></label><br><br> -->         
              <!-- </div> -->
              <!-- <label class="cred-amount">Product Price &nbsp;  : ₱ <span id="total-price"></span></label><br> -->
              <!-- <label class="cred-amount">Transaction Fee : ₱ <span id="total-price"></span>55.00</label><br> -->
              <!-- <label class="cred-amount"><span id="total-price"></span>--------------------------</label><br> -->
              <!-- <label class="cred-amount">Total Price &nbsp;&nbsp;&nbsp;   : ₱ <span id="total-payment"></span></label><br><br><br> -->
         
              <center>
              <a class="btn btn-info btn-check" href="<?php echo $base_url;?>/qrph-payment-success.php" role="button">Check Status</a><br><br>
              
              <button  class="btn btn-lg btn-primary btn-block btn-next btn-back" type="submit">Back</button>
              </center>
              <hr>
              <center>
              <!-- <img src="img/gcash-grabpay.png" class="img-fluid" style="max-width: 40%; height: auto;"> -->
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

              <script>

                  fetch('https://s3.ap-southeast-1.amazonaws.com/qrphtest.com/qrph.json',{            
                      })
                      // .then(res => res.json())    
                      .then((data)=>{
                          return data.json(); 
                      })    
                      .then((data) => {          
                          console.log(data);
                          console.log(data.data);                        
                          let qr = (data.data.qrphCode)
                          let ref = (data.data.refCode)                         
                          console.log(qr);
                          console.log(ref);                                                   
                       
                          var qrcode = new QRCode(document.getElementById("qrcode"), {
                          // text: "0020101021228690011ph.ppmi.p2m0111TAYOPHM2XXX0312P2M0000000130412P2M0000000130503010520460165303608540510.005802PH5909AquaFlask6015CABANATUAN CITY62450011ph.tayocash0309AquaFlask05062110000803***80590011ph.ppmi.p2m0124aquaflaskconst@gmail.com021263906100000288300012ph.ppmi.qrph0110TC3582282563042297",                    
                          text:qr,
                          logo: "img/qr-logo.png", 
                          logoWidth: 30,
                          logoHeight: 30,
                          logoBackgroundColor: 'black',
                          logoBackgroundTransparent: false,                          
                          });                                                                             
                        })       
                      .catch(function(error) {
                        console.log(error);
                        });
                                                            
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

                  // $totalCost = $_COOKIE['total'];
                  // $totalCost = intval($totalCost);
                  // $totalCost = $totalCost + 55;
                 
                  // echo $totalCost;



                ?>

                   
                           </button> 
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
    <script src="assets/js/countdown.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- End Script -->

</body>

</html>