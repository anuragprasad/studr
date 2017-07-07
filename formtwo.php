<!--
    Author: Anurag Prasad

    -->
<?php 
error_reporting(0);
require ('include/connection.php');
//Start session to use session variables
session_start();
if(!isset($_SESSION['cetroll']))
    header("location:login.php");
$cetroll=$_SESSION['cetroll'];
$dob=$_SESSION['dob'];

//fetch data to be prefilled from database
$result=mysqli_query($conn,"select * from studr_registrations where (cet_roll_no='$cetroll' and dob='$dob')");
$row=mysqli_fetch_assoc($result);  
foreach ($row as $key=>$value){
    $_SESSION[$key]=$value;
}
$board_result_status=$row['board_result_status'];
if($board_result_status=='Result Declared')
    $selected='selected';
else
    $selected="";

$name=$row['name'];
$board=$row['board'];
$board_roll=$row['board_roll_no'];
$cetrank=$row['cet_rank'];
$mname=$row['mname'];
$fname=$row['fname'];
$passing_year=$row['board_passing_year'];
$passing_status=$row['board_passing_status'];
$aggregate=$row['board_aggregate_marks'];
$percentage=$row['board_percentage'];
$school=$row['board_school'];
$school_region=$row['board_school_region'];
$nationality=$row['nationality'];
$category=$row['category'];
$sub_category=$row['sub_category'];
$address=$row['current_address'];
$mobile=$row['mobile'];
$email=$row['email'];
$date_registered=$row['date_registered'];
$gender=$row['gender'];
print <<<END
<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Student Data</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery-1.10.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            body{
                background-color:#fbfbfb;
            }
            .panel-heading{
                text-align:center;
                
            }
            .red{
                color:red;
                font-size: 16px;
            }
            .degree{
                font-size: 16px;
                font-weight:900;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="formtwo.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="panel panel-info" style="margin-top:10px">
                <div class="panel-heading"><center><h2 style="margin-top:0px">Complete Your Registration!</h2><h4>Please take some time to provide more information about you</h4></center></div> 
            </div>
            <form class="form-horizontal" action="formsubmit.php" method="get" onsubmit="return accepted();">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-success">
                        <div class="panel-heading" style="background-color:#16A085;color:white">
                            <h4 class="panel-title"><a data-toggle="collapse" href="#collapse7" data-parent="#accordion">Branch &amp; Admission category<span class="caret"></span></a></h4>
                        </div>
                        <div class="panel-collapse collapse in" id="collapse7">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-5 col-md-offset-1">
                                        <p style="font-size:1.1em"><em>Note:Fields marked with (<span class="red">*</span>) are mandatory</em></p>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class=" col-md-5" for="application">Application for:<span class="red">*</span></label>
                                            <div class="col-md-3">
                                                <select class="form-control" id="application" name="application" required>
                                                    <option>B.Tech</option>
                                                    <option>MBA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="btech_only">
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="form-group">
                                            <label class=" col-md-5" for="application_type">Application Type:<span class="red">*</span></label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="application_type" name="application_type"> 
                                                    <option>Regular</option>
                                                    <option>Lateral Entry</option>
                                                    <option>Management Quota</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class=" col-md-5" for="branch">Branch:<span class="red">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="branch" name="branch">
                                                    <option>Computer Science &amp; Engineering</option>
                                                    <option>Information Technology</option>
                                                    <option>Electronics &amp; Communication Engineering</option>
                                                    <option>Electricals &amp; Electronics Engineering</option>
                                                    <option>Mechanical &amp; Automation Engineering</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success"  >
                        <div class="panel-heading" style="background-color:#16A085;color:white">
                            <h4 class="panel-title"><a data-toggle="collapse" href="#collapse6" data-parent="#accordion">Personal/Registration Details<span class="caret"></span></a></h4>
                        </div>
                        <div class="panel-collapse collapse " id="collapse6">
                            <div class="panel-body">
                                <div class="row">
                                    <div class='col-md-5 col-md-offset-1'>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="name">Name:</label>
                                            <div class="col-md-6">$name</div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="date">Date of Birth:</label>
                                            <div class="col-md-4">$dob</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-6">Gender:</label>
                                            <div class="col-md-4 prefilled">$gender</div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="region">Region:<span class="red">*</span></label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="region" name="region" required>
                                                    <option value="">--Select--</option>
                                                    <option >Delhi</option>
                                                    <option>Outside Delhi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="state_of_domicile">State of Domicile:<span class="red">*</span></label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="state_of_domicile" name="state_of_domicile" required>
                                                    <option value="">--Select--</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman/Nicobar</option>
                                                    <option>Andhra Pradesh </option>
                                                    <option>Arunachal Pradesh </option>
                                                    <option>Assam </option>
                                                    <option>Bihar </option>
                                                    <option >Chandigarh </option>
                                                    <option>Chhattisgarh </option>
                                                    <option>Dadra and Nagar Haveli </option>
                                                    <option>Daman and Diu </option>
                                                    <option>Delhi </option>
                                                    <option>Goa </option>
                                                    <option>Gujarat </option>
                                                    <option>Haryana </option>
                                                    <option>Himachal Pradesh </option>
                                                    <option>Jammu and Kashmir </option>
                                                    <option>Jharkhand </option>
                                                    <option>Karnataka </option>
                                                    <option>Kerala </option>
                                                    <option>Madhya Pradesh </option>
                                                    <option>Maharashtra </option>
                                                    <option>Manipur </option>
                                                    <option>Meghalaya </option>
                                                    <option>Mizoram </option>
                                                    <option>Nagaland </option>
                                                    <option>Odisha </option>
                                                    <option>Orissa </option>
                                                    <option>Puducherry</option>
                                                    <option>Punjab </option>
                                                    <option>Rajasthan </option>
                                                    <option>Sikkim </option>
                                                    <option>Tamil Nadu </option>
                                                    <option>Telangana </option>
                                                    <option>Tripura </option>
                                                    <option>Uttar Pradesh </option>
                                                    <option>Uttarakhand </option>
                                                    <option>West Bengal </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="address">Correspondence Address:</label>
                                            <div class="col-md-6">$address</div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="pincode">Pincode:<span class="red">*</span></label>
                                            <div class="col-md-4"><input class="form-control" type="text" name="pincode" id="pincode" required ></div>
                                        </div>
                                    </div>
                                    <div class='col-md-5'>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="cetroll">CET Roll Number:</label>
                                            <div class="col-md-4">$cetroll</div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="cetrank">CET Rank:</label>
                                            <div class="col-md-4">$cetrank</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-6" for="category">Category:</label>
                                            <div class="col-md-4">
                                                $category
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="category">Sub-Category:</label>
                                            <div class="col-md-6">
                                                $sub_category
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="nationality">Nationality:</label>
                                            <div class="col-md-6">$nationality</div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="date_registration">Date Of Registration:</label>
                                            <div class="col-md-6">$date_registered</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading" style="background-color:#16A085;color:white">
                            <h4 class="panel-title"><a data-toggle="collapse" href="#collapse5" data-parent="#accordion">Parent Guardian Details<span class="caret"></span></a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse5">
                            <div class="panel-body">
                                <div class="row">
                                    <div class='col-md-5 col-md-offset-1'>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="father">Father's Name:</label>
                                            <div class="col-md-6">$fname</div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="father_mobile">Father's Mobile No.:<span class="red">*</span></label>
                                            <div class="col-md-1" style="font-size:16px;padding-top:5px">+91</div><div class="col-md-5"><input class="form-control" id="father_mobile" name="father_mobile" required placeholder="10-digit Mobile No."></div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="father_email">Father's Email:</label>
                                            <div class="col-md-6"><input class="form-control" id="father_email" type="email" name="father_email" placeholder="someone@example.com"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="father_qualification">Qualification:<span class="red">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="father_qualification" name="father_qualification" required>
                                                    <option val="">--Select--</option>
                                                    <option>Post Graduate</option>
                                                    <option>Graduate</option>
                                                    <option>X Pass and Below Graduation</option>
                                                    <option>Below X</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="father_profession">Occupation:<span class="red">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="father_profession" name="father_profession" required>
                                                    <option value="">--Select--</option>
                                                    <option>Service-Private Sector</option>
                                                    <option>Service-Public Sector</option>
                                                    <option>Service-Government Sector</option>
                                                    <option>Professional</option>
                                                    <option>Self-Employed</option>
                                                    <option>Business</option>
                                                    <option>Retired</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="father_post">Post Held:</label>
                                            <div class="col-md-6"><input class="form-control" id="father_post" type="text" name="father_post"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="father_address">Official Address:</label>
                                            <div class="col-md-6"><textarea class="form-control" id="father_address" name="father_address"></textarea></div>
                                        </div>
                                    </div>
                                    <div class='col-md-5'>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="mother">Mother's Name:</label>
                                            <div class="col-md-6">$mname</div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="mother_mobile">Mother's Mobile No.:<span class="red">*</span></label>
                                            <div class="col-md-1" style="font-size:16px;padding-top:5px">+91</div><div class="col-md-5"><input class="form-control" id="mother_mobile" name="mother_mobile" required placeholder="10-digit Mobile No." onchange="phonenumber(this)"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="mother_email">Mother's Email:</label>
                                            <div class="col-md-6"><input class="form-control" id="mother_email" type="email" name="mother_email"  placeholder="someone@example.com"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="mother_qualification">Qualification:<span class="red">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="mother_qualification" name="mother_qualification" required>
                                                    <option val="">--Select--</option>
                                                    <option>Post Graduate</option>
                                                    <option>Graduate</option>
                                                    <option>X Pass and Below Graduation</option>
                                                    <option>Below X</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="mother_profession">Occupation:<span class="red">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="mother_profession" name="mother_profession" required>
                                                    <option val="">--Select--</option>
                                                    <option>Service-Private Sector</option>
                                                    <option>Service-Public Sector</option>
                                                    <option>Service-Government Sector</option>
                                                    <option>Professional</option>
                                                    <option>Self-Employed</option>
                                                    <option>Business</option>
                                                    <option>Retired</option>
                                                    <option>Housewife</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="mother_post">Post Held:</label>
                                            <div class="col-md-6"><input class="form-control" id="mother_post" type="text" name="mother_post" ></div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-md-6" for="mother_address">Official Address:</label>
                                            <div class="col-md-6"><textarea class="form-control" id="mother_address" name="mother_address"></textarea></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading" style="background-color:#16A085;color:white">
                            <h4 class="panel-title"><a data-toggle="collapse" href="#collapse4" data-parent="#accordion">Academic Details<span class="caret"></span></a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="collapse4">
                            <div class="panel-body">
                                <div id="ac1" class="row">
                                    <div class='col-md-2'>
                                        <center class="degree">Class X</center>
                                    </div>
                                    <div class='col-md-10'>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="x_board">X Board/University:<span class="red">*</span></label>
                                                    <div class="col-md-6"><input class="form-control" id="x_board" type="text" name="x_board"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="x_board_roll">X Board Roll No.:<span class="red">*</span></label>
                                                    <div class="col-md-5"><input class="form-control number" id="x_board_roll" type="text" name="x_board_roll"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="x_school">School Name:<span class="red">*</span></label>
                                                    <div class="col-md-6"><input class="form-control" id="x_school" type="text" name="x_school"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="x_board_roll">School Region:<span class="red">*</span></label>
                                                    <div class="col-md-6"><input class="form-control" id="x_school_region" type="text" name="x_school_region"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="x_passing_year">X Passing Year:<span class="red">*</span></label>
                                                    <div class="col-md-3"><input type="text" class="form-control number" id="x_passing_year" name="x_passing_year"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="x_aggregate">X Aggregate Marks:<span class="red">*</span></label>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control number" id="x_aggregate" name="x_aggregate">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="x_percentage">X Percentage:<span class="red">*</span></label>
                                                    <div class="col-md-3"><input type="text" class="form-control" id="x_percentage" name="x_percentage"></div>
                                                    <div class="col-md-1" style="font-size:14px;font-weight:700;margin-left:-15px;padding-top:5px"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="x_subjects">Subjects:</label>
                                                    <div class="col-md-6"><textarea class="form-control" id="x_subjects" name="x_subjects"></textarea></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><hr>
                                <div id="ac2" class="row">
                                    <div class='col-md-2'>
                                        <center class="degree">Class XII</center>
                                    </div>
                                    <div class='col-md-10'>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="board">XII Board/University:</label>
                                                    <div class="col-md-6"><input class="form-control" id="board" type="text" name="board" value='$board'></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="board_roll">Board Roll No.:</label>
                                                    <div class="col-md-5"><input class="form-control number" id="board_roll" type="text" name="board_roll" value='$board_roll'></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="school">School Name:</label>
                                                    <div class="col-md-6"><input class="form-control" id="school" type="text" name="school" value='$school'></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="school_region">School Region:</label>
                                                    <div class="col-md-6"><input class="form-control" id="school_region" type="text" name="school_region" value='$school_region'></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="passing_year">Passing Year:</label>
                                                    <div class="col-md-3"><input type="text" class="form-control" id="passing_year" name="passing_year" value='$passing_year'></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="board_result_status">XII Result Status:</label>
                                                    <div class="col-md-5">
                                                        <select class="form-control" id="board_result_status" name="board_result_status">
                                                            <option>Result Awaited</option>
                                                            <option $selected>Result Declared</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row board_result">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="aggregate">Aggregate Marks:</label>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control number" id="aggregate" name="aggregate" value='$aggregate'>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="percentage">Percentage:</label>
                                                    <div class="col-md-3"><input type="text" class="form-control" id="percentage" name="percentage" value='$percentage'></div>
                                                    <div class="col-md-1" style="font-size:14px;font-weight:700;margin-left:-15px;padding-top:5px;">%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="subjects">Subjects:</label>
                                                    <div class="col-md-6"><textarea class="form-control" id="subjects" name="subjects"></textarea></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><hr>
                                <div id="ac3" class="row">
                                    <div class='col-md-2'>
                                        <center class="degree">Diploma</center>
                                    </div>
                                    <div class='col-md-10'>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-6" for="diploma_board">Diploma Board/University:</label>
                                                    <div class="col-md-6"><input class="form-control" id="diploma_board" type="text" name="diploma_board"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="diploma_roll">Diploma Roll No.:</label>
                                                    <div class="col-md-5"><input class="form-control number" id="diploma_roll" type="text" name="diploma_roll"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="diploma_college">College Name:</label>
                                                    <div class="col-md-6"><input class="form-control" id="diploma_college" type="text" name="diploma_college"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="diploma_college_region">College Region:</label>
                                                    <div class="col-md-6"><input class="form-control" id="diploma_college_region" type="text" name="diploma_college_region"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="diploma_passing_year">Passing Year:</label>
                                                    <div class="col-md-3"><input type="text" class="form-control number" id="diploma_passing_year" name="diploma_passing_year"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="diploma_result_status">Result Status:</label>
                                                    <div class="col-md-5">
                                                        <select class="form-control" id="diploma_result_status" name="diploma_result_status">
                                                            <option>Result Awaited</option>
                                                            <option>Result Declared</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row diploma_result">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="diploma_aggregate">Aggregate Marks:</label>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control number" id="diploma_aggregate" name="diploma_aggregate">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="diploma_percentage">Percentage:</label>
                                                    <div class="col-md-3"><input type="text" class="form-control" id="diploma_percentage" name="diploma_percentage"></div>
                                                    <div class="col-md-1" style="font-size:14px;font-weight:700;margin-left:-15px;padding-top:5px;">%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="diploma_subjects">Subjects:</label>
                                                    <div class="col-md-6"><textarea class="form-control" id="diploma_subjects" name="diploma_subjects"></textarea></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><hr>
                                <div id="ac4" class="row">
                                    <div class='col-md-2'>
                                        <center class="degree">UG/Graduation</center>
                                    </div>
                                    <div class='col-md-10'>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="ug_board">UG Board/University:</label>
                                                    <div class="col-md-6"><input class="form-control" id="ug_board" type="text" name="ug_board"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="ug_roll">UG Roll No.:</label>
                                                    <div class="col-md-5"><input class="form-control number" id="ug_roll" type="text" name="ug_roll"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="ug_college"> College Name:</label>
                                                    <div class="col-md-6"><input class="form-control" id="ug_college" type="text" name="ug_college"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="ug_college_region">College Region:</label>
                                                    <div class="col-md-6"><input class="form-control" id="ug_college_region" type="text" name="ug_college_region"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="ug_passing_year">Passing Year:</label>
                                                    <div class="col-md-3"><input type="text" class="form-control" id="ug_passing_year" name="ug_passing_year"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="ug_result_status">Result Status:</label>
                                                    <div class="col-md-5">
                                                        <select class="form-control" id="ug_result_status" name="ug_result_status">
                                                            <option>Result Awaited</option>
                                                            <option>Result Declared</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ug_result">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="ug_aggregate">Aggregate Marks:</label>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control number" id="ug_aggregate" name="ug_aggregate">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="ug_percentage">Percentage:</label>
                                                    <div class="col-md-3"><input type="text" class="form-control" id="ug_percentage" name="ug_percentage"></div>
                                                    <div class="col-md-1" style="font-size:14px;font-weight:700;margin-left:-15px;padding-top:5px;">%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class=" col-md-6" for="ug_subjects">Subjects:</label>
                                                    <div class="col-md-6"><textarea class="form-control" id="ug_subjects" name="ug_subjects"></textarea></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default ">
                     <div class="panel-body row">
                         <div class="col-md-1">
                            <input type="checkbox" class="form-control" name="verified" onchange="document.getElementById('button').disabled = !this.checked;">                      
                        </div>
                        <div class="col-md-11" style="font-size:1em;font-weight:700">
                            I hereby solemenly affirm that the information furnished by me in this form is true & correct and nothing has been concealed. Should it be found that any information therein is fraudulent and/or incorrect in material, particulars, I understand that my admission is liable to be cancelled at any stage and legal action can be taken against me.
                        </div>
                     </div>
                 </div>
                <center><button type="submit" name="submit" class="btn btn-danger btn-lg" id="button" disabled>Submit Data</button></center> 
            </form>
        </div>
    </body>
</html>
END;
?>





