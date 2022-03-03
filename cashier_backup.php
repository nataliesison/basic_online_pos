<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		background-image: url('bg2.jpg');
	}
	button{
     	width: 15%;
     	background-color: #b6666f;
     	border-radius: 15px;
    }
    mark{
		font-family: Perpetua Titling MT;
		font-size: 15px;
		font-weight: bold;
	}
	.headerDiv{
		background-color:#b6666f;
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
	.choices{
		height: 100%;
		width: 60.5%;
		float: left;
		overflow: auto;
	}
	.butDiv{
		height: 20%;
		width: 29%;
		float: left;
	}
	.butDiv2{
		height: 23%;
		width: 70%;
		float: left;
	}
	.bagDiv{
    	height:33.3%;
    	width: 24.5%;
    	float: left;
    	font-family: Georga;
    	color: #856d4d;
    }
    .sideL{
		background-color: rgba(209, 160, 128,0.4);
		height: 120%;
		width: 39%;
		float: left;
    	border: solid #e4dac2;
    	border-radius: 15px;
	}
	</style>
	<!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="js/script.js"></script>
 	
	<?php
	session_start();
		if(isset($_POST['calcu'])){
			if (isset($_POST['discAmC'])) {
    			$disc = $_POST['discAmC'];
			}
			if (isset($_POST['quaCash'])) {
    			$quan = $_POST['quaCash'];
			}
			if (isset($_POST['priceCash'])) {
    			$pri = $_POST['priceCash'];
			}
			if (isset($_POST['cashRen'])) {
    			$cash = $_POST['cashRen'];
			}
			if (isset($_POST['discdAmC'])) {
    			$discd = $_POST['discdAmC'];
			}
			//-----------------------
			/*if (isset($_POST['itemName'])) {
    			$item_cal = $_POST['itemName'];
			}
			
			if (isset($_POST['tPrice'])) {
    			$tpri_cal = $_POST['tPrice'];
			}
			if (isset($_POST['cashRen'])) {
    			$cash_cal = $_POST['cashRen'];
			}*/

			$blank = "";
			

		}
		if(isset($_POST['sukliB'])){
			if (isset($_POST['itemName'])) {
    			$item_sukli = $_POST['itemName'];
			}
			if (isset($_POST['discdAmC'])) {
    			$discd_sukli = $_POST['discdAmC'];
			}
			if (isset($_POST['cashRen'])) {
    			$cash_sukli = $_POST['cashRen'];
			}
			if (isset($_POST['discAmC'])) {
    			$disc_sukli = $_POST['discAmC'];
			}
			if (isset($_POST['quaCash'])) {
    			$quan_sukli = $_POST['quaCash'];
			}
			if (isset($_POST['priceCash'])) {
    			$pri_sukli = $_POST['priceCash'];
			}
			if (isset($_POST['tPrice'])) {
    			$tpri_sukli = $_POST['tPrice'];
			}
			if (isset($_POST['cashRen'])) {
    			$cash_sukli = $_POST['cashRen'];
			}
			if (isset($_POST['tDiscG'])) {
    			$sukliDisc = $_POST['tDiscG'];
			}
			if (isset($_POST['tDiscAm'])) {
    			$sukliAm = $_POST['tDiscAm'];
			}


			
			$sukli = $cash_sukli-$sukliAm;

		}
		if(isset($_POST['new'])){
			if (isset($_POST['tQuan'])) {
    			$totalQ = $_POST['tQuan'];
			}
			if (isset($_POST['tDiscG'])) {
    			$totalDisc = $_POST['tDiscG'];
			}
			if (isset($_POST['tDiscAm'])) {
    			$totalAm = $_POST['tDiscAm'];
			}
			if (isset($_POST['quaCash'])) {
    			$currQty = $_POST['quaCash'];
			}
			if (isset($_POST['discdAmC'])) {
    			$currAm = $_POST['discdAmC'];
			}
			if (isset($_POST['discAmC'])) {
    			$currD = $_POST['discAmC'];
			}

			$newTQ = $totalQ + $currQty;
			$newTAM = $totalAm + $currAm;
			$newTD = $totalDisc + $currD;

		}

		/*if(isset($_POST['exit'])){

			echo "<script>$('.contactForm')[0].reset();</script>";

		}*/
	?>
	<!-----------------for selecting bag of choice-------------------------------------------------------->
	<script>
	$(document).ready(function(){
		$("#bag1").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag1").onclick = document.getElementById("itemName").value = "Chanel Wallet on Chain Chevron Caviar";
 			document.getElementById("priceCash").value = "3030.00";
 		});
 		$("#bag2").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag2").onclick = document.getElementById("itemName").value = "Chanel Evening Bag No.5 Perfume Bottle";
 			document.getElementById("priceCash").value = "10800.00";
 		});
 		$("#bag3").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag3").onclick = document.getElementById("itemName").value = "Chanel Grand Shopping Tote Quilted Caviar";
 			document.getElementById("priceCash").value = "3025.00";
 		});
 		$("#bag4").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag4").onclick = document.getElementById("itemName").value = "Chanel Gabrielle Hobo QuiltedAged Calfskin";
 			document.getElementById("priceCash").value = "33000.00";
 		});
 		$("#bag5").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag5").onclick = document.getElementById("itemName").value = "Chanel Camera Case Bag Quilted Lambskin";
 			document.getElementById("priceCash").value = "3235.00";
 		});
 		$("#bag6").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag6").onclick = document.getElementById("itemName").value = "Chanel ClutchStrass Plexiglass";
 			document.getElementById("priceCash").value = "4020.00";
 		});
 		$("#bag7").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag7").onclick = document.getElementById("itemName").value = "Chanel BoyFlap Bag Quilted Calfskin";
 			document.getElementById("priceCash").value = "5205.00";
 		});
 		$("#bag8").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag8").onclick = document.getElementById("itemName").value = "ClassicDouble FlapBag QuiltedLambskin";
 			document.getElementById("priceCash").value = "4350.00";
 		});
 		$("#bag9").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag9").onclick = document.getElementById("itemName").value = "Chanel Quilted Gabrielle Backpack";
 			document.getElementById("priceCash").value = "5145.00";
 		});
 		$("#bag10").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag10").onclick = document.getElementById("itemName").value = "Chanel Art School Backpack Graffiti";
 			document.getElementById("priceCash").value = "3500.00";
 		});
 		$("#bag11").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag11").onclick = document.getElementById("itemName").value = "Chanel Reissue 2.55 FlapBag";
 			document.getElementById("priceCash").value = "6815.00";
 		});
 		$("#bag12").click(function(e){
 			e.preventDefault();
 			document.getElementById("bag12").onclick = document.getElementById("itemName").value = "Chanel Classic Double Flap Bag";
 			document.getElementById("priceCash").value = "6210.00";
 		});

 		//------------------for discount--------------------------------//

 		$("#senior").prop( "checked", false );
 		$("#empDisc").prop( "checked", false );
 		$("#noDisc").prop( "checked", false );
 		$("#empDisc").prop( "checked", false );
 		$("#discCard").prop( "checked", false );
 		var priceCash, quaCash, discdAmC, discAmC, cashRen, changeCash, tPrice;
 	
 		$("#senior").click(function(e){
 		// e.preventDefault();
 		if($(this).prop("checked") == true){
 			priceCash = $("#priceCash").val() - 0;
 			quaCash = $("#quaCash").val() - 0;
 			tPrice = priceCash*quaCash;
 			discAmC = (priceCash * quaCash) * .30;
 			discdAmC = (priceCash * quaCash) - discAmC; 
 			document.getElementById("priceCash").value = priceCash;
 			document.getElementById("tPrice").value = tPrice;
 			document.getElementById("quaCash").value = quaCash;
 			document.getElementById("discAmC").value = discAmC;
 			document.getElementById("discdAmC").value = discdAmC;
 			$("#empDisc").prop( "checked", false );
 			$("#noDisc").prop( "checked", false );
 			$("#empDisc").prop( "checked", false );
 			$("#discCard").prop( "checked", false ); 
 		}
 	});
 		$("#empDisc").click(function(e){
 		// e.preventDefault();
 		if($(this).prop("checked") == true){
 			priceCash = $("#priceCash").val() - 0;
 			quaCash = $("#quaCash").val() - 0;
 			tPrice = priceCash*quaCash;
 			discAmC = (priceCash * quaCash) * .10;
 			discdAmC = (priceCash * quaCash) - discAmC; 
 			document.getElementById("priceCash").value = priceCash;
 			document.getElementById("tPrice").value = tPrice;
 			document.getElementById("quaCash").value = quaCash;
 			document.getElementById("discAmC").value = discAmC;
 			document.getElementById("discdAmC").value = discdAmC;
 			$("#senior").prop( "checked", false );
 			$("#noDisc").prop( "checked", false );
 			$("#discCard").prop( "checked", false ); 
 		}
 	});

		$("#noDisc").click(function(e){
 		// e.preventDefault();
 		if($(this).prop("checked") == true){
 			priceCash = $("#priceCash").val() - 0;
 			quaCash = $("#quaCash").val() - 0;
 			tPrice = priceCash*quaCash;
 			discAmC = (priceCash * quaCash) * 0;
 			discdAmC = (priceCash * quaCash) - discAmC; 
 			document.getElementById("priceCash").value = priceCash;
 			document.getElementById("tPrice").value = tPrice;
 			document.getElementById("quaCash").value = quaCash;
 			document.getElementById("discAmC").value = discAmC;
 			document.getElementById("discdAmC").value = discdAmC;
 			$("#senior").prop( "checked", false );
 			$("#empDisc").prop( "checked", false );
 			$("#discCard").prop( "checked", false ); 
 		}
 	});

 		$("#discCard").click(function(e){
 		// e.preventDefault();
 		if($(this).prop("checked") == true){
 			priceCash = $("#priceCash").val() - 0;
 			quaCash = $("#quaCash").val() - 0;
 			tPrice = priceCash*quaCash;
 			discAmC = (priceCash * quaCash) * .20;
 			discdAmC = (priceCash * quaCash) - discAmC; 
 			document.getElementById("priceCash").value = priceCash;
 			document.getElementById("tPrice").value = tPrice;
 			document.getElementById("quaCash").value = quaCash;
 			document.getElementById("discAmC").value = discAmC;
 			document.getElementById("discdAmC").value = discdAmC;
 			$("#senior").prop( "checked", false );
 			$("#empDisc").prop( "checked", false );
 			$("#noDisc").prop( "checked", false ); 
 		}
 	});
 });


