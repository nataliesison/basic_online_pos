<html>
<head>
	<title></title>
	<?php
		session_start();
		include 'db.php';

			if(isset($_POST['cgi'])){
				if (isset($_POST['ratehrB'])) {
    				$basicRH = $_POST['ratehrB'];
				}

				if (isset($_POST['nohrB'])) {
    				$basicNH = $_POST['nohrB'];
				}

				if (isset($_POST['hon-ratehr'])) {
    				$honRH = $_POST['hon-ratehr'];
				}

				if (isset($_POST['hon-nohr'])) {
    				$honNH = $_POST['hon-nohr'];
				}
				
				if (isset($_POST['other-ratehr'])) {
    				$otherRH = $_POST['other-ratehr'];
				}

				if (isset($_POST['other-nohr'])) {
    				$otherNH = $_POST['other-nohr'];
				}
				if (isset($_POST['output'])) {
    				$cgiOutput = $_POST['output'];
				}
  				 $basicIC = $basicRH * $basicNH;
  				 $honPay = $honRH * $honNH;
  				 $otherPay = $otherRH * $otherNH;
				 $grossIC= $basicIC+$honPay+$otherPay;
  				 

  				 //SSS CONTRIBUTION--------------------
  				 if($grossIC<=3250){
  				 	$sssCon=400;
  				 }
  				 else if($grossIC>=3750&&$grossIC<=3749.99){
  				 	$sssCon=465;
  				 }
  				 else if($grossIC>=3250&&$grossIC<=4249.99){
  				 	$sssCon=530;
  				 }
  				 else if($grossIC>=4250&&$grossIC<=4749.99){
  				 	$sssCon=595;
  				 }
  				 else if($grossIC>=4750&&$grossIC<=5249.99){
  				 	$sssCon=660;
  				 }
  				 else{
  				 	$sssCon=760;
  				 }

  				 //PHILHEALTH CONTRIBUTION---------------

  				 $phCon= 0.035*$grossIC;
  				 $pagibigCon=100;

  				 /*----------------

					employee info

  				 -----------------*/
  				if (isset($_POST['empNo'])) {
    				$empNo1 = $_POST['empNo'];
    			}
    			if (isset($_POST['fname'])) {
    				$fname1 = $_POST['fname'];
    			}
    			if (isset($_POST['mname'])) {
    				$mname1 = $_POST['mname'];
    			}
    			if (isset($_POST['sname'])) {
    				$sname1 = $_POST['sname'];
    			}
    			if (isset($_POST['civStat'])) {
    				$civStat1 = $_POST['civStat'];
    			}
    			if (isset($_POST['desi'])) {
    				$desi1 = $_POST['desi'];
    			}
    			if (isset($_POST['depNo'])) {
    				$depNo1 = $_POST['depNo'];
    			}
    			if (isset($_POST['payDate'])) {
    				$payDate1 = $_POST['payDate'];
    			}
    			if (isset($_POST['empStat'])) {
    				$empStat1 = $_POST['empStat'];
    			}
    			if (isset($_POST['dept'])) {
    				$dept1 = $_POST['dept'];
    			}
    			if (isset($_POST['empImg'])) {
    				$empImg1 = $_POST['empImg'];
    			}

  			}

  			/*function getNet($a,$b){
				$netInc=$a-$b;
				return $netInc;
			}*/

  			if(isset($_POST['cni'])){
  				if (isset($_POST['tOtherG'])) {
    				$gross2 = $_POST['tOtherG'];
				}
				if (isset($_POST['sssL'])) {
    				$loanS = $_POST['sssL'];
				}
				if (isset($_POST['ibigL'])) {
    				$loanLove = $_POST['ibigL'];
				}
				if (isset($_POST['faculty'])) {
    				$loanFacDe = $_POST['faculty'];
				}
				if (isset($_POST['facultyL'])) {
    				$loanFac = $_POST['facultyL'];
				}
				
				if (isset($_POST['salaryL'])) {
    				$loanSal = $_POST['salaryL'];
				}

				if (isset($_POST['others'])) {
    				$loanOther = $_POST['others'];
				}
				if (isset($_POST['output'])) {
    				$cniOutput = $_POST['output'];
				}

				$totalDeduc=$loanS+$loanLove+$loanFacDe+$loanFac+$loanSal+$loanOther;
				$netInc = $gross2 - $totalDeduc;
				

				//getNet($gross2, $totalDeduc);

				/*-------------------

				textboxes value

				-------------------*/

				if (isset($_POST['ratehrB'])) {
    				$basicRH1 = $_POST['ratehrB'];
				}

				if (isset($_POST['nohrB'])) {
    				$basicNH1 = $_POST['nohrB'];
				}

				if (isset($_POST['hon-ratehr'])) {
    				$honRH1 = $_POST['hon-ratehr'];
				}

				if (isset($_POST['hon-nohr'])) {
    				$honNH1 = $_POST['hon-nohr'];
				}
				
				if (isset($_POST['other-ratehr'])) {
    				$otherRH1 = $_POST['other-ratehr'];
				}

				if (isset($_POST['other-nohr'])) {
    				$otherNH1 = $_POST['other-nohr'];
				}
				if (isset($_POST['incomeCutB'])) {
    				$basicIC1 = $_POST['incomeCutB'];
				}
				if (isset($_POST['tHon'])) {
    				$honPay1 = $_POST['tHon'];
				}
				if (isset($_POST['tOtherIP'])) {
    				$otherPay1 = $_POST['tOtherIP'];
				}
				if (isset($_POST['tOtherG'])) {
    				$grossIC1 = $_POST['tOtherG'];
				}
				if (isset($_POST['sss'])) {
    				$socsesy = $_POST['sss'];
				}
				if (isset($_POST['ibig'])) {
    				$pag= $_POST['ibig'];
				}
				if (isset($_POST['bilyon'])) {
    				$fifteen = $_POST['bilyon'];
				}
				if (isset($_POST['others'])) {
    				$others1 = $_POST['others'];
				}

				/*----------------

					employee info

  				 -----------------*/
  				if (isset($_POST['empNo'])) {
    				$empNo2 = $_POST['empNo'];
    			}
    			if (isset($_POST['fname'])) {
    				$fname2 = $_POST['fname'];
    			}
    			if (isset($_POST['mname'])) {
    				$mname2 = $_POST['mname'];
    			}
    			if (isset($_POST['sname'])) {
    				$sname2 = $_POST['sname'];
    			}
    			if (isset($_POST['civStat'])) {
    				$civStat2 = $_POST['civStat'];
    			}
    			if (isset($_POST['desi'])) {
    				$desi2 = $_POST['desi'];
    			}
    			if (isset($_POST['depNo'])) {
    				$depNo2 = $_POST['depNo'];
    			}
    			if (isset($_POST['payDate'])) {
    				$payDate2 = $_POST['payDate'];
    			}
    			if (isset($_POST['empStat'])) {
    				$empStat2 = $_POST['empStat'];
    			}
    			if (isset($_POST['dept'])) {
    				$dept2 = $_POST['dept'];
    			}
    			if (isset($_POST['empImg'])) {
    				$empImg2 = $_POST['empImg'];
    			}



			}

			if (isset($_POST['preview'])){

				/*----------------

					employee info

  				 -----------------*/
  				if (isset($_POST['empNo'])) {
    				$empNo3pre = $_POST['empNo'];
    			}
    			if (isset($_POST['fname'])) {
    				$fname3pre = $_POST['fname'];
    			}
    			if (isset($_POST['mname'])) {
    				$mname3pre = $_POST['mname'];
    			}
    			if (isset($_POST['sname'])) {
    				$sname3pre = $_POST['sname'];
    			}
    			if (isset($_POST['civStat'])) {
    				$civStat3pre = $_POST['civStat'];
    			}
    			if (isset($_POST['desi'])) {
    				$desi3pre = $_POST['desi'];
    			}
    			if (isset($_POST['depNo'])) {
    				$depNo3pre = $_POST['depNo'];
    			}
    			if (isset($_POST['payDate'])) {
    				$payDate3pre = $_POST['payDate'];
    			}
    			if (isset($_POST['empStat'])) {
    				$empStat3pre = $_POST['empStat'];
    			}
    			if (isset($_POST['dept'])) {
    				$dept3pre = $_POST['dept'];
    			}
    			if (isset($_POST['empImg'])) {
    				$empImg3pre = $_POST['empImg'];
    			}
    			if (isset($_POST['output'])) {
    				$prevOutput = $_POST['output'];
				}

    			//----------------------------------------------

    			if (isset($_POST['tOtherG'])) {
    				$gross3pre = $_POST['tOtherG'];
				}
				if (isset($_POST['tOtherNI'])) {
    				$net3pre = $_POST['tOtherNI'];
				}
				if (isset($_POST['sssL'])) {
    				$loanS3pre = $_POST['sssL'];
				}
				if (isset($_POST['ibigL'])) {
    				$loanLove3pre = $_POST['ibigL'];
				}
				if (isset($_POST['ibig'])) {
    				$love3pre = $_POST['ibig'];
				}
				if (isset($_POST['faculty'])) {
    				$loanFacDe3pre = $_POST['faculty'];
				}
				if (isset($_POST['facultyL'])) {
    				$loanFac3pre = $_POST['facultyL'];
				}
				
				if (isset($_POST['salaryL'])) {
    				$loanSal3pre = $_POST['salaryL'];
				}

				if (isset($_POST['others'])) {
    				$loanOther3pre = $_POST['others'];
				}

				//--------------------------------------

				if (isset($_POST['ratehrB'])) {
    				$basicRH3pre = $_POST['ratehrB'];
				}

				if (isset($_POST['nohrB'])) {
    				$basicNH3pre = $_POST['nohrB'];
				}

				if (isset($_POST['hon-ratehr'])) {
    				$honRH3pre = $_POST['hon-ratehr'];
				}

				if (isset($_POST['hon-nohr'])) {
    				$honNH3pre = $_POST['hon-nohr'];
				}
				
				if (isset($_POST['other-ratehr'])) {
    				$otherRH3pre = $_POST['other-ratehr'];
				}

				if (isset($_POST['other-nohr'])) {
    				$otherNH3pre = $_POST['other-nohr'];
				}
				if (isset($_POST['incomeCutB'])) {
    				$basicIC3pre = $_POST['incomeCutB'];
				}
				if (isset($_POST['tHon'])) {
    				$honPay3pre = $_POST['tHon'];
				}
				if (isset($_POST['tOtherIP'])) {
    				$otherPay3pre = $_POST['tOtherIP'];
				}
				if (isset($_POST['tOtherG'])) {
    				$grossIC3pre = $_POST['tOtherG'];
				}
				if (isset($_POST['sss'])) {
    				$socsesy3pre = $_POST['sss'];
				}
				if (isset($_POST['bilyon'])) {
    				$fifteen3pre = $_POST['bilyon'];
				}
				if (isset($_POST['others'])) {
    				$others3pre = $_POST['others'];
				}
				if (isset($_POST['deSum'])) {
    				$deSumpre = $_POST['deSum'];
				}

				//for passing the text box values to another:------------------
				$_SESSION["presssL"] = $loanS3pre;
				$_SESSION["preibigL"] = $loanLove3pre;
				$_SESSION["preibig"] = $love3pre;
				$_SESSION["prefaculty"] = $loanFacDe3pre;
				$_SESSION["prefacultyL"] = $loanFac3pre;
				$_SESSION["presalaryL"] = $loanSal3pre;
				$_SESSION["preothers"] = $loanOther3pre;
				$_SESSION["preratehrB"] = $basicRH3pre;
				$_SESSION["prenohrB"] = $basicNH3pre;
				$_SESSION["prehon-ratehr"] = $honRH3pre;
				$_SESSION["prehon-nohr"] = $honNH3pre;
				$_SESSION["preother-ratehr"] = $otherRH3pre;
				$_SESSION["preother-nohr"] = $otherNH3pre;
				$_SESSION["preincomeCutB"] = $basicIC3pre;
				$_SESSION["pretHon"] = $honPay3pre;
				$_SESSION["pretOtherIP"] = $otherPay3pre;
				$_SESSION["pretOtherG"] = $grossIC3pre;
				$_SESSION["pretOtherNI"] = $net3pre;
				$_SESSION["presss"] = $socsesy3pre;
				$_SESSION["prebilyon"] = $fifteen3pre;
				$_SESSION["preothers"] = $others3pre;
				$_SESSION["preempNo"] = $empNo3pre;
				$_SESSION["prefname"] = $fname3pre;
				$_SESSION["premname"] = $mname3pre;
				$_SESSION["presname"] = $sname3pre;
				$_SESSION["precivStat"] = $civStat3pre;
				$_SESSION["predesi"] = $desi3pre;
				$_SESSION["predepNo"] = $depNo3pre;
				$_SESSION["prepayDate"] = $payDate3pre;
				$_SESSION["preempStat"] = $empStat3pre;
				$_SESSION["predept"] = $dept3pre;
				$_SESSION["predeSum"] = $deSumpre;
				$_SESSION["preempImg"] = $cniOutput;

			}

			if(isset($_POST['new'])){
				 echo "<script>$('.contactForm')[0].reset();</script>";
			}



			//---------------- FOR SAVING IN DATABASE ------------------------

			if(isset($_POST['save'])){


				/*----------------

					employee info

  				 -----------------*/
  				if (isset($_POST['empNo'])) {
    				$db_empno = $_POST['empNo'];
    			}
    			if (isset($_POST['fname'])) {
    				$db_fname = $_POST['fname'];
    			}
    			if (isset($_POST['mname'])) {
    				$db_mname = $_POST['mname'];
    			}
    			if (isset($_POST['sname'])) {
    				$db_sname = $_POST['sname'];
    			}
    			if (isset($_POST['civStat'])) {
    				$db_civstat = $_POST['civStat'];
    			}
    			if (isset($_POST['desi'])) {
    				$db_desi = $_POST['desi'];
    			}
    			if (isset($_POST['depNo'])) {
    				$db_depno = $_POST['depNo'];
    			}
    			if (isset($_POST['payDate'])) {
    				$db_paydate = $_POST['payDate'];
    			}
    			if (isset($_POST['empStat'])) {
    				$db_empstat = $_POST['empStat'];
    			}
    			if (isset($_POST['dept'])) {
    				$db_dept = $_POST['dept'];
    			}
    			if (isset($_POST['empImg'])) {
    				$db_empimg = $_POST['empImg'];
    			}
    			if (isset($_POST['output'])) {
    				$db_output = $_POST['output'];
				}

    			//----------------------------------------------

    			if (isset($_POST['tOtherG'])) {
    				$db_gross = $_POST['tOtherG'];
				}
				if (isset($_POST['tOtherNI'])) {
    				$db_net = $_POST['tOtherNI'];
				}
				if (isset($_POST['sssL'])) {
    				$db_sssL = $_POST['sssL'];
				}
				if (isset($_POST['ibigL'])) {
    				$db_ibigL = $_POST['ibigL'];
				}
				if (isset($_POST['ibig'])) {
    				$db_ibig = $_POST['ibig'];
				}
				if (isset($_POST['faculty'])) {
    				$db_faculty = $_POST['faculty'];
				}
				if (isset($_POST['facultyL'])) {
    				$db_facultyL = $_POST['facultyL'];
				}
				
				if (isset($_POST['salaryL'])) {
    				$db_salaryL= $_POST['salaryL'];
				}

				if (isset($_POST['others'])) {
    				$db_others = $_POST['others'];
				}

				//--------------------------------------

				if (isset($_POST['ratehrB'])) {
    				$db_ratehrB = $_POST['ratehrB'];
				}

				if (isset($_POST['nohrB'])) {
    				$db_nohrB= $_POST['nohrB'];
				}

				if (isset($_POST['hon-ratehr'])) {
    				$db_honratehr = $_POST['hon-ratehr'];
				}

				if (isset($_POST['hon-nohr'])) {
    				$db_honnohr = $_POST['hon-nohr'];
				}
				
				if (isset($_POST['other-ratehr'])) {
    				$db_otherratehr = $_POST['other-ratehr'];
				}

				if (isset($_POST['other-nohr'])) {
    				$db_othernohr = $_POST['other-nohr'];
				}
				if (isset($_POST['incomeCutB'])) {
    				$db_incomecutb = $_POST['incomeCutB'];
				}
				if (isset($_POST['tHon'])) {
    				$db_thon = $_POST['tHon'];
				}
				if (isset($_POST['tOtherIP'])) {
    				$db_totherip = $_POST['tOtherIP'];
				}
				if (isset($_POST['tOtherG'])) {
    				$db_totherg = $_POST['tOtherG'];
				}
				if (isset($_POST['sss'])) {
    				$db_sss= $_POST['sss'];
				}
				if (isset($_POST['bilyon'])) {
    				$db_bilyon = $_POST['bilyon'];
				}
				if (isset($_POST['others'])) {
    				$db_others = $_POST['others'];
				}
				if (isset($_POST['others'])) {
    				$db_otherL = $_POST['others'];
				}
				if (isset($_POST['deSum'])) {
    				$db_desum = $_POST['deSum'];
				}
				

				 $sql = "INSERT INTO payroll(employee_no, fname, mname, sname,civilstat,designation, dependents_no, dept, employeestat, b_rate_hr, b_num_hrs, b_income, h_rate_hr, h_num_hrs, h_income, o_rate_hr, o_num_hrs, o_income, gross_income, net_income, sss_contrib, ph_contrib, pagibig_contrib, sss_loan, pagibig_loan, fs_deposit, fs_loan, salary_loan, other_loan, total_deduct, payroll_date) VALUES('$db_empno', '$db_fname', '$db_mname', '$db_sname', '$db_civstat', '$db_desi', '$db_depno', '$db_dept', '$db_empstat', '$db_ratehrB', '$db_nohrB', '$db_incomecutb', '$db_honratehr', '$db_honnohr', '$db_thon', '$db_otherratehr', '$db_othernohr', '$db_totherip', '$db_gross', '$db_net', '$db_sss', '$db_bilyon', '$db_ibig','$db_sssL', '$db_ibigL', '$db_faculty', '$db_facultyL', '$db_salaryL', '$db_otherL', '$db_desum', '$db_paydate')";


			if ($conn->query($sql) === TRUE) {
  				echo "New record created successfully";
			} 
			else {
  				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			}

    ?>

    <script type="text/javascript">
    	
    	function openLink() {
          window.open("previewslip.php");
      }

      	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};
    </script>

