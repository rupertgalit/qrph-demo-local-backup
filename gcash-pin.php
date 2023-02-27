<?php        
    include 'base_url.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Moneybox Style Pin/Password Input</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,600&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="gcash-assets/gcash-pin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form class="login">
	<h3>Account Login</h3>
	<p>Please enter a 4-digit PIN code</p>
	<fieldset>
		<ul class="pin-ui">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<div class="mask"></div>
		<input type="password" inputmode="numeric" name="input-pin" class="input-pin">
		<input type="submit" class="submit">
	</fieldset>
</form>

<div class="hidden-links">
	<a href="<?php echo $base_url;?>/gcash-payment-page.php" class="linkout" target="_self">Proceed to payment</a>
	<a href="#" class="reset">Reset</a>
</div>
<!-- partial -->
  <script  src="gcash-assets/gcash-pin.js"></script>

</body>
</html>