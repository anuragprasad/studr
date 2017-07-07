<?php error_reporting(0);?>
<!Doctype html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width , initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<style>
	body{
		background-color:#efefef;

	}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row"><center ><img src="user.png" alt="Logo"style="margin-top:2em"></center></div>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-primary "  style="margin-top:2em">
			<div class="panel-body">
				<h5  class="text-center" style="margin-bottom: 8%;">Log in to provide some more information about you</h5>
					<form action="login.php" class="form-horizontal" method="GET" >
						<div class="form-group">
							<label for="cetroll" class="control-label col-sm-4" style="text-align: left;">CET Roll No.</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="cetroll" name="cetroll" placeholder="">
							</div>
						</div>
						<div class="form-group">
							<label for="dob" class="control-label col-sm-4" style="text-align: left;">Date of Birth</label>
							<div class="container-fluid">
								<div class="col-sm-3" style="margin-right:-25px">
									<input type="text" class="form-control" id="day" name="day" placeholder="DD">
								</div>
								<div class="col-sm-4" style="margin-right:-25px">
									<select name="month" class="form-control">
										<option value="Jan">January</option>
										<option value="Feb">February</option>
										<option value="Mar">March</option>
										<option value="Apr">April</option>
										<option value="May">May</option>
										<option value="Jun">June</option>
										<option value="Jul">July</option>
										<option value="Aug">August</option>
										<option value="Sep">September</option>
										<option value="Oct">October</option>
										<option value="Nov">November</option>
										<option value="Dec">December</option>										
									<select>
								</div>
								<div class="col-sm-3" style="margin-right:-25px">
									<input type="text" class="form-control" id="year" name="year" placeholder="YYYY">
								</div>
							</div>
						</div>
						<input class="btn btn-primary btn-block " type="submit" name="submit" value="Login" />
					</form>
				</div>
			</div>
		</div>
	</div>
 </div>
 <?php 
//echo "<center style='color:red;font-size:1.2em'>".$_GET['m']."</center>";
if(isset($_GET['submit'])){
	require('include/connection.php');
	$cetroll=mysqli_real_escape_string($conn,$_GET["cetroll"]);
	$day=mysqli_real_escape_string($conn,$_GET["day"]);
	$month=mysqli_real_escape_string($conn,$_GET['month']);
	$year=mysqli_real_escape_string($conn,$_GET['year']);
	$dob=$day." ".$month." ".$year;
	$sql="select * from studr_registrations where (cet_roll_no='$cetroll' and dob='$dob')";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	//echo $count;
	if($count == 0){
		
		echo "<center style='color:red;font-size:1.2em'>Please provide correct details</center>";
	}
	else{
		session_start();
		$_SESSION['cetroll']=$cetroll;
		$_SESSION['dob']=$dob;
		header('location:formtwo.php');
	}
}
?>
</body>
</html>





