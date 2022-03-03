<html>
<head>
	<title></title>
	<?php
			session_start();
			$loanS3pre=	$_SESSION["presssL"];
			$love3pre= $_SESSION["preibig"];
			$loanLove3pre=	$_SESSION["preibigL"]; 
			$loanFacDe3pre=	$_SESSION["prefaculty"]; 
			$loanFac3pre=	$_SESSION["prefacultyL"]; 
			$loanSal3pre=	$_SESSION["presalaryL"]; 
			$loanOther3pre=	$_SESSION["preothers"]; 
			$basicRH3pre=	$_SESSION["preratehrB"]; 
			$basicNH3pre=	$_SESSION["prenohrB"]; 
			$honRH3pre=	$_SESSION["prehon-ratehr"]; 
			$honNH3pre=	$_SESSION["prehon-nohr"]; 
			$otherRH3pre=	$_SESSION["preother-ratehr"]; 
			$otherNH3pre=	$_SESSION["preother-nohr"]; 
			$basicIC3pre=	$_SESSION["preincomeCutB"]; 
			$honPay3pre=	$_SESSION["pretHon"];
			$otherPay3pre=	$_SESSION["pretOtherIP"];
			$grossIC3pre=	$_SESSION["pretOtherG"];
			$net3pre = $_SESSION["pretOtherNI"];
			$socsesy3pre=	$_SESSION["presss"];
			$fifteen3pre=	$_SESSION["prebilyon"]; 
			$others3pre=	$_SESSION["preothers"];
			$empNo3pre=	$_SESSION["preempNo"];
			$fname3pre=	$_SESSION["prefname"];
			$mname3pre=	$_SESSION["premname"];
			$sname3pre=	$_SESSION["presname"];
			$civStat3pre=	$_SESSION["precivStat"];
			$desi3pre=	$_SESSION["predesi"];
			$depNo3pre=	$_SESSION["predepNo"];
			$payDate3pre=	$_SESSION["prepayDate"];
			$empStat3pre=	$_SESSION["preempStat"];
			$dept3pre=	$_SESSION["predept"];
			$deSumpre = $_SESSION["predeSum"];
			$outputpre = $_SESSION["preempImg"];

	?>
