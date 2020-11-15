<?php
$input1="";
$input2="";
$input3="";
$input4="";
$input5="";
$input6="";
$input7="";
$inputerror1="";
$inputerror2="";
$inputerror3="";
$inputerror4="";
$inputerror5="";
$inputerror6="";
$inputerror7="";
if(isset($_POST['register'])){
	  	if (!empty($_POST['input1'])) {
	  	$input1=$_POST['input1'];	
	  	}
	  	else{
	  		$inputerror1="require first name";
	  	}
	  	if (!empty($_POST['input2'])) {
	  	$input2=$_POST['input2'];	
	  	}
	  	else{
	  		$inputerror2="require last name";
	  	}
	  	if (!empty($_POST['gender'])) {
	  	$input3=$_POST['gender'];
	  	}
	  	else{
	  		$inputerror3="please select male or female";
	  	}
	  	if (!empty($_POST['input4'])) {
	  	$input4=$_POST['input4'];
	  	}
	  	else{
	  		$inputerror4="require your birth";
	  	}
	  	if (!empty($_POST['input5'])) {
	  	$input5=$_POST['input5'];
	  	}
	  	else{
	  		$inputerror5="require email or ph";
	  	}
	  	if (!empty($_POST['input6'])) {
	  	$input6=$_POST['input6'];
	  	}
	  	else{
	  		$inputerror6="require password";
	  	}
	  	if (!empty($_POST['input7'])) {
	  	$input7=$_POST['input7'];
	  	}
	  	else{
	  		$inputerror7="require confirm password";
	  	}
	  	if (!empty($input1) && !empty($input2) && !empty($input3) && !empty($input4) && !empty($input5) && !empty($input6) && !empty($input7) && $input7== $input6) {
	  		include_once('controller/registercontroller.php');
	  		$registerController=new RegisterController();
	  	$registerController->createRegister($input5,$input7);
		header('location:home.php');

	}
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Registration</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</body>
</head>
<body>
<div class="container">
<form method="POST" action="">
	<div class="row pt-3">
		<h1 style="text-align:center;">Register Now</h1>
		<div class="col-md-12">
			<div class="form-group"  style="margin:50px 0 0 400px; ">
				<label style="font-size:26px;">First Name</label>
				<input type="text" name="input1" class="form-control" style="width:300px; height:30px; margin-left: 50px;" value=<?php echo $input1;?>>
				<span style="color: red"><?php echo $inputerror1; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group" style="margin:20px 0 0 400px;">
				<label  style="font-size:26px;">Last Name</label>
				<input type="text" name="input2" class="form-control" style="width:300px; height:30px; margin-left: 52px;" value=<?php echo $input2;?>>
				<span style="color: red"><?php echo $inputerror2; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="margin:20px 0 0 400px;" >
			<label style="font-size:26px;">Gender</label>
			<div name="input3" style="font-size:26px;">
			<input type="radio" name="gender" value="male" class="radio" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male'): ?>checked='checked'<?php endif; ?> /> Male
			<input type="radio" name="gender" value="female"  class="radio" <?php if (isset($_POST['gender']) && $_POST['gender'] ==  'female'): ?>checked='checked'<?php endif; ?> /> Female
		</div>
		<span style="color: red"><?php echo $inputerror3; ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group" style="margin:20px 0 0 400px;">
				<label  style="font-size:26px;">Date of birth</label>
				<input type="date" name="input4" class="form-control" style="width:300px; height:30px; margin-left: 30px;" value=<?php echo $input4;?>>
				<span style="color: red"><?php echo $inputerror4; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group" style="margin:20px 0 0 400px;">
				<label  style="font-size:26px;">Email</label>
				<input type="text" name="input5" class="form-control" style="width:300px; height:30px; margin-left: 100px;" value=<?php echo $input5;?>>
				<span style="color: red"><?php echo $inputerror5; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-12">
			<div class="form-group" style="margin:20px 0 0 400px;">
				<label  style="font-size:26px;">Password</label>
				<input type="password" name="input6" class="form-control" style="width:300px; height:30px; margin-left: 60px;" value=<?php echo $input6;?>>
				<span style="color: red"><?php echo $inputerror6; ?></span>
			</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group" style="margin:20px 0 0 400px;">
				<label  style="font-size:26px;">Confirm-password</label>
				<input type="password" name="input7" class="form-control" style="width:300px; height:30px; margin-left: 20px;" value=<?php echo $input7;?>>
				<span style="color: red"><?php echo $inputerror7; ?></span>
			</div>
		</div>
	</div>
	<div style="text-align: center; margin-top:20px;" class="pt-4 pb-3">
		<button type="submit" name="register" id="reg" class="btn-success " style="text-align: center;  width: 120px; height:40px; background-color:black; color:#df8931">Register
		</button>
	</div>
</form>
</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>