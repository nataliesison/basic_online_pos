<html>
<head>
	<title>List of Users</title>
  <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
	<style type="text/css">
	body{
		background-image: url('background.jpg');
 		background-repeat: repeat;
	}
	.headerDiv{
		background-color:#deb887;
		height: 15%;
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
		height: 88.1%;
		width: 29%;
		float: left;
    	border: solid #e4dac2;
	}

	#users {
  		font-family: Arial, Helvetica, sans-serif;
  		border-collapse: collapse;
  		width: 100%;
	}

	#users td, #users th {
 		border: 1px solid #ddd;
  		padding: 8px;
	}

	#users tr:nth-child(even){background-color: white;}

	#users tr:hover {background-color: #ddd;}

	#users th {
  		padding-top: 12px;
  		padding-bottom: 12px;
  		text-align: left;
  		background-color: #e4dac2;
  		color: black;
	}
	</style>
</head>
<body>
	<div class="headerDiv">
		<div style="height: 100%; width: 13%; float: left;">
          <div class="spaceDiv"></div>
          <div class="spaceDiv"></div>
          <div class="spaceDiv"></div>
          <div class="spaceDiv"></div>
          <div class="spaceDiv"></div>
          <div class="spaceDiv"></div>
          <div class="spaceDiv"></div>
          <div class="spaceDiv"></div>
          <div class="spaceDiv"></div>
  		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<IMG SRC="chanellogo.png" HEIGHT=70 WIDTH=80> 
        </div>

        <div style="height: 100%; width: 87%; float: left">
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <FONT face=Perpetua Titling MT size=10 COLOR=white>List of Users</FONT>
        </div>
	</div>
	<div class="spaceDiv">

	</div>

  <form action="" method="post">
  <div style="float: right;">
      <span style="margin-top: 5px;">Employee Number: </span>
      <input type="text" style="margin-top: 5px;" id="empNum" name="empNum">
      <input type="submit" id="search_btn" name="search_btn" class="btn btn-danger" value="search" style="padding: 5px; margin-bottom: 5px;">
  </div>
	<table id="users">
  <tr>
    <th>Employee #</th>
    <th>Employee Name</th>
    <th>designation</th>
    <th>department</th>
    <th>username</th>
    <th>user type</th>
    <th>user status</th>
  </tr>
  <tbody>
  <tr>
    <?php
      include "db.php";
      //$conn = OpenCon();
      $sql = "SELECT * FROM user_tbl";

      if(isset($_GET['search'])){
        $employee_no = trim($_GET['empNum']);
        $sql .=" WHERE employeeNum = $employee_no";
      }
      $result = $conn->query($sql);
      if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
          ?>
          <tr data-href="userlistupdate.php">
            <td><?php echo $row['employeeNum'];?></td>
            <td><?php echo $row['employeeName'];?></td>
            <td><?php echo $row['designation'];?></td>
            <td><?php echo $row['dept'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['usertype'];?></td>
            <td><?php echo $row['user_stat'];?></td>
          </tr>
          <?php
        }
        echo "</table>";
      } else{
        echo "0 results";
      }
      

      if(isset($_POST['search_btn'])){
        if (isset($_POST['empNum'])) {
        $searchTB = $_POST['empNum'];
      }

      $sql = "SELECT * FROM user_tbl WHERE employeeNum = $searchTB";
      $query_runs = mysqli_query($conn, $sql);

      if(mysqli_num_rows($query_runs)>0){
        foreach($query_runs as $row){

      ?>
        <table id="users">
        <tr>
    <th>Employee #</th>
    <th>Employee Name</th>
    <th>designation</th>
    <th>department</th>
    <th>username</th>
    <th>user type</th>
    <th>user status</th>
  </tr>
         <tr data-href="userlistupdate.php">
            <td><?php echo $row['employeeNum'];?></td>
            <td><?php echo $row['employeeName'];?></td>
            <td><?php echo $row['designation'];?></td>
            <td><?php echo $row['dept'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['usertype'];?></td>
            <td><?php echo $row['user_stat'];?></td>
          </tr>
        
      ?>
      <?php
        

        
      }
    }
    else{
      echo "<h1><center>No record Found</center></h1>";
    }

  }

  $conn->close();
    ?>
  </tr>
</tbody>
</table>
</form>
<script type="text/javascript">

  document.addEventListener("DOMContentLoaded", () => {
        const rows = document.querySelectorAll("tr[data-href]");
         rows.forEach(row => {
            row.addEventListener("click", () => {

              var table = document.getElementById('users');

                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                      var empNumber = this.cells[0].innerHTML;
                      var empName = this.cells[1].innerHTML;
                      var empdesig = this.cells[2].innerHTML;
                      var empdept = this.cells[3].innerHTML;
                      var empuser = this.cells[4].innerHTML;
                      var emptype = this.cells[5].innerHTML;
                      var empstat = this.cells[6].innerHTML;

                        localStorage.setItem("empNo",empNumber);
                        localStorage.setItem("empngalan",empName);
                        localStorage.setItem("empdes",empdesig);
                        localStorage.setItem("empdep",empdept);
                        localStorage.setItem("empuse",empuser);
                        localStorage.setItem("empty",emptype);
                        localStorage.setItem("empstatr",empstat);
                        window.location.href = row.dataset.href;
                    };
                }
            });

         });
  });
</script>
</body>
</html>