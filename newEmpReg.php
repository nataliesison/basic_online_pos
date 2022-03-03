<html>
<head>
	<?php
session_start();
include 'db.php';

		
	if(isset($_POST['cancel'])){
		header('Location: adminHome.php');
		exit;
	}
	if(isset($_POST['delete'])){
		header('Location: adminHome.php');
		exit;
	}

	if(isset($_POST['save'])){
		if (isset($_POST['fname'])) {
    		$firstN = $_POST['fname'];
		}
		if (isset($_POST['mname'])) {
    		$middleN = $_POST['mname'];
		}
		if (isset($_POST['lname'])) {
    		$lastN = $_POST['lname'];
		}
		if (isset($_POST['suf'])) {
    		$sufN = $_POST['suf'];
		}
		if (isset($_POST['bday'])) {
    		$bornday = $_POST['bday'];
		}
		if (isset($_POST['gender'])) {
    		$sex = $_POST['gender'];
		}
		if (isset($_POST['natio'])) {
    		$nationality = $_POST['natio'];
		}
		if (isset($_POST['civStat'])) {
    		$civilStat = $_POST['civStat'];
		}
		if (isset($_POST['dept'])) {
    		$fdepartment = $_POST['dept'];
		}
		if (isset($_POST['desig'])) {
    		$designation = $_POST['desig'];
		}
		if (isset($_POST['qdepstat'])) {
    		$qualidepstat = $_POST['qdepstat'];
		}
		if (isset($_POST['empStat'])) {
    		$employeeStat = $_POST['empStat'];
		}
		if (isset($_POST['paydate'])) {
    		$datepay = $_POST['paydate'];
		}
		if (isset($_POST['empNum'])) {
    		$employeeNum = $_POST['empNum'];
		}
		if (isset($_POST['contactNo'])) {
    		$contactnum= $_POST['contactNo'];
		}
		if (isset($_POST['email'])) {
    		$emailadd = $_POST['email'];
		}
		if (isset($_POST['socmed'])) {
    		$socmedia = $_POST['socmed'];
		}
		if (isset($_POST['socmedID'])) {
    		$socmedNum = $_POST['socmedID']; 
		}
		if (isset($_POST['add1'])) {
    		$addr1 = $_POST['add1'];
		}
		if (isset($_POST['add2'])) {
    		$addr2 = $_POST['add2'];
		}
		if (isset($_POST['cityMun'])) {
    		$cityMuni = $_POST['cityMun'];
		}
		if (isset($_POST['stateprov'])) {
    		$stateprovi = $_POST['stateprov'];
		}
		if (isset($_POST['country'])) {
    		$bansa = $_POST['country'];
		}
		if (isset($_POST['zip'])) {
    		$zipcode = $_POST['zip'];
		}

		if (isset($_POST['usernamee'])) {
    		$usename = $_POST['usernamee'];
		}
		if (isset($_POST['usertypee'])) {
    		$usetype = $_POST['usertypee'];
		}
		if (isset($_POST['userstatt'])) {
    		$usestat = $_POST['userstatt'];
		}



			$sql = "INSERT INTO newemp(fname, mname, lname,suffix, birthday,gender,nationality, civStat, dept, designation, qDepStat, empStat, paydate, empNo, socmed, socmedID, contact, email, add1, add2, cityMun, stateprov, country, zipcode) VALUES('$firstN', '$middleN', '$lastN', '$sufN', '$bornday', '$sex', '$nationality', '$civilStat', '$fdepartment', '$designation', '$qualidepstat', '$employeeStat', '$datepay', '$employeeNum','$socmedia', '$socmedNum', '$contactnum', '$emailadd',  '$addr1', '$addr2', '$cityMuni', '$stateprovi', '$bansa', '$zipcode')";


			if ($conn->query($sql) === TRUE) {
  				echo "New record created successfully";
			} 
			else {
  				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
	}

?>
	<title>New Employee Registration </title>
	<style type="text/css">
		body{
			background-image: url('background.jpg');
		}
		h4{
			font-family: Perpetua Titling MT;
			font-size: 23px;
			color: white;
		}
		.headerDiv{
			background-color:#deb887;
			height: 15%;
			width: 100%;
			float: left;
			border-radius: 15px;
		}
		.spaceDiv{
			height: 1.5%;
			width: 100%;
			float: left;
		}
		.firstDiv{
			height: 40%;
			width: 100%;
			float: left;
		}
		.secDiv{
			height: 30%;
			width: 100%;
			float: left;
		}
		.thirdDiv{
			height: 50%;
			width: 100%;
			float: left;
		}
	</style>
</head>
<body>
	<div class="headerDiv"> 

		<center><h4>Employee Registration</h4></center>
	</div>
	<div class="spaceDiv">
		
	</div>

	<form action="#" method="post">
	<div class="firstDiv">
		<div style="height: 100%; width: 9%; float: left;"></div>
		<div style="height: 100%; width: 18%; float: left;">
		<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
			<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
			<p><img id="output" name="output" width="200" height="200" /></p>
			<br>
		</div>
		<br>
			&nbsp;&nbsp;
			First Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Middle Name:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Suffix: <br>
			&nbsp;&nbsp;&nbsp;<input type="text" id="fname" name="fname" style="width: 200px; height: 25px;">
			&nbsp;&nbsp;<input type="text" id="mname" name="mname" style="width: 200px; height: 25px;">
			&nbsp;&nbsp;<input type="text" id="lname" name="lname" style="width: 200px; height: 25px;">
			&nbsp;&nbsp;<input type="text" id="suf" name="suf" style="width: 200px; height: 25px;"><br>
			<br>

			&nbsp;&nbsp;
			Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Gender:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Nationality:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Civil Status: <br>
			&nbsp;&nbsp;&nbsp;<input type="date" id="bday" name="bday" style="width: 200px; height: 25px;">
			&nbsp;&nbsp;<select name="gender" id="gender" style="width: 200px; height: 25px;">
							<option value="none">---SELECT ONE---</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
			&nbsp;&nbsp;<input type="text" id="natio" name="natio" style="width: 200px; height: 25px;">
			&nbsp;&nbsp;<select name="civStat" id="civStat"style="width: 200px; height: 25px;">
							<option value="none">---SELECT ONE---</option>
							<option value="single">Single</option>
							<option value="married">Married</option>
							<option value="widow">Widow</option>
						</select>
				<br>
				<hr>
			&nbsp;&nbsp;
			Department: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Designation: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Qualified Dep. Status: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

			&nbsp;&nbsp;&nbsp;<input type="text" id="dept" name="dept" style="width: 400px; height: 25px;">
			&nbsp;&nbsp;<select name="desig" id="desig" style="width: 205px; height: 25px;">
							<option value="none">---SELECT ONE---</option>
							<option value="it">IT</option>
							<option value="cs">CS</option>
						</select>
			&nbsp;&nbsp;<select name="qdepstat" id="qdepstat"style="width: 205px; height: 25px;">
							<option value="none">---SELECT ONE---</option>
							<option value="manager">Manager</option>
							<option value="head">head</option>
							<option value="assistant">assistant</option>
						</select>
				<br>
				<br>

			&nbsp;&nbsp;
			Employee Status: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Paydate: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Employee Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

			&nbsp;&nbsp;&nbsp;<input type="text" id="empStat" name="empStat" style="width: 250px; height: 25px;">
			&nbsp;&nbsp;<input type="date" name="paydate" id="paydate" style="width: 280px; height: 25px;">

			&nbsp;&nbsp;<input type="text" name="empNum" id="empNum"style="width: 280px; height: 25px;">
			<hr>

	</div>
	<div class="secDiv">
		<div style="height: 100%; width: 19%; float: left;"></div>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<mark>Contact Information</mark>
		<br>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Contact No: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="contactNo" name="contactNo" style="width: 390px; height: 25px;">

		&nbsp;&nbsp;<input type="text" name="email" id="email"style="width: 420px; height: 25px;">
		<br>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Other(Social Media): &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Social Media Acc. ID/No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select id="socmed" name="socmed" style="width: 390px; height: 25px;">
			<option value="none">---SELECT ONE---</option>
			<option value="fb">Facebook</option>
			<option value="Twitter">Twitter</option>
			<option value="IG">Instagram</option>
		</select>

		&nbsp;&nbsp;<input type="text" name="socmedID" id="socmedID"style="width: 420px; height: 25px;">
		<br>
		
	</div>
	<div class="thirdDiv">
		<div style="height: 100%; width: 19%; float: left;"></div>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<mark>Address</mark>
		<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Address Line 1: <br>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="add1" id="add1"style="width: 820px; height: 25px;"> <br><br>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Address Line 2: <br>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="add2" id="add2"style="width: 820px; height: 25px;">
		<br>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		City Municipality: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		State/Province: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="cityMun" name="cityMun" style="width: 390px; height: 25px;">

		&nbsp;&nbsp;<input type="text" name="stateprov" id="stateprov"style="width: 420px; height: 25px;">
		<br>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Country: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Zip Code: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select id="country" name="country" style="width: 390px; height: 25px;">
			<option value="none">---SELECT ONE---</option>
			<option value="ph">Philippines</option>
			<option value="sokor">South Korea</option>
			<option value="france">France</option>
		</select>

		&nbsp;&nbsp;<input type="text" name="zip" id="zip"style="width: 420px; height: 25px;">
		<br>
		<br>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="save" id="save" value="Save" style="width: 100px; height: 25px;">
		<input type="submit" name="cancel" id="cancel" value="Cancel" style="width: 100px; height: 25px;">
		<input type="submit" name="delete" id="delete" value="delete" style="width: 100px; height: 25px;">
		<hr>
	</div>
	</form>
	<div class="spaceDiv"></div>


</body>
</html>