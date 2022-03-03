<html>
<head>
	<title>POS A SALES</title>
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
          <FONT face=Perpetua Titling MT size=10 COLOR=white>Sales Summary of POS A</FONT>
        </div>
	</div>
	<div class="spaceDiv">

	</div>

  <form action="" method="post">
  <div style="float: right;">
      <span style="margin-top: 5px;">Sales ID: </span>
      <input type="text" style="margin-top: 5px;" id="query" name="query">
      <input type="submit" id="search_btn" name="search_btn" class="btn btn-danger" value="search" style="padding: 5px; margin-bottom: 5px;">
  </div>
	<table id="users">
  <tr>
    <th>Sales #</th>
    <th>Item Name</th>
    <th>Price</th>
    <th>Qty</th>
    <th>Discount Amt</th>
    <th>Discounted Amt</th>
    <th>Cash from Customer</th>
    <th>Change</th>
  </tr>
  <tbody>
  <tr>
    <?php
      include "db.php";
      //$conn = OpenCon();
      $sql = "SELECT * FROM pos1 ORDER BY pos1_id ASC";

      $result = $conn->query($sql);
      if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
          ?>
          <tr>
            <td><?php echo $row['pos1_id'];?></td>
            <td><?php echo $row['Item_Name'];?></td>
            <td><?php echo $row['price'];?></td>
            <td><?php echo $row['quantity'];?></td>
            <td><?php echo $row['discount_amt'];?></td>
            <td><?php echo $row['discounted_amt'];?></td>
            <td><?php echo $row['cash_given'];?></td>
            <td><?php echo $row['customer_change'];?></td>
          </tr>
          <?php
        }
        echo "</table>";
      } else{
        echo "0 results";
      }
      


      if(isset($_POST['search_btn'])){
        if (isset($_POST['query'])) {
        $searchTB = $_POST['query'];
      }

      $sql = "SELECT * FROM pos1 WHERE pos1_id = $searchTB";
      $query_runs = mysqli_query($conn, $sql);

      if(mysqli_num_rows($query_runs)>0){
        foreach($query_runs as $row){

      ?>
        <table id="users">
        <tr>
          <th>Sales #</th>
          <th>Item Name</th>
          <th>Price</th>
          <th>Qty</th>
          <th>Discount Amt</th>
          <th>Discounted Amt</th>
          <th>Cash from Customer</th>
          <th>Change</th>
        </tr>
        <tr>
          <td><?php echo $row['pos1_id'];?></td>
          <td><?php echo $row['Item_Name'];?></td>
          <td><?php echo $row['price'];?></td>
          <td><?php echo $row['quantity'];?></td>
          <td><?php echo $row['discount_amt'];?></td>
          <td><?php echo $row['discounted_amt'];?></td>
          <td><?php echo $row['cash_given'];?></td>
          <td><?php echo $row['customer_change'];?></td>
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
</body>
</html>