<?php
session_start();
if(!isset($_SESSION['cetroll']))
header('location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Print Details</title>
	<style type="text/css">
		body {  margin-left: 0.25in; 
                margin-right: 0.7in; 
                margin-top: 0.05in; 
                margin-bottom: 0.6in;
                font-size:14px; 
                font-family:Arial, Helvetica, sans-serif; }
		p   { 
                margin-bottom: 0.08in; line-height: 100%;
             }
		td p { 
                margin-bottom: 0.0in 
             }
        .declaration{
            text-align: justify;
        }
	</style>
	
</head>

<body>
<table width="700"  cellspacing="0">
	<tr >
		<td width="80" style="border: none; padding: 0in">
			<p><img src="maitlogo.png" name="Image" width="80" height="90" border="0"/><br>
			</p>
		</td>
		<td width="620" style="border: none; padding: 0in">
            <center>
                <p id="header" style="line-height:0%;font-size:22px;font-weight:700">MAHARAJA AGRASEN INSTITUTE OF TECHNOLOGY</p>
                <p style="line-height:150%; font-size:12px">
                    <b>(Approved by A.I.C.T.E., Ministry of HRD, Govt. of India)</b><br><b>(Affiliated to Guru Gobind Singh Indraprastha University,Delhi)</b><br>PSP AREA, MAHARAJA AGRASEN CHOWK,PLOT NO.1, SEC-22, ROHINI, DELHI-86
                </p>
            </center>
		</td>
	</tr>
</table>
<form name="Form">
	<table width="700" cellspacing="0" id="table2">
		<col width="580">
		<col width="120">
		<tr>
			<td width="580" height="92"  style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none;padding-left: 0.04in;padding-bottom:0.04in;padding-top:0.04in; padding-right: 0in">
				<span style="font-size:18px;font-weight:700">Application for:&nbsp;<?php echo $_SESSION['application']?></span>
				<p>Information Technology<span style="padding-left:6em"><input type="checkbox" id="it" ></span><span style="padding-left:3em">Computer Science &amp; Engg.&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="checkbox" id="cse"  ></p>
				<p>Electronics &amp; Communication Engg.<span style="padding-left:0.4em"><input type="checkbox" id="ece"  ></span><span style="padding-left:3em">Electricals &amp; Elctronics Engg.&nbsp;</span><input type="checkbox" id="eee" ></p>
				<p>Mechanical &amp; Automation Engg.<span style="padding-left:2em"><input type="checkbox" id="mae" ></span>
				</p>
			</td>
			<td width="110" style="border: 1px solid #000000; padding: 0.04in">
				<p>PHOTOGRAPH</p>
			</td>
		</tr>
	</table>
    <p></p>
	<table width="700" cellpadding="4" cellspacing="0" id="table3">
		<col width="106">
		<col width="125">
		<col width="149">
		<col width="95">
		<col width="89">
		<col width="93">
		<tr>
			<td colspan="6" width="700"  style="border-top: 1px solid #000000; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0.04in; padding-bottom: 0in; padding-left: 0.04in; padding-right: 0.04in">
				<span style="font-size:18px;font-weight:700"><b>Please Tick Appropriate Categories :</b></span>
			</td>
		</tr>
		<tr>
			<td width="106" style="border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.04in; padding-right: 0in">
				<p>(i) Male<span style="padding-left:1em"><input type="checkbox" id="male" ></span></p>
			</td>
			<td width="125" style="border: none; padding: 0in">
				<p>Female<span style="padding-left:2.9em"><input type="checkbox" id="female"  ></span></p>
			</td>
			<td width="149" style="border: none; padding: 0in">
				<p>(iii) SC<span style="padding-left:4.5em"><input type="checkbox" id="sc"  ></span></p>
			</td>
			<td width="95" style="border: none; padding: 0in">
				<p>ST<span style="padding-left:0.5em"><input type="checkbox" id="st" ></span>
				</p>
			</td>
			<td width="89" style="border: none; padding: 0in">
				<p>OBC<span style="padding-left:0.7em"><input type="checkbox" id="obc" ></span>
				</p>
			</td>
			<td width="93" style="border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.04in">
				<p>General<span style="padding-left:0.7em"><input type="checkbox" id="gen" ></span></p>
			</td>
		</tr>
		<tr>
			<td width="106" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
				<p>(ii) Delhi&nbsp;&nbsp;<input type="checkbox" id="delhi"></p>
			</td>
			<td width="125" style="border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0in; padding-right: 0in">
				<p>Outside Delhi&nbsp;<input type="checkbox" id="outdelhi" ></p>
			</td>
			<td width="149" style="border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0in; padding-right: 0in">
				<p>Kashmiri Migrant<input type="checkbox" id="kashmiri"  ></p>
			</td>
			<td width="95" style="border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0in; padding-right: 0in">
				<p>Def.<span style="padding-left:em"><input type="checkbox" id="def" ></p></span>
			</td>
			<td width="89" style="border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0in; padding-right: 0in">
				<p>P.H.<span style="padding-left:1em"><input type="checkbox" id="ph" ></p></span>
			</td>
			<td width="93" style="border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0in; padding-right: 0.04in">
			</td>
		</tr>
	</table>
</form>
<br>
<table width="700"  cellspacing="8" id="table4">
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">1.</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Name(Mr./Ms.)</b></p>
		</td>
		<td colspan="3" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['name']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">2.</p>
		</td>
		<td width="170" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>University Enrollment No.</b></p>
		</td>
		<td colspan="3" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['university_roll_no']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">3.</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Father’s Name</b></p>
		</td>
		<td colspan="3" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['fname']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Qualifications</b></p>
		</td>
		<td colspan="2" width="255" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['father_qualification']?></p>
		</td>
		<td width="270" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Profession</b>
			:<?php echo $_SESSION['father_profession']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Post Held</b></p>
		</td>
		<td colspan="3" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['father_post']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Official Address</b></p>
		</td>
		<td colspan="3" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['father_address']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Telephone No.</b></p>
		</td>
		<td colspan="2" width="255" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['father_telephone_no']?></p>
		</td>
		<td width="270" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Mobile No.</b> :&nbsp;<?php echo $_SESSION['father_mobile']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>E-mail</b></p>
		</td>
		<td colspan="3" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['father_email']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">4.</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Mother’s Name</b></p>
		</td>
		<td colspan="3" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['mname']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Qualifications</b></p>
		</td>
		<td colspan="2" width="255" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['mother_qualification']?></p>
		</td>
		<td width="270" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Profession</b>:&nbsp;<?php echo $_SESSION['mother_profession']?></p>
		</td>
	</tr>
	<tr >
		<td width="10" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="154" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Post Held</b></p>
		</td>
		<td colspan="3" width="477" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['mother_post']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Official Address</b></p>
		</td>
		<td colspan="3" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['mother_address']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Telephone No.</b></p>
		</td>
		<td colspan="2" width="255" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['mother_telephone_no']?></p>
		</td>
		<td width="270" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Mobile No.</b>:&nbsp;<?php echo $_SESSION['mother_mobile']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>E-mail</b></p>
		</td>
		<td colspan="3" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['mother_email']?></p>
		</td>
	</tr>
	<tr >
		<td width="10" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">5.</p>
		</td>
		<td width="154" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Present Address</b></p>
		</td>
		<td colspan="3" width="477" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['current_address']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" height="14" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Pin Code</b></p>
		</td>
		<td width="200" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['pincode']?></p>
		</td>
		<td colspan="2" width="311" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Ph. Nos. with STD code</b> :&nbsp;</p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">6.</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>Date of Birth</b></p>
		</td>
		<td width="180" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in">:&nbsp;<?php echo $_SESSION['dob']?></p>
		</td>
		<td colspan="2" width="335" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><b>State of Domicile</b> :&nbsp;<?php echo $_SESSION['state_of_domicile']?></p>
		</td>
	</tr>
	<tr >
		<td width="15" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="160" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td width="142" style="border: none; padding: 0in">
			<p style="margin-top: 0.04in"><br>

			</p>
		</td>
		<td colspan="2" width="327" style="border: none; padding: 0in">
			<p align="right" style="margin-top: 0.04in">P.T.O</p>
		</td>
	</tr>
</table>
<br><br><br><br><br><br>
<p style="font-size:16px"><b>B) Educational Qualifications :</b></p>
<table width="700" cellpadding="4" cellspacing="0" id="table5">
	<col width="100">
	<col width="120">
	<col width="120">
	<col width="56">
	<col width="220">
	<col width="36">
	<col width="48">
	<tr >
		<td width="93" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p align="center"><b>Exam Passed</b></p>
		</td>
		<td width="120" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p align="center"><b>School/College</b></p>
		</td>
		<td width="120" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p align="center"><b>Board/University</b></p>
		</td>
		<td width="56" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p align="center"><b>Year</b></p>
		</td>
		<td width="220" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p align="center"><b>Subjects</b></p>
		</td>
		<td width="36" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0.04in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p align="center"><b>Div.</b></p>
		</td>
		<td width="48" style="border: 1px solid #000000; padding: 0.04in">
			<p align="center"><b>Marks</b></p>
		</td>
	</tr>
	<tr>
		<td width="100" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p align="center">10<sup>th</sup>
			 Class</p>
			<p align="center"><br>

			</p>
		</td>
		<td width="120"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p style="margin-top: 0.04in"><?php echo $_SESSION['x_school']?></p>
		</td>
		<td width="120"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p style="margin-top: 0.04in"><?php echo $_SESSION['x_board']?></p>
		</td>
		<td width="56"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p><?php echo $_SESSION['x_passing_year']?></p>
		</td>
		<td width="220"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p><?php echo $_SESSION['x_subjects']?> 
			</p>
		</td>
		<td width="36"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p>
			<?php 
				if($_SESSION['x_percentage']>=60) echo "1<sup>st</sup>";
				else if ($_SESSION['x_percentage']==NULL) echo "";
				else if($_SESSION['x_percentage']<40) echo "3<sup>rd</sup>";
				else echo "2<sup>nd</sup>";
			?>
			</p>
		</td>
		<td width="48"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0.04in">
			<p><?php echo $_SESSION['x_percentage']?>%</p>
		</td>
	</tr>
	<tr>
		<td width="100" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p align="center">12<sup>th</sup>
			 Class</p>
			<p align="center"><br>

			</p>
		</td>
		<td width="120"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p style="margin-top: 0.04in"><?php echo $_SESSION['board_school']?></p>
		</td>
		<td width="120"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p style="margin-top: 0.04in"><?php echo $_SESSION['board']?></p>
		</td>
		<td width="56"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p><?php echo $_SESSION['board_passing_year']?></p>
		</td>
		<td width="220"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p><?php echo $_SESSION['subjects']?></p>
		</td>
		<td width="36"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p>
			<?php 
				if($_SESSION['board_percentage']>=60) echo "1<sup>st</sup>";
				else if ($_SESSION['x_percentage']==NULL) echo "";
				else if($_SESSION['board_percentage']<40) echo "3<sup>rd</sup>";
				else echo "2<sup>nd</sup>";
			?>
			</p>
		</td>
		<td width="48"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0.04in">
			<p><?php echo $_SESSION['board_percentage']?>%</p>
		</td>
	</tr>
	<tr>
		<td width="100" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p align="center">Engg.
			Diploma</p>
			<p align="center">(if
			applicable)</p>
		</td>
		<td width="120"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p style="margin-top: 0.04in"><?php echo $_SESSION['diploma_college']?></p>
		</td>
		<td width="120"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p style="margin-top: 0.04in"><?php echo $_SESSION['diploma_board']?></p>
		</td>
		<td width="56"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p><?php echo $_SESSION['diploma_passing_year']?></p>
		</td>
		<td width="220"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p><?php echo $_SESSION['diploma_subjects']?></p>
		</td>
		<td width="36"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p><?php 
				if($_SESSION['diploma_percentage']>=60) echo "1<sup>st</sup>";
				else if($_SESSION['diploma_percentage']==NULL) echo "";
				else if($_SESSION['diploma_percentage']<40) echo "3<sup>rd</sup>";
				else echo "2<sup>nd</sup>";
			?>
			</p>
		</td>
		<td width="48"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0.04in">
			<p><?php echo $_SESSION['diploma_percentage']?>%</p>
		</td>
	</tr>
	<tr>
		<td width="100" style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p align="center">Degree/Post
			Graduate</p>
		</td>
		<td width="120"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p style="margin-top: 0.04in"><?php echo $_SESSION['ug_college']?></p>
		</td>
		<td width="120"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p style="margin-top: 0.04in"><?php echo $_SESSION['ug_board']?></p>
		</td>
		<td width="56"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p><?php echo $_SESSION['ug_passing_year']?></p>
		</td>
		<td width="220"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p><?php echo $_SESSION['ug_subjects']?></p>
		</td>
		<td width="36"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0in">
			<p>
			<?php 
				if($_SESSION['ug_percentage']>=60) echo "1<sup>st</sup>";
				else if($_SESSION['ug_percentage']==NULL) echo "";
				else if($_SESSION['ug_percentage']<40) echo "3<sup>rd</sup>";
				else echo "2<sup>nd</sup>";
			?>
			</p>
		</td>
		<td width="48"  style="border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0.04in; padding-left: 0.04in; padding-right: 0.04in">
			<p><?php echo $_SESSION['ug_percentage']?>%</p>
		</td>
	</tr>
