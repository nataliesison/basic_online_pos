<html>
    <head>
      <title></title>
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

      function calculator($q,$p,$d){
        $total = $q * $p;
        $withDisc = ($q * $p) - $d;

        return $withDisc;
      }

      if(isset($_POST['calculate'])){

        if(isset($_POST['QuaItem'])){
          $quan = $_POST['QuaItem'];
        }
        if(isset($_POST['priceItem'])){
          $presyo = $_POST['priceItem'];
        }
        if(isset($_POST['disItem'])){
          $disc = $_POST['disItem'];
        }
        if(isset($_POST['orderList'])){
          $list = $_POST['orderList'];
        }
        if(isset($_POST['orderList2'])){
          $list2 = $_POST['orderList2'];
        }
        $list2 .= $list;
        $z = calculator($quan,$presyo,$disc);

        $discountedamount = $presyo - $disc;


        $sql = "INSERT INTO pos1(Item_Name, price,quantity, discount_amt, discounted_amt) VALUES('$list', '$presyo', '$quan', '$disc', '$discountedamount')";


      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } 
      else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();

        
      }
      if(isset($_POST['new'])){

          if(isset($_POST['QuaItem'])){
              $currquan = $_POST['QuaItem'];
          }
          if(isset($_POST['priceItem'])){
              $currpresyo = $_POST['priceItem'];
          }
          if(isset($_POST['disItem'])){
              $currdisc = $_POST['disItem'];
          }
          if(isset($_POST['tBills'])){
              $totalBills = $_POST['tBills'];
          }
          if(isset($_POST['tQua'])){
              $tq = $_POST['tQua'];
          }
          if(isset($_POST['orderList'])){
            $listAm = $_POST['orderList'];
          }
          if(isset($_POST['orderList2'])){
            $listAm2 = $_POST['orderList2'];
          }

          $listAm2 .= $listAm;
          $withDisc2 = ($currquan*$currpresyo)-$currdisc;
          $currTotal = $totalBills+$withDisc2;
          $totalQty = $tq+$currquan;

          $discounted = $currpresyo - $currdisc;

          $sql = "INSERT INTO pos1(Item_Name, price,quantity, discount_amt, discounted_amt) VALUES('$listAm', '$currpresyo', '$currquan', '$currdisc', '$discounted')";


      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } 
      else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();

        

      }
       if(isset($_POST['calAm'])){

        if(isset($_POST['tBills'])){
            $tb = $_POST['tBills'];
        }
        if(isset($_POST['CashG'])){
            $cashgiven = $_POST['CashG'];
        }
        if(isset($_POST['orderList2'])){
            $listTotal = $_POST['orderList2'];
        }

        $change= $cashgiven-$tb;

        $query = "SELECT MAX(`pos1_id`) FROM `pos1`";
        $result =$conn->query($query);

        $queryresult = $result->fetch_array()['MAX(`pos1_id`)'] ?? '';

        $insertCashChange = "UPDATE `pos1` SET cash_given = '$cashgiven', customer_change = '$change' WHERE `pos1_id` = '$queryresult'";
        $sql_cc = mysqli_query($conn, $insertCashChange); 

        if (mysqli_query($conn, $sql_cc)) {
                echo "Record updated successfully";
            } 
            else {
                //echo "Error updating record: " . mysqli_error($conn);
            }
       } 

       if(isset($_POST['printder'])){

          if(isset($_POST['orderList2'])){
            $list2print = $_POST['orderList2'];
          }

          $_SESSION["printList"] = $list2print;
       }

  ?>
    <script>
      $(document).ready(function(){

        $("#bag1").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 3030.00;
            var bag = document.getElementById("bag1").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag2").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 10800.00;
            var bag = document.getElementById("bag2").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag3").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 3025.00;
            var bag = document.getElementById("bag3").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag4").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 3300.00;
            var bag = document.getElementById("bag4").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag5").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 3235.00;
            var bag = document.getElementById("bag5").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag6").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 4020.00;
            var bag = document.getElementById("bag6").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag7").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 5205.00;
            var bag = document.getElementById("bag7").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag8").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 4350.00;
            var bag = document.getElementById("bag8").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag9").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 5145.00;
            var bag = document.getElementById("bag9").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag10").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 3500.00;
            var bag = document.getElementById("bag10").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag11").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 6815.00;
            var bag = document.getElementById("bag11").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });
        $("#bag12").click(function(e){
          if($(this).prop("checked") == true){
            document.getElementById("priceItem").value = 6210.00;
            var bag = document.getElementById("bag12").value;
            document.getElementById("orderList").innerHTML = bag; 
          }
          else{
            document.getElementById("priceItem").value = "";
          }
        });

        $("#bunA").click(function(e){
          // e.preventDefault();
          if($(this).prop("checked") == true){

            $('#item1a , #item1b, #item1c').attr('checked', true); 
            $('#item2a , #item2b, #item2c').attr('checked', false);
            document.getElementById("priceItem").value = 25000;

            var checkboxes = document.querySelectorAll("input[name='item1[]']:checked")
  
            var values = "";
  
            for(var i=0;i<checkboxes.length;i++){
              values += checkboxes[i]
              .value + " \n " + " \n " 
            }

              values = values.slice(0,values.length-1)
            
              document.getElementById("orderList2").value = values;
            
          }
        });
        $("#bunB").click(function(e){
          // e.preventDefault();
          if($(this).prop("checked") == true){

            $('#item2a , #item2b, #item2c').attr('checked', true);
            $('#item1a , #item1b, #item1c').attr('checked', false); 
            document.getElementById("priceItem").value = 24500;

            var checkboxes = document.querySelectorAll("input[name='item2[]']:checked")
  
            var values = "";
  
            for(var i=0;i<checkboxes.length;i++){
              values += checkboxes[i]
              .value + " \n " + " \n " 
            }

              values = values.slice(0,values.length-1)
            
              document.getElementById("orderList2").value = values;

          }
        });

      });
      
        function openLink() {
          window.open("printOrder.php");window.open("printOrder.php");
        }

      /*-------------------------------------
          
          for displaying checked chekboxes in text area

        ---------------------------------------------------------*/
       


  </script>
      <style type="text/css">
      body{
      background-image: url('background.jpg');
      background-repeat: repeat;
      }
      .headerDiv{
      background-color: rgb(210,180,140);
      height: 16%;
      width: 100%;
      float: left;
      border-radius: 15px;
    }
    .spaceDiv{
      height: 1.5%;
      width: 100%;
      float: left;
    }
    .sideL{
      background-color: rgba(210,180,140,0.4);
      height: 113%;
      width: 39%;
      float: left;
      border: solid #b38b6d;
      border-radius: 15px;
    }
    .midBod {
      height: 105%;
      width: 60.5%;
      float: left;
    }
    .bagDiv{
      height:33.3%;
      width: 24.5%;
      float: left;
      font-family: Georga;
      color: #856d4d;
    }
    .buttonDiv{
      height:10%;
      width: 60%;
      float: left;
    }
    button{
      height: 77%;
      width: 19.5%;
      background-color: #c19a6b;
      border-radius: 15px;
    }
    </style>

    </head>
    <body>
      <div class=headerDiv>
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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<FONT face=Perpetua Titling MT size=10 COLOR=WHITE>SHOPPING APPLICATION</FONT>
        </div>
      </div>
      <div class=spaceDiv>
        <a href="login.php" style="float: right;">LOGOUT</a>
      </div>
      <div class=sideL>
        <div style="height: 100%; width: 49%; float: left;">
          <menu border>
          Bundle Choices<br>
          <br>
          <input type="radio" id="bunA" name="bun"> Bundle A<br>
          <input type="radio" id="bunB" name="bun"> Bundle B
          </menu>
          <form id="orderz" action="" method="post">
          <menu>
            ORDER DETAILS<br>
            <br>
            Price:&nbsp; &nbsp;&nbsp; &nbsp;<input type="text" id="priceItem" name="priceItem" style="width: 100px; height: 30px"><br>
            <br>
            Quantity: <input type="text" id=" QuaItem" name="QuaItem" style="width: 100px; height: 30px"><br>
            <br>
            Discount <br>Amount: <input type="text" id="disItem" name="disItem" style="width: 100px; height: 30px"><br>
           <br>
            Discounted <br>Amount: <input type="text" id="disCItem" name="disCItem" style="width: 100px; height: 30px" value="<?php if (isset($z)) echo $z ?><?php if (isset($withDisc2)) echo $withDisc2 ?>"><br>
           <br>
            Total Bills: <input type="text" id="tBills" name="tBills" style="width: 90px; height: 30px" value="<?php if (isset($z)) echo $z ?><?php if (isset($currTotal)) echo $currTotal ?>"><br>
           <br>
            Total Quantity: <input type="text" id="tQua" name="tQua" style="width: 65px; height: 30px" value="<?php if (isset($quan)) echo $quan ?><?php if (isset($totalQty)) echo $totalQty ?>"><br>
           <br>
            Cash Given: <input type="text" id="CashG" name="CashG" style="width: 80px; height: 30px"><br>
           <br>
            Change: &nbsp;&nbsp;<input type="text" id="change" name="change" style="width: 100px; height: 30px" value="<?php if (isset($change)) echo $change ?>"><br>
        </menu>
        &nbsp; &nbsp;<textarea id="orderList" name="orderList" rows="8" cols="30" value="orderList" style="width: 235px; height: 154px; background-color: #c19a6b;">
        </textarea>


        </div>

        <div style="height: 100%; width: 49%; float: left;">
          <menu>
               BUNDLE A<br>
              <br>
              <input type="checkbox" id="item1a" name="item1[]" class="bundleA" value="Chanel Wallet on Chain Chevron Caviar">Chanel Wallet on Chain Chevron Caviar<br>
              <br>
              <input type="checkbox" id="item1b" name="item1[]" class="bundleA" value="Chanel Evening Bag No.5 Perfume Bottle">Chanel Evening Bag No.5 Perfume Bottle<br>
              <br>
              <input type="checkbox" id="item1c" name="item1[]" onclick="addValue(this)" class="bundleA" value="Chanel Grand Shopping Tote Quilted Caviar">Chanel Grand Shopping Tote Quilted Caviar<br>
          </menu>
          <br>
          <br>
          <menu>
            BUNDLE B<br>
            <br>
            <input type="checkbox" id="item2a" name="item2[]" class="bundleB" value="Chanel ClutchStrass Plexiglass"> Chanel ClutchStrass Plexiglass<br>
            <br>
            <input type="checkbox" id="item2b" name="item2[]" class="bundleB" value="Chanel BoyFlap Bag Quilted Calfskin">Chanel BoyFlap Bag Quilted Calfskin<br>
            <br>
            <input type="checkbox" id="item2c" name="item2[]" class="bundleB" value="Chanel Quilted Gabrielle Backpack">Chanel Quilted Gabrielle Backpack<br>
          </menu>
          <br>
          <br>
          <br>
          <br>
          <br>
          <textarea id="orderList2" name="orderList2" rows="8" cols="30" style="width: 235px; height: 154px; background-color: #c19a6b;">
            <?php if (isset($list2)) echo $list2 ?> <?php if (isset($quan)) echo "|", "QTY:", $quan?> <?php if (isset($presyo)) echo "|", "Price: ", $presyo, "\n"?>
            <?php if (isset($listAm2)) echo $listAm2 ?> <?php if (isset($currquan)) echo "|", "QTY:", $currquan ?> <?php if (isset($currpresyo)) echo "|", "Price: ", $currpresyo , "\n"?>
            <?php if (isset($listTotal)) echo $listTotal, "\n", "Total Amount: ", $tb, "\n", "Cash Given: ", $cashgiven, "\n", "Change: ", $change ?>
          </textarea>
        </div>

      </div>
      
      <div class=midBod>

        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-wallet-chain.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag1" name="bag[]" value="Chanel Wallet on Chain Chevron Caviar"> Chanel Wallet on Chain Chevron Caviar ($3030)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-perfume-bag.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag2" name="bag[]" value="Chanel Evening Bag No.5 Perfume Bottle"> Chanel Evening Bag No.5 Perfume Bottle ($10800)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-grand.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag3" name="bag[]" value="Chanel Grand Shopping Tote Quilted Caviar "> Chanel Grand Shopping Tote Quilted Caviar ($3025)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-gab.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag4" name="bag[]" value="Chanel Gabrielle Hobo QuiltedAged Calfskin"> Chanel Gabrielle Hobo QuiltedAged Calfskin($3300)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-diamond.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag5" name="bag[]" value="Chanel Camera Case Bag Quilted Lambskin"> Chanel Camera Case Bag Quilted Lambskin ($3235)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-clutch.png" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag6" name="bag[]"  value="Chanel ClutchStrass Plexiglass"> Chanel ClutchStrass Plexiglass ($4020)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-boy.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag7" name="bag[]"  value="Chanel BoyFlap Bag Quilted Calfskin"> Chanel BoyFlap Bag Quilted Calfskin($5205)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-classic-white.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag8" name="bag[]" value="ClassicDouble FlapBag QuiltedLambskin"> ClassicDouble FlapBag QuiltedLambskin ($4350)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-backpack.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag9" name="bag[]" value="Chanel Quilted Gabrielle Backpack"> Chanel Quilted Gabrielle Backpack ($5145)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-art.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag10" name="bag[]"  value="Chanel Art School Backpack Graffiti"> Chanel Art School Backpack Graffiti($3500)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-2-55.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag11" name="bag[]" value="Chanel Reissue 2.55 FlapBag"> Chanel Reissue 2.55 FlapBag ($6815)</center>
        </div>
        <div class=bagDiv>
          <br>
          <CENTER><IMG SRC="chanel-classic.jpg" HEIGHT=150 WIDTH=150></CENTER>
          <center><input type="checkbox" id="bag12" name="bag[]" value="Chanel Classic Double Flap Bag"> Chanel Classic Double Flap Bag ($6210)</center>
        </div>
      </div>
      <div class=buttonDiv>
        <button type="submit" name="calculate" id="calculate">Calculate</button>
        <button type="submit" name="printder" id="printder" onclick="openLink()">Print Order</button>
        <button type="submit" name="new" id="new">New</button>
        <button type="submit" name="calAm" id="calAm">Calculate Total Orders</button>
        <button type="submit" name="exit" id="exit">Exit</button>
      </div>
    </form>     
    </body>
  </html>                       