<style type="text/css">
	body{
		background-image: url('background.jpg');
	}
	button{
      background-color: #c19a6b;
      border-radius: 15px;
    }
	.headerDiv{
		background-color:#deb887;
		height: 15%;
		width: 100%;
		float: left;
		border-radius: 15px;
	}
	h4{
		font-family: Perpetua Titling MT;
		font-size: 23px;
	}
	mark{
		font-family: Perpetua Titling MT;
		font-size: 15px;
		font-weight: bold;
	}
	.spaceDiv{
		height: 1.5%;
		width: 100%;
		float: left;
	}
	.spaceDiv2{
		height:60%;
		width: 0.5%;
		float: left;
	}
	.sideL{
		height:110%;
		width: 10%;
		float: left;
	}
	.sideR{
		height:110%;
		width: 10%;
		float: left;
	}
	.unaDiv{
		height: 40%;
		width: 100%;
		float: left;
		border: solid #b38b6d;
		border-radius: 15px;
	}
	.secondDiv{
		height: 110%;
		width: 39%;
		float: left;
		border: solid #b38b6d;
		border-radius: 15px;
	}
	.thirdDiv{
		height: 110%;
		width: 39%;
		float: left;
		border: solid #b38b6d;
		border-radius: 15px;
	}

</style>
</head>
<body>
	<div class="headerDiv">
		<center><h4>Employee Informations</h4></center>
	</div>
	<div class="spaceDiv"></div>
	<form action="#" method="post">
	<div class="unaDiv">
		<div style="height: 100%; width: 28.3%; float: left;">
			<br>
			&nbsp;&nbsp;Employee No: <input type="text" id="empNo" name="empNo" value="<?php if (isset($empNo1)) echo $empNo1 ?><?php if (isset($empNo2)) echo $empNo2 ?>" style="width: 200px; height: 25px;"><br>
			<br>
			&nbsp;&nbsp;First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="fname" name="fname" value="<?php if (isset($fname1)) echo $fname1 ?><?php if (isset($fname2)) echo $fname2 ?>" style="width: 200px; height: 23px"><br>
			<br>
			&nbsp;&nbsp;Middle Name: <input type="text" id="mname" name="mname" value="<?php if (isset($mname1)) echo $mname1 ?><?php if (isset($mname2)) echo $mname2 ?>" style="width: 200px; height: 23px"><br>
			<br>
			&nbsp;&nbsp;Surname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="sname" name="sname" value="<?php if (isset($sname1)) echo $sname1 ?><?php if (isset($sname2)) echo $sname2 ?>" style="width: 200px; height: 23px"><br>
			<br>
			&nbsp;&nbsp;Civil Status: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="civStat" name="civStat" value="<?php if (isset($civStat1)) echo $civStat1 ?><?php if (isset($civStat2)) echo $civStat2 ?>" style="width: 200px; height: 23px"><br>
			<br>
			&nbsp;&nbsp;Designation:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="desi" name="desi" value="<?php if (isset($desi1)) echo $desi1 ?><?php if (isset($desi2)) echo $desi2 ?>" style="width: 200px; height: 23px"><br>
			<br>
		</div>
		<div style="height: 100%; width: 38.3%; float: left;">
			<br>
			Number of Dependents: <input type="text" id="depNo" name="depNo" value="<?php if (isset($depNo1)) echo $depNo1 ?><?php if (isset($depNo2)) echo $depNo2 ?>" style="width: 200px; height: 23px"><br>
			<br>
			Paydate: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="date" id="payDate" name="payDate" value="<?php if (isset($payDate1)) echo $payDate1 ?><?php if (isset($payDate2)) echo $payDate2 ?>" style="width: 200px; height: 23px"><br>
			<br>
			Employee Status: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="empStat" name="empStat" value="<?php if (isset($empStat1)) echo $empStat1 ?><?php if (isset($empStat2)) echo $empStat2 ?>" style="width: 200px; height: 23px"><br>
			<br>
			Department: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="dept" name="dept" value="<?php if (isset($dept1)) echo $dept1 ?><?php if (isset($dept2)) echo $dept2 ?>" style="width: 200px; height: 23px"><br>
		</div>
		<div style="height: 100%; width: 33.3%; float: left;">
			<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
			<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
			<p><img id="output" name="output"  width="200" height="200" /></p>
		</div>
	</div>
	<div class="spaceDiv"></div>
	<div class="sideL">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<center><input type="submit" value="Calculate Gross" name="cgi" style="width: 120px; height: 80px"></center><br>
		<center><input type="submit" value="Calculate Net" id="cni" name="cni" style="width: 120px; height: 80px"></center><br>
		<center><input type="submit" value="New" id="new" name="new" onclick="ClearFields();" style="width: 120px; height: 80px"></center><br>
		<center><input type="submit" value="Cancel" id="cancel" name="cancel" style="width: 120px; height: 80px"></center>
	</div>
		<div class="secondDiv">
		<menu>
		<br>
		
		&nbsp;&nbsp;<mark>Basic Pay</mark><br>
		<br>
		&nbsp;&nbsp;Rate/Hour: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="ratehrB" name="ratehrB" value="<?php if (isset($basicRH)) echo $basicRH ?><?php if (isset($basicRH1)) echo $basicRH1 ?>" style="width: 200px; height: 23px"><br>
		<br>
		&nbsp;&nbsp;No.of Hrs/Cut off: &nbsp;&nbsp;<input type="text" id="nohrB" name="nohrB" value="<?php if (isset($basicNH)) echo $basicNH ?><?php if (isset($basicNH1)) echo $basicNH1 ?>" style="width: 200px; height: 23px"><br>
		<br>
		&nbsp;&nbsp;Income per Cut off: <input type="text" id="incomeCutB" name="incomeCutB" value="<?php if (isset($basicIC)) echo $basicIC ?><?php if (isset($basicIC1)) echo $basicIC1 ?>" style=" background-color: pink; width: 200px; height: 23px;"><br>
		<br>
		<br>
		&nbsp;&nbsp;<mark>Honorarium</mark><br>
		<br>
		&nbsp;&nbsp;Rate/Hour: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="hon-ratehr" name="hon-ratehr" value="<?php if (isset($honRH)) echo $honRH ?><?php if (isset($honRH1)) echo $honRH1 ?>"style="width: 200px; height: 23px"><br>
		<br>
		&nbsp;&nbsp;No.of Hrs/Cut off:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" id="hon-nohr" name="hon-nohr" value="<?php if (isset($honNH)) echo $honNH ?><?php if (isset($honNH1)) echo $honNH1 ?>" style="width: 200px; height: 23px"><br>
		<br>
		&nbsp;&nbsp;Total Honorarium Pay: <input type="text" id="tHon" name="tHon" value="<?php if (isset($honPay)) echo $honPay ?><?php if (isset($honPay1)) echo $honPay1 ?>" style="background-color: pink; width: 200px; height: 23px"><br>
		<br>
		<br>
		&nbsp;&nbsp;<mark>Other Income</mark><br>
		<br>
		&nbsp;&nbsp;Rate/Hour: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="other-ratehr" name="other-ratehr" value="<?php if (isset($otherRH)) echo $otherRH ?><?php if (isset($otherRH1)) echo $otherRH1 ?>" style="width: 200px; height: 23px"><br>
		<br>
		&nbsp;&nbsp;No.of Hrs/Cut off:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" id="other-nohr" name="other-nohr" value="<?php if (isset($otherNH)) echo $otherNH ?><?php if (isset($otherNH1)) echo $otherNH1 ?>" style="width: 200px; height: 23px"><br>
		<br>
		&nbsp;&nbsp;Total Other Income Pay: <input type="text" id="tOtherIP" name="tOtherIP" value="<?php if (isset($otherPay)) echo $otherPay ?><?php if (isset($otherPay1)) echo $otherPay1 ?>" style="background-color: pink; width: 200px; height: 23px"><br>
		<br>
		<br>
		&nbsp;&nbsp;<mark>Income Summary</mark><br>
		<br>
		&nbsp;&nbsp;Gross Income:&nbsp;&nbsp;<input type="text" id="tOtherG" name="tOtherG"  value="<?php if (isset($grossIC)) echo $grossIC?><?php if (isset($grossIC1)) echo $grossIC1?>"style="width: 200px; height: 23px"><br>
		<br>
		&nbsp;&nbsp;NET Income:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="tOtherNI" name="tOtherNI" value="<?php if (isset($netInc))echo $netInc;?>" style="width: 200px; height: 23px"><br>
		<br>

		
	
	</menu>
	</div>
	<div class="spaceDiv2"></div>
	<div class="thirdDiv">
		<menu>
		<br>
			<mark>Regular Deductions</mark>
			<br>
			<br>
			SSS Contribution: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="sss" name="sss" value="<?php if (isset($sssCon)) echo $sssCon ?><?php if (isset($socsesy)) echo $socsesy ?>" style="background-color: pink; width: 200px; height: 23px"><br>
			<br>
			PhilHealth Contribution: &nbsp;&nbsp; <input type="text" id="bilyon" name="bilyon" value="<?php if (isset($phCon)) echo $phCon ?><?php if (isset($fifteen)) echo $fifteen ?>" style="background-color: pink; width: 200px; height: 23px"><br>
			<br>
			Pag-Ibig Contribution: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="ibig" name="ibig" value="<?php if (isset($pagibigCon)) echo $pagibigCon ?><?php if (isset($pag)) echo $pag ?>" style="background-color: pink; width: 200px; height: 23px"><br>
			<br>
			<mark>Other Deductions</mark>
			<br>
			<br>
			SSS Loan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="sssL" name="sssL" value="<?php if (isset($loanS)) echo $loanS ?>" style="width: 200px; height: 23px"><br>
			<br>
			Pag-Ibig Loan:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="ibigL" name="ibigL" value="<?php if (isset($loanLove)) echo $loanLove ?>" style="width: 200px; height: 23px"><br>
			<br>
			Faculty Savings Deposit: &nbsp;&nbsp; <input type="text" id="faculty" name="faculty" value="<?php if (isset($loanFacDe)) echo $loanFacDe ?>" style="width: 200px; height: 23px"><br>
			<br>
			Faculty Savings Loan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="facultyL" name="facultyL" value="<?php if (isset($loanFac)) echo $loanFac ?>" style="width: 200px; height: 23px"><br>
			<br>
			Salary Loan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="salaryL" name="salaryL" value="<?php if (isset($loanSal)) echo $loanSal ?>" style="width: 200px; height: 23px"><br>
			<br>
			Others: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="otheSel" id="otheSel" value="<?php if (isset($loanOther)) echo $loanOther ?>" style="width: 200px; height: 23px">
				<option value="none">Select other deductions</option>
				</select><br>
				<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="others" name="others" value="<?php if (isset($others1)) echo $others1 ?>" style="width: 200px; height: 23px"><br>
			<br>
			<br>
			<mark>Deduction Summary</mark>
			<br>
			<br> &nbsp;Total deductions: <br>
			&nbsp;&nbsp;<input type="text" id="deSum" name="deSum" value="<?php if (isset($totalDeduc)) echo $totalDeduc ?>"  style="width: 350px; height: 100px">
		</menu>
	</div>
	<div class="sideR">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<center><input type="submit" value="Save" name="save" id="save"  style="width: 120px; height: 80px"></center> <br>
		<center><input type="submit" value="Update" name="update" id="update" style="width: 120px; height: 80px"></center>
		<br>
		<center><input type="submit" value="Preview Payslip Details" name="preview" id="preview" onclick="openLink()" style="width: 120px; height: 80px"></center>
		<br>
	</div>
	</form>
	<script type="text/javascript">
		var employee_id = localStorage.getItem("empNo");
        var employee_fname = localStorage.getItem("empnameF");
        var employee_mname = localStorage.getItem("empnameM");
        var employee_lname = localStorage.getItem("empnameL");
        var employee_civstat = localStorage.getItem("empdcs");
        var employee_dept = localStorage.getItem("empdep");
        var employee_desig = localStorage.getItem("empdesigg");
        var employee_stat = localStorage.getItem("empstt");
        var employee_qdp = localStorage.getItem("empQDP");

		document.getElementById("empNo").value = employee_id;
		document.getElementById("fname").value = employee_fname;
		document.getElementById("mname").value = employee_mname;
		document.getElementById("sname").value = employee_lname;
		document.getElementById("civStat").value = employee_civstat;
		document.getElementById("dept").value = employee_dept;
		document.getElementById("desi").value = employee_desig;
		document.getElementById("empStat").value = employee_stat;
		document.getElementById("depNo").value = employee_qdp;

		function ClearFields() {
			localStorage.clear();
		}
	</script>
	<div class="spaceDiv"></div>
	<?php
		include 'update-payroll.php';
	?>
</body>
</html>