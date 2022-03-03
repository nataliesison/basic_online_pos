<html>
<head>
	<title>Home</title>
	<style type="text/css">
	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  width: 200px;
  background-color: rgba(209, 160, 128,0.4);
}
li{
	float: left;
}

li a {
  display: block;
  color: #000;
  text-align: center;
  padding: 24px 24px;
  text-decoration: none;
}

li a.active {
  background-color: #deb887;
  color: white;
  font-size: 30px;
}

li a:hover:not(.active) {
  background-color: rgba(209, 160, 128,0.4);
  color: white;
  font-size: 30px;
}
	body{
		background-image: url('background.jpg');
 		background-repeat: repeat;
	}
	.headerDiv{
		background-color:#deb887;
		height: 5%;
		width: 100%;
		float: left;
		border-radius: 15px;
	}
	.spaceDiv{
		height: 1%;
		width: 100%;
		float: left;
	}
	.sideL{
		
		height: 13%;
		width: 100%;
		float: left;
    	border: solid #e4dac2;
	}
	.sideR{
		
		height: 100%;
		width: 100%;
		float: left;
    	border: solid #e4dac2;
	}
	iframe {
			width: 102%;
			height: 102%;
		}
	</style>
</head>
<body>
	<div class="sideL">
		<ul style="width: 100%">
  <li><a href="homedesign.html" target="myFrame">Home</a></li>
  <li><a href="employeeList.php" target="myFrame">Employee</a></li>
  <li><a href="payroll_list.php" target="myFrame">Payroll</a></li>
  <li><a href="userlist.php" target="myFrame">User Accounts</a></li>
  <li><a href="indexadmin.php" target="myFrame">POS A</a></li>
  <li><a href="posA_list.php" target="myFrame">Sales of POS A</a></li>
  <li><a href="cashieradmin.php" target="myFrame">POS B</a></li>
  <li><a href="posB_list.php" target="myFrame">Sales of POS B</a></li>
  <li><a href="login.php">Logout</a></li>
</ul>
	</div>

	<div class="sideR">

		<iframe src="homedesign.html" name="myFrame"></iframe>
	</div>


</body>
</html>