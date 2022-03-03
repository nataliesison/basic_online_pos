<?php
session_start();
include 'db.php';

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


			$sql = "INSERT INTO newemp(fname, mname, lname,suffix, birthday,gender,nationality, civStat, dept, designation, qDepStat, empStat, paydate, empNo, socmed, socmedID, contact, email, add1, add2, cityMun, stateprov, country, zipcode) VALUES('$firstN', '$middleN', '$lastN', '$sufN', '$bornday', '$sex', '$nationality', '$civilStat', '$fdepartment', '$designation', '$qualidepstat', '$employeeStat', '$datepay', '$empNum','$socmedia', '$socmedNum', '$contactnum', '$emailadd',  '$addr1', '$addr2', '$cityMuni', '$stateprovi', '$bansa', '$zipcode')";

			if ($conn->query($sql) === TRUE) {
  				echo "New record created successfully";
			} 
			else {
  				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
	}

?>