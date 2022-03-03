<!DOCTYPE html>
<html>
<head>
	<title>USER INFO</title>
	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

	<?php
		session_start();
		include 'db.php';

		if(isset($_POST['update'])){
			if (isset($_POST['name'])) {
    			$employeename = $_POST['name'];
			}
			if (isset($_POST['empni'])) {
    			$employeenum = $_POST['empni'];
			}
			if (isset($_POST['uname'])) {
    			$employeeUname = $_POST['uname'];
			}
			if (isset($_POST['utype'])) {
    			$employeeUtype = $_POST['utype'];
			}
			if (isset($_POST['desig'])) {
    			$employeedesig = $_POST['desig'];
			}
			if (isset($_POST['dept'])) {
    			$employeedept = $_POST['dept'];
			}

			$sql = "UPDATE user_tbl SET employeeName='$employeename', designation='$employeedesig', dept='employeedept', username='$employeeUname', usertype='$employeeUtype' WHERE employeeNum= $employeenum ";

			if ($conn->query($sql) === TRUE) {
  				echo "Record updated successfully";
			} 

			else {
  				echo "Error updating record: " . $conn->error;
			}

			$conn->close();
		}

		if(isset($_POST['cancel'])){
			header('Location: userlist.php');
			exit;
		}

	?>

	<style type="text/css">
		body{
			background-color: beige;
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
			height: 5%;
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

		<center><h4> UPDATE USER INFO</h4></center>
	</div>
	<div class="spaceDiv"> </div>
	<div class="firstDiv">
		<div style="height: 100%; width: 15%; float: left;">	
			&nbsp;
		</div>
		<div style="height: 100%; width: 20%; float: left;">	
			<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
			<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
			<p><img id="output" name="output" width="200" height="200" /></p>
			<br>
		</div>
		<form method="post">
		<div style="height: 100%; width: 29%; float: left; ">
			<br>
			<br>
			Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="name">
			<br>
			<br>
			ID No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="empni" id="empni">
			<br>
			<br>
			Username: &nbsp;&nbsp;<input type="text" name="uname" id="uname">
			<br>
			<br>
			User Type: &nbsp;&nbsp;<input type="text" name="utype" id="utype">
			<br>
			<br>
			Designation: <input type="text" name="desig" id="desig">
			<br>
			<br>
			Department: <input type="text" name="dept" id="dept">
		</div>
		<div style="height: 100%; width: 20%; float: left;">	
			<br>
			<br><br>
			<br>
			<input type="submit" name="update" id="update" value="update" style="">
			<br>
			<br>
			<input type="submit" name="delete" id="delete" value="delete">
			<br>
			<br>
			<input type="submit" name="cancel" id="cancel" value="cancel">
			<br>
			<br>


		</div>
		</form>
		<div style="height: 100%; width: 15%; float: left;">	
			&nbsp;
		</div>

	</div>

	<script type="text/javascript"> 
		var employee_id = localStorage.getItem("empNo");
        var employee_name = localStorage.getItem("empngalan");
        var employee_desig = localStorage.getItem("empdes");
        var employee_dept = localStorage.getItem("empdep");
        var employee_user = localStorage.getItem("empuse");
        var employee_type = localStorage.getItem("empty");
        var employee_stat = localStorage.getItem("empstatr");

		document.getElementById("empni").value = employee_id;
		document.getElementById("name").value = employee_name;
		document.getElementById("uname").value = employee_user;
		document.getElementById("utype").value = employee_type;
		document.getElementById("desig").value = employee_desig;
		document.getElementById("dept").value = employee_dept;
	</script>

</body>
</html>