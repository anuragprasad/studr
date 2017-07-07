<?php

// Copyright (c) 2016 Shivam Agarwal. All rights reserved.

/*
For internal use only. Redistribution in original or modified form is not allowed.

- By Shivam Agarwal
*/

?>

<?php include "header.php" ?>
<style>
.footer-copyright{
margin: 0;
}
.focusedform .brand{
width:275px;
}
</style>
<div class="verticalcenter">
	<a href="index.php"><img src="adm/assets/img/studr_logo.png" alt="Logo" class="brand"/></a>
	<div class="panel panel-primary">
		<div class="panel-body">
			<h4 class="text-center" style="margin-bottom: 25px;">Log in</h4>
				<form action="" class="form-horizontal" method="POST">
					<div class="form-group">
						<label for="username" class="control-label col-sm-4" style="text-align: left;">Username</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="control-label col-sm-4" style="text-align: left;">Password</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
					</div>
					<input class="btn btn-primary btn-block" type="submit" name="submit" value="Login"/>
				</form>
		</div>
		<!--<div class="panel-footer">
			<p class="footer-copyright pull-left">Developed by Shivam Agarwal</p>
		</div>-->
	</div>
 </div>
 <script src="adm/assets/js/bootstrap-notify.min.js"></script>
<script>
$.notifyDefaults({
	type: "success",
	newest_on_top: true,
	placement: {
		from: "top",
		align: "center"
	},
	offset: 20,
	spacing: 10,
	z_index: 2031,
	delay: 3000
});
</script>

<!-- PHP Code -->
<?php
//Catch Submit Button
if (isset($_POST['submit'])) {
?>
<script>
console.log("yes");
</script>
<?php
    if (empty($_POST['username']) || empty($_POST['password'])) {
		?>
<script>
console.log("yes");
$.notify({
	icon: 'glyphicon glyphicon-warning-sign',
	message: "Username or Password can't be empty!"
},{
	type: 'warning'
});
</script>
<?php
    } else {
        require 'include/connection.php';
        $tbl_name = "studr_users";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);
        $password = sha1($password);
        $sql      = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
        $result   = mysqli_query($conn, $sql);
        $count    = mysqli_num_rows($result);
        if ($count == 1) {
			?>
<script>
$.notify({
	icon: 'glyphicon glyphicon-ok',
	message: 'Logging in..'
},{
	type: 'success'
});
</script>
<?php
  $_SESSION['username'] = $username;
  header("location:adm/profile.php");
} else {
?>
<script>
$.notify({
	icon: 'glyphicon glyphicon-warning-sign',
	message: 'Wrong username or Password!'
},{
	type: 'danger'
});
</script>
<?php
        }
    }
}
//Detect Already logged in
if(isset($_SESSION['username']))
	header("location:adm/profile.php");
?>
</body>
</html>
