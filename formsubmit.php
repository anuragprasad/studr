<?php

require('include/connection.php');
error_reporting(0);
session_start();
$cetroll=$_SESSION['cetroll'];
$name=$_SESSION['name'];
$application=mysqli_real_escape_string($conn,$_GET['application']);
$application_type=mysqli_real_escape_string($conn,$_GET['application_type']);
$state_of_domicile=mysqli_real_escape_string($conn,$_GET['state_of_domicile']);
$region=mysqli_real_escape_string($conn,$_GET['region']);
$pincode=mysqli_real_escape_string($conn,$_GET['pincode']);
$branch=mysqli_real_escape_string($conn,$_GET['branch']);
$father_mobile=mysqli_real_escape_string($conn,$_GET['father_mobile']);
$father_email=mysqli_real_escape_string($conn,$_GET['father_email']);
$father_qualification=mysqli_real_escape_string($conn,$_GET['father_qualification']);
$father_profession=mysqli_real_escape_string($conn,$_GET['father_profession']);
$father_post=mysqli_real_escape_string($conn,$_GET['father_post']);
$father_address=mysqli_real_escape_string($conn,$_GET['father_address']);
$mother_mobile=mysqli_real_escape_string($conn,$_GET['mother_mobile']);
$mother_email=mysqli_real_escape_string($conn,$_GET['mother_email']);
$mother_qualification=mysqli_real_escape_string($conn,$_GET['mother_qualification']);
$mother_profession=mysqli_real_escape_string($conn,$_GET['mother_profession']);
$mother_post=mysqli_real_escape_string($conn,$_GET['mother_post']);
$mother_address=mysqli_real_escape_string($conn,$_GET['mother_address']);
$x_board=mysqli_real_escape_string($conn,$_GET['x_board']);
$x_board_roll=mysqli_real_escape_string($conn,$_GET['x_board_roll']);
$x_school=mysqli_real_escape_string($conn,$_GET['x_school']);
$x_school_region=mysqli_real_escape_string($conn,$_GET['x_school_region']);
$x_passing_year=mysqli_real_escape_string($conn,$_GET['x_passing_year']);
$x_aggregate=mysqli_real_escape_string($conn,$_GET['x_aggregate']);
$x_percentage=mysqli_real_escape_string($conn,$_GET['x_percentage']);
$x_subjects=mysqli_real_escape_string($conn,$_GET['x_subjects']);
$subjects=mysqli_real_escape_string($conn,$_GET['subjects']);
$diploma_board=mysqli_real_escape_string($conn,$_GET['diploma_board']);
$diploma_roll=mysqli_real_escape_string($conn,$_GET['diploma_roll']);
$diploma_college=mysqli_real_escape_string($conn,$_GET['diploma_college']);
$diploma_college_region=mysqli_real_escape_string($conn,$_GET['diploma_college_region']);
$diploma_passing_year=mysqli_real_escape_string($conn,$_GET['diploma_passing_year']);
$diploma_result_status=mysqli_real_escape_string($conn,$_GET['diploma_result_status']);
$diploma_aggregate=mysqli_real_escape_string($conn,$_GET['diploma_aggregate']);
$diploma_percentage=mysqli_real_escape_string($conn,$_GET['diploma_percentage']);
$diploma_subjects=mysqli_real_escape_string($conn,$_GET['diploma_subjects']);
$ug_board=mysqli_real_escape_string($conn,$_GET['ug_board']);
$ug_roll=mysqli_real_escape_string($conn,$_GET['ug_roll']);
$ug_college=mysqli_real_escape_string($conn,$_GET['ug_college']);
$ug_college_region=mysqli_real_escape_string($conn,$_GET['ug_college_region']);
$ug_passing_year=mysqli_real_escape_string($conn,$_GET['ug_passing_year']);
$ug_result_status=mysqli_real_escape_string($conn,$_GET['ug_result_status']);
$ug_aggregate=mysqli_real_escape_string($conn,$_GET['ug_aggregate']);
$ug_percentage=mysqli_real_escape_string($conn,$_GET['ug_percentage']);
$ug_subjects=mysqli_real_escape_string($conn,$_GET['ug_subjects']);
$sql="update studr_registrations set application='$application',application_type='$application_type',state_of_domicile='$state_of_domicile',region='$region',pincode='$pincode',branch='$branch',father_mobile='$father_mobile',father_email='$father_email',father_profession='$father_profession',father_qualification='$father_qualification',father_post='$father_post',father_address='$father_address',mother_mobile='$mother_mobile',mother_email='$mother_email',mother_qualification='$mother_qualification',mother_profession='$mother_profession',mother_post='$mother_post',mother_address='$mother_address',x_board='$x_board',x_board_roll='$x_board_roll',x_school='$x_school',x_school_region='$x_school_region',x_passing_year='$x_passing_year',x_aggregate='$x_aggregate',x_percentage='$x_percentage',x_subjects='$x_subjects',diploma_board='$diploma_board',diploma_roll='$diploma_roll',diploma_college='$diploma_college',diploma_passing_year='$diploma_passing_year',diploma_result_status='$diploma_result_status',diploma_aggregate='$diploma_aggregate',diploma_percentage='$diploma_percentage',diploma_subjects='$diploma_subjects',ug_board='$ug_board',ug_roll='$ug_roll',ug_college='$ug_college',ug_passing_year='$ug_passing_year',ug_result_status='$ug_result_status',ug_aggregate='$ug_aggregate',ug_percentage='$ug_percentage',ug_subjects='$ug_subjects'where cet_roll_no='$cetroll'";
$result=mysqli_query($conn,$sql);
if($result){
    foreach ($_GET as $key=> $value){
		$_SESSION[$key]=$value;
	}
    header('location:formprint.php');
   
}
else{
        echo "<center><h3>An error occurred. Try resubmitting the form</h3></center>";
    }
?>