</script>
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
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<FONT face=Perpetua Titling MT size=10 COLOR=white>CHANEL POINT OF SALE</FONT>
        </div>
	</div>
	<div class="spaceDiv"></div>
	<form action="#" method="post">
	<div class="sideL">
		<br><br>
		<form id="cashier" action="" method="post">
		&nbsp;&nbsp;Item Name: <input type="text" id="itemName" value="<?php if (isset($item_sukli)) echo $item_sukli ?><?php if (isset($blank)) echo $blank ?> " name="itemName" style="width: 400px; height: 23px"><br><br>
		&nbsp;&nbsp;Quantity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="quaCash" name="quaCash" value="<?php if (isset($quan_sukli)) echo $quan_sukli ?><?php if (isset($blank)) echo $blank ?>" style="width: 200px; height: 23px; background-color: pink;">&nbsp;&nbsp;
		<input type="radio" id="senior" name="disc"> Senior Citizen &nbsp;
		<button name="calcu" type="submit">Calculate</button><br><br>
		&nbsp;&nbsp;Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="priceCash" name="priceCash" value="<?php if (isset($pri_sukli)) echo $pri_sukli ?><?php if (isset($blank)) echo $blank ?>" style="width: 200px; height: 23px">&nbsp;&nbsp;
		<input type="radio" id="discCard" name="disc">w/ Disc. Card &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="new">New</button><br><br>
		&nbsp;&nbsp;Total Price: &nbsp;&nbsp;<input type="text" id="tPrice" name="tPrice" value="<?php if (isset($tpri_sukli)) echo $tpri_sukli ?><?php if (isset($blank)) echo $blank ?> " style="width: 195px; height: 23px">&nbsp;&nbsp;
		<input type="radio" id="empDisc" name="disc">Employee Disc &nbsp;
		<button type="submit" name="sukliB">Change</button><br><br>
		&nbsp;&nbsp;Discount Amount:&nbsp;&nbsp;&nbsp;
		<input type="text" id="discAmC" name="discAmC" value="<?php if (isset($disc_sukli)) echo $disc_sukli ?><?php if (isset($blank)) echo $blank ?>"  style="width: 150px; height: 23px">&nbsp;&nbsp;
		<input type="radio" id="noDisc" name="disc">No Disc &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="exit" id="exit">Exit</button><br><br>
		&nbsp;&nbsp;Amount to Pay: &nbsp;&nbsp;
		<input type="text" id="discdAmC" name="discdAmC" value="<?php if (isset($discd_sukli)) echo $discd_sukli ?><?php if (isset($blank)) echo $blank ?>" style="width: 135px; height: 23px"><br><br>
		&nbsp;&nbsp;<mark>SUMMARY</mark><br><br>
		&nbsp;&nbsp;Total Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<input type="text" id="tQuan" name="tQuan" value="<?php if (isset($quan)) echo $quan?><?php if (isset($quan_sukli)) echo $quan_sukli?><?php if (isset($newTQ)) echo $newTQ ?>" style="width: 300px; height: 23px"><br><br>
		&nbsp;&nbsp;Total Discount Given:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="tDiscG" name="tDiscG" value="<?php if (isset($disc)) echo $disc ?><?php if (isset($newTD)) echo $newTD ?>" style="width: 300px; height: 23px"><br><br>
		&nbsp;&nbsp;Total Amount to Pay: <input type="text" id="tDiscAm" name="tDiscAm" value="<?php if (isset($discd)) echo $discd ?><?php if (isset($newTAM)) echo $newTAM ?>" style="width: 300px; height: 23px"><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mark>CASH RENDERED</mark>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mark>CHANGE</mark><br><br>
		&nbsp;&nbsp;<input type="text" id="cashRen" name="cashRen"  style="width: 250px; height: 100px">
		<input type="text" id="changeCash" name="changeCash"value="<?php if (isset($sukli)) echo $sukli ?>" style="width: 250px; height: 100px">
		<br><br>
	</form>
		<div class="butDiv">
			<button type="submit" style=" height: 160px; width: 150px; background-color: green">ENTER</button>
		</div> 
		<div class="butDiv2">
			<button name="divide" value="/" style="height: 40px; width: 87px; background-color: red"> / </button>
			<button name="multiply" value="*" style="height: 40px; width: 87px; background-color: red"> * </button>
			<button name="subtract" value="-" style="height: 40px; width: 87px; background-color: red"> - </button>
			<button name="add" value="+" style="height: 40px; width: 87px; background-color: red"> + </button>
			<br>
			<button name="six" value="6" style="height: 40px; width: 87px; background-color: red"> 6 </button>
			<button name="seven" value="7" style="height: 40px; width: 87px; background-color: red"> 7 </button>
			<button name="eight" value="8" style="height: 40px; width: 87px; background-color: red"> 8 </button>
			<button name="nine" value="9" style="height: 40px; width: 87px; background-color: red"> 9 </button>
			<br>
			<button name="two" value="2" style="height: 40px; width: 87px; background-color: red"> 2 </button>
			<button name="three" value="3" style="height: 40px; width: 87px; background-color: red"> 3 </button>
			<button name="four" value="4" style="height: 40px; width: 87px; background-color: red"> 4 </button>
			<button name="five" value="5" style="height: 40px; width: 87px; background-color: red"> 5 </button>
			<br>
			<button name="zero" value="0" style="height: 40px; width: 174px; background-color: red"> 0 </button>&nbsp;
			<button name="dot" value="." style="height: 40px; width: 87px; background-color: red"> . </button>
			<button name="one" value="1" style="height: 40px; width: 87px; background-color: red"> 1 </button>
		</div>

	</div>
	<div class="choices">
		<div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-wallet-chain.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag1" id="bag1"> Chanel Wallet on Chain Chevron Caviar ($3030)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-perfume-bag.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag2" id="bag2"> Chanel Evening Bag No.5 Perfume Bottle ($10800)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-grand.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag3" id="bag3"> Chanel Grand Shopping Tote Quilted Caviar ($3025)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-gab.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag4" id="bag4"> Chanel Gabrielle Hobo QuiltedAged Calfskin($3300)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-diamond.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag5" id="bag5"> Chanel Camera Case Bag Quilted Lambskin ($3235)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-clutch.png" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag6" id="bag6"> Chanel ClutchStrass Plexiglass ($4020)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-boy.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag7" id="bag7"> Chanel BoyFlap Bag Quilted Calfskin($5205)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-classic-white.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag8" id="bag8"> ClassicDouble FlapBag QuiltedLambskin ($4350)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-backpack.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag9" id="bag9"> Chanel Quilted Gabrielle Backpack ($5145)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-art.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag10" id="bag10"> Chanel Art School Backpack Graffiti($3500)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-2-55.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag11" id="bag11"> Chanel Reissue 2.55 FlapBag ($6815)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-classic.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><label for="bag12" id="bag12"> Chanel Classic Double Flap Bag ($6210)</center>
        </div>
	</div>
</form>
	<div class="spaceDiv"></div>
</body>
</html>