<style type="text/css">
	body{
		/*background-image: url('background.jpg');*/
	}
	button{
      background-color: #c19a6b;
      border-radius: 15px;
    }
	.headerDiv{
		/*background-color:#deb887;*/
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
		<center><h4>Preview Slip</h4></center>
	</div>
	<div class="spaceDiv"></div>
	<form action="#" method="post">
	<div class="unaDiv">
		<div style="height: 100%; width: 28.3%; float: left;">
			<br>
			&nbsp;&nbsp;Employee No: <input type="text" id="preempNo" name="preempNo" value="<?php echo $empNo3pre; ?>" style="width: 200px; height: 25px;" readonly><br>
			<br>
			&nbsp;&nbsp;First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="prefname" name="prefname" value="<?php echo $fname3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			&nbsp;&nbsp;Middle Name: <input type="text" id="premname" name="premname" value="<?php echo $mname3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			&nbsp;&nbsp;Surname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="presname" name="presname" value="<?php echo $sname3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			&nbsp;&nbsp;Civil Status: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="precivStat" name="precivStat" value="<?php echo $civStat3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			&nbsp;&nbsp;Designation:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="predesi" name="predesi" value="<?php echo $desi3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
		</div>
		<div style="height: 100%; width: 38.3%; float: left;">
			<br>
			Number of Dependents: <input type="text" id="predepNo" name="predepNo" value="<?php echo $depNo3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			Paydate: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="prepayDate" name="prepayDate" value="<?php echo $payDate3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			Employee Status: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="preempStat" name="preempStat" value="<?php echo $empStat3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			Department: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="predept" name="predept" value="<?php echo $dept3pre; ?>" style="width: 200px; height: 23px" readonly><br>
		</div>
		<div style="height: 100%; width: 33.3%; float: left;">
			<input type="image" id="preempImg" name="preempImg" value="<?php echo $outputpre; ?>" style="width: 430px; height: 234px"><br>
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
	</div>
		<div class="secondDiv">
		<menu>
		<br>
		
		&nbsp;&nbsp;<mark>Basic Pay</mark><br>
		<br>
		&nbsp;&nbsp;Rate/Hour: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="preratehrB" name="preratehrB" value="<?php echo $basicRH3pre; ?>" style="width: 200px; height: 23px" readonly><br>
		<br>
		&nbsp;&nbsp;No.of Hrs/Cut off: &nbsp;&nbsp;<input type="text" id="prenohrB" name="prenohrB" value="<?php echo $basicNH3pre; ?>" style="width: 200px; height: 23px" readonly><br>
		<br>
		&nbsp;&nbsp;Income per Cut off: <input type="text" id="preincomeCutB" name="preincomeCutB" value="<?php echo $basicIC3pre; ?>" style=" background-color: pink; width: 200px; height: 23px;" readonly><br>
		<br>
		<br>
		&nbsp;&nbsp;<mark>Honorarium</mark><br>
		<br>
		&nbsp;&nbsp;Rate/Hour: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="prehon-ratehr" name="prehon-ratehr" value="<?php echo $honRH3pre; ?>" style="width: 200px; height: 23px" readonly><br>
		<br>
		&nbsp;&nbsp;No.of Hrs/Cut off:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" id="prehon-nohr" name="prehon-nohr" value="<?php echo $honNH3pre; ?>" style="width: 200px; height: 23px" readonly><br>
		<br>
		&nbsp;&nbsp;Total Honorarium Pay: <input type="text" id="pretHon" name="pretHon" value="<?php echo $honPay3pre; ?>" style="background-color: pink; width: 200px; height: 23px" readonly><br>
		<br>
		<br>
		&nbsp;&nbsp;<mark>Other Income</mark><br>
		<br>
		&nbsp;&nbsp;Rate/Hour: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="preother-ratehr" name="preother-ratehr" value="<?php echo $otherRH3pre; ?>"style="width: 200px; height: 23px" readonly><br>
		<br>
		&nbsp;&nbsp;No.of Hrs/Cut off:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" id="preother-nohr" name="preother-nohr" value="<?php echo $otherNH3pre; ?>" style="width: 200px; height: 23px" readonly><br>
		<br>
		&nbsp;&nbsp;Total Other Income Pay: <input type="text" id="pretOtherIP" name="pretOtherIP" value="<?php echo $otherPay3pre; ?>" style="background-color: pink; width: 200px; height: 23px" readonly><br>
		<br>
		<br>
		&nbsp;&nbsp;<mark>Income Summary</mark><br>
		<br>
		&nbsp;&nbsp;Gross Income:&nbsp;&nbsp;<input type="text" id="pretOtherG" name="pretOtherG" value="<?php echo $grossIC3pre; ?>" style="width: 200px; height: 23px" readonly><br>
		<br>
		&nbsp;&nbsp;NET Income:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="pretOtherNI" name="pretOtherNI" value="<?php echo $net3pre; ?>" style="width: 200px; height: 23px" readonly><br>
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
			SSS Contribution: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="presss" name="presss" value="<?php echo $socsesy3pre; ?>" style="background-color: pink; width: 200px; height: 23px" readonly><br>
			<br>
			PhilHealth Contribution: &nbsp;&nbsp; <input type="text" id="prebilyon" name="prebilyon" value="<?php echo $fifteen3pre; ?>" style="background-color: pink; width: 200px; height: 23px" readonly><br>
			<br>
			Pag-Ibig Contribution: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="preibig" name="preibig" value="<?php echo $love3pre; ?>" style="background-color: pink; width: 200px; height: 23px"><br>
			<br>
			<mark>Other Deductions</mark>
			<br>
			<br>
			SSS Loan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="presssL" name="presssL" value="<?php echo $loanS3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			Pag-Ibig Loan:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="preibigL" name="preibigL" value="<?php echo $loanLove3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			Faculty Savings Deposit: &nbsp;&nbsp; <input type="text" id="prefaculty" name="prefaculty" value="<?php echo $loanFacDe3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			Faculty Savings Loan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="prefacultyL" name="prefacultyL" value="<?php echo $loanFac3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			Salary Loan: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="presalaryL" name="presalaryL" value="<?php echo $loanSal3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			Others: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="preotheSel" id="preotheSel" value="<?php echo $loanOther3pre; ?>" style="width: 200px; height: 23px" readonly>
				<br>
				<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="preothers" name="preothers" value="<?php echo $loanOther3pre; ?>" style="width: 200px; height: 23px" readonly><br>
			<br>
			<br>
			<mark>Deduction Summary</mark>
			<br>
			<br> &nbsp;Total deductions: <br>
			&nbsp;&nbsp;<input type="text" id="predeSum" name="predeSum" value="<?php echo $deSumpre; ?>"  style="width: 350px; height: 100px" readonly>
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
	</div>
	</form>
	<div class="spaceDiv"></div>
</body>
</html>