</table>
<table width="700" cellpadding="4" cellspacing="0">
	<tr valign="bottom">
		<td width="220" height="10" style="border: none; padding: 0in">
			<p style="font-size:16px"><b>C.E.T. (GGSIPU)</b></p>
		</td>
		<td width="290" style="border: none; padding: 0in">
			<p style="font-size:16px"><b>Roll No.</b> :<?php echo $_SESSION['cetroll']?></p>
		</td>
		<td width="190" style="border: none; padding: 0in">
			<p style="font-size:16px"><b>Rank</b> :<?php echo $_SESSION['cet_rank']?></p>
		</td>
	</tr>
</table>
<div style="margin-right:-50px">
<p style="font-size:16px"><b>C) OTHER DETAILS :</b></p>
<ol >
	<li>Co-curricular Activities :</li>
    <li>Sport and Games Activities :</li>
</ol>
<p style="font-size:16px"><b>D) DECLARATION :</b></p>
<p class="text declaration" >I hereby solemnly affirm that the information furnished by me in this form is true &amp; correct and nothing has been concealed. Should it be found that any information therein is fraudulent and/or incorrect in material, particulars,&nbsp;I
understand that my admission is liable to be canceled at any stage
and legal action can be taken against me.<br><br>
I undertake to pay the fee as prescribed at the time of admission and
also shall pay further fee as per rules of the institute. I have
noted that tuition fee and other fee are not refundable under any circumstances. I have
also noted clearly that if I withdraw my seat during any stage of the program I am liable to
pay the remaining years fee to the
Institution. I will abide by the rules and regulation of the
Institute as laid down by the management from time to
time. Also I will not indulge myself in any unlawful activity
including ragging during my stay in the Institute.
<p class="text">Yours faithfully,</p>
<p class="text">Date_______________<span style="padding-left:3.5in">(Signature of the Candidate)</span></p>
<p class="text declaration">I have fully read the information furnished by my ward and affirm that
it is true and nothing has been concealed. I assure that my ward abide by the rules and regulation of the
University and the Institute and will attend the classes regularly. I am aware that if he/she fails to fulfill the minimum requisiteconditions regarding the attendance, he/she can be detained without prior information. I have also noted clearly
that at any stage I cannot withdraw admission.<br><br>
<p class="text">Date______________<span style="padding-left:3.5in">(Signature of the Father/Guardian)</p>
<p class="text">Documents to be enclosed:</p>
<ol>
	<li>Fee receipt.</li>
    <li>Statement of Marksheet of Exam qualified.</li>
    <li>Certificate in support of date of birth (Class Xth Certificate)</li>
    <li>Photographs (6 Nos.) 2&quot;x2&quot; White (Background Colour</li>
    <li>One Set of copies of all certificates/Marksheets duly attested.</li>
</ol>
</div>
<?php
		$branch=$_SESSION['branch'];
		switch($branch){
			case "Computer Science & Engineering" :
		echo 	
		'<script>
			document.getElementById("cse").checked=true
		</script>';
		break;
		case "Information Technology" :
		echo 	
		'<script>
			document.getElementById("it").checked=true
		</script>';

		break;
		case "Electronics & Communication Engineering" :
		echo	
		'<script>
			document.getElementById("ece").checked=true
		</script>';
		break;
		case "Electricals & Electronics Engineering" :
		echo 	
		'<script>
			document.getElementById("eee").checked=true
		</script>';
		break;
		case "Mechanical & Automation Engineering" :
		echo '<script>
			document.getElementById("mae").checked=true
		</script>';
		break;
		default :
		echo 	
		'<script>
			alert("Use your pen to check")
		</script>';
		}
		$gender=$_SESSION['gender'];
		switch($gender){
			case "Male":
			echo '<script>document.getElementById("male").checked=true;</script>';
			break;
			case "Female":
			echo '<script>document.getElementById("female").checked=true;</script>';
			break;
			default:
			break;
		}

		$category=$_SESSION['category'];
		switch($category){
			case "General/Open (OP)":
			echo '<script>document.getElementById("gen").checked=true;</script>';
			break;
			case "Schedule Caste (SC)":
			echo '<script>document.getElementById("sc").checked=true;</script>';
			break;
			case "Other Backward Class (OB)":
			echo '<script>document.getElementById("obc").checked=true;</script>';
			break;
			case "Schedule Tribe (ST)":
			echo '<script>document.getElementById("st").checked=true;</script>';
			break;
			default:break;
		}
		$sub_category=substr($_SESSION['sub_category'],0,4);
		
		switch($sub_category){
			case "Defe":
			echo '<script>document.getElementById("def").checked=true;</script>';
			break;
			case "Kash":
			echo '<script>document.getElementById("kashmiri").checked=true;</script>';
			break;
			case "Phys":
			echo '<script>document.getElementById("ph").checked=true;</script>';
			break;
			default:
			break;
		}
		$region=$_SESSION['region'];
		switch($region){
			case "Delhi":
			echo '<script>document.getElementById("delhi").checked=true;</script>';
			break;
			case "Outside Delhi" :
			echo '<script>document.getElementById("outdelhi").checked=true;</script>';
			break;
			default:break;
		}
	?>

</body>
</html>