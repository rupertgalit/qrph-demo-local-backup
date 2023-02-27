<?php        
    include 'base_url.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Phone Verification with OTP</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&amp;display=swap'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"> 
<link rel="stylesheet" href="gcash-assets/gcash-otp.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <h3 class="title">OTP Verification</h3>
  <p class="sub-title">
    Enter the OTP you received 
    <!-- <span class="phone-number">+20 102 2233 444</span> -->
  </p>
  <div class="wrapper">
    <input type="text" class="field 1" maxlength="1">
    <input type="text" class="field 2" maxlength="1">
    <input type="text" class="field 3" maxlength="1">
    <input type="text" class="field 4" maxlength="1">
    <input type="text" class="field 4" maxlength="1">
  </div>
  <button class="resend">
    Resend OTP
    <i class="fa fa-caret-right"></i>
  </button><br><br>
  
  <button onclick="window.location.href='<?php echo $base_url;?>/gcash-pin.php'" class="btn btn-lg btn-primary btn-block btn-next" type="submit">Next</button>
  
</div>
<!-- partial -->
  <script  src="gcash-assets/gcash-otp.js"></script>

</body>
</html>
