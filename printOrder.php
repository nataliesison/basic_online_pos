<?php
		session_start(); 
		$printed = $_SESSION['printList'];
?>
<script>
function refreshPage(){
    window.location.reload();
}
function ClearFields() {

     document.getElementById("printList").value = "";
} 
</script>
<html>
<head>
	<title>PRINT ORDER</title>
	<style type="text/css">
	body{
  	background-image: url('background.jpg');
 	background-repeat: repeat;
 	width:1000px;
 	margin: 0 auto;
  	}
  	textarea{
  		width: 900px;
  		height:250px;
  	}
  	.headerDiv{
	background-color: rgb(210,180,140);
	height: 16%;
	width: 100%;
	float: left;
    border-radius: 15px;
	}
	.order{
		width: 100%;
		height: 50%;
		background-color: rgba(210,180,140,0.5);
		float: left;
		border-radius: 15px;
	}
	.spaceDiv{
		width: 100%;
		height: 5%;
		float: left;
	}
	</style>
</head>
<body>
	<div class="headerDiv">
		<br>
		<center><h1 style="color: white;">ORDER SUMMARY</h1></center>
	</div>
	<div class="spaceDiv">
		
	</div>
	<div class="order">
		<p>
			<center>L I S T</center>
			<center>
				<textarea name="printList" id="printList" readonly>
<?php echo "\n","\n", $printed; ?>
				</textArea>
			</center>
		</p>	
			<br>
			<br>
			<br>
			<br>
			<center>
				<button type="submit" id="clearprint" onclick="ClearFields();">Clear</button>
				<button type="submit" id="exitprint" onclick="window.close();">Exit</button>
			</center>
	</div>
</body>
</html>