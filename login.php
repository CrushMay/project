<?php
	  	if (isset($_POST['log'])) {
	  		$email=$_POST['email'];
	  		$password=$_POST['password'];
	  		include_once('controller/registercontroller.php');
	  		$registerController=new RegisterController();
	  		$results=$registerController->get();
	  		foreach ($results as $result) {
	  		$email1=$result['email'];
	  		$password1=$result['password'];
	  		}
	  		$oresults=$registerController->getOther();
	  		foreach ($oresults as $oresult) {
	  		$oemail=$oresult['email'];
	  		$opassword=$oresult['password'];
	  		}
	  		if ($email==$email1 && $password==$password1) {
	  			header('location:userregister.php');
	  		}
	  		if ($email==$oemail && $password==$opassword) {
	  			header('location:home.php');
	  		}
	  		
	  	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</body>
</head>
<body>
<div class="container bg-light mt-5">
<form method="POST" >
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>EMAIL</label>
				<input type="text" name="email" id="input1" class="form-control" >
				<span style="color: red;" id="span1"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>PASSWORD</label>
				<input type="text" name="password" id="input2"class="form-control">
				<span style="color: red;" id="span2"></span>
			</div>
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" id="login" name="log" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">login
		</button>
	</div>
</form>
</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>	
</body>
</html>