<?php
	if(isset($_POST['update'])){
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
		if (isset($_POST['empNums'])) {
    		$employeeNum = $_POST['empNums'];
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

					$sql_update = "UPDATE newemp SET fname = '$firstN', mname= '$middleN', lname = '$lastN', suffix = '$sufN', birthday = '$bornday',gender = '$sex', nationality = '$nationality', civStat = '$civilStat', dept = '$fdepartment', designation = '$designation', qDepStat = '$qualidepstat', empStat = '$employeeStat', paydate = '$datepay', empNo = '$employeeNum', socmed = '$socmedia', socmedID = '$socmedNum', contact = '$contactnum', email = '$emailadd', add1 = '$addr1', add2 = '$addr2', cityMun = '$cityMuni', stateprov = '$stateprovi', country = '$bansa', zipcode = '$zipcode' WHERE empNo = $employeeNum";

					if ($conn->query($sql_update) === TRUE) {
  						echo "<h1><center>UPDATED record successfully</center></h1>";
					} 
					else {
  						echo "Error: " . $sql_update . "<br>" . $conn->error;
					}

					  
	}


	if(isset($_POST['delete'])){

		if (isset($_POST['empNums'])) {
    		$employeeNum = $_POST['empNums'];
		}

		$sql_delete = "DELETE FROM newemp WHERE empNo = '$employeeNum'";

		if ($conn->query($sql_delete) === TRUE) {
  			echo "<h1><center>Deleted record successfully</center></h1>";
		} 
		else{
  			echo "Error: " . $sql_delete . "<br>" . $conn->error;
		}
	}

?>
