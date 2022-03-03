<?php
		session_start();

		//BUTTON GROSS INCOME
			if(isset($_POST['cgi'])){
				if (isset($_POST['ratehrB'])) {
    				$basicRH = $_POST['ratehrB'];
				}

				if (isset($_POST['nohrB'])) {
    				$basicNH = $_POST['nohrB'];
				}

				if (isset($_POST['hon-ratehr'])) {
    				$honRH = $_POST['hon-ratehr'];
				}

				if (isset($_POST['hon-nohr'])) {
    				$honNH = $_POST['hon-nohr'];
				}
				
				if (isset($_POST['other-ratehr'])) {
    				$otherRH = $_POST['other-ratehr'];
				}

				if (isset($_POST['other-nohr'])) {
    				$otherNH = $_POST['other-nohr'];
				}
  				 $basicIC = $basicRH * $basicNH;
  				 $honPay = $honRH * $honNH;
  				 $otherPay = $otherRH * $otherNH;
				 $grossIC= $basicIC+$honPay+$otherPay;
  				 

  				 //SSS CONTRIBUTION--------------------
  				 if($grossIC<=3250){
  				 	$sssCon=400;
  				 }
  				 else if($grossIC>=3750&&$grossIC<=3749.99){
  				 	$sssCon=465;
  				 }
  				 else if($grossIC>=3250&&$grossIC<=4249.99){
  				 	$sssCon=530;
  				 }
  				 else if($grossIC>=4250&&$grossIC<=4749.99){
  				 	$sssCon=595;
  				 }
  				 else if($grossIC>=4750&&$grossIC<=5249.99){
  				 	$sssCon=660;
  				 }
  				 else{
  				 	$sssCon=760;
  				 }

  				 //PHILHEALTH CONTRIBUTION---------------

  				 $phCon= 0.035*$grossIC;
  				 $pagibigCon=100;
  			}

  			//BUTTON NET INCOME
  			if(isset($_POST['cni'])){
  				if (isset($_POST['tOtherG'])) {
    				$gross2 = $_POST['tOtherG'];
				}
				if (isset($_POST['sssL'])) {
    				$loanS = $_POST['sssL'];
				}
				if (isset($_POST['ibig'])) {
    				$loanLove = $_POST['ibig'];
				}
				if (isset($_POST['faculty'])) {
    				$loanFacDe = $_POST['faculty'];
				}
				if (isset($_POST['facultyL'])) {
    				$loanFac = $_POST['facultyL'];
				}
				
				if (isset($_POST['salaryL'])) {
    				$loanSal = $_POST['salaryL'];
				}

				if (isset($_POST['others'])) {
    				$loanOther = $_POST['others'];
				}

				$totalDeduc=$loanS+$loanLove+$loanFacDe+$loanFac+$loanSal+$loanOther;
				$netInc=$gross2-$totalDeduc;
			}
			// BUTTON NEW
			if(isset($_POST['new'])){
				 echo "<script>$('.contactForm')[0].reset();</script>";
			}

			//TO OUTPUT VALUE IN TEXTBOX
			 value="<?php if (isset($basicIC)) echo $basicIC ?>" //LAGAY MO TO SA TEXT BOX MO, KA LINYA NG MGA ATTRIBUTE PAG GUSTO MO ILABAS YUNG VALUE SA MISMONG TEXTBOX MO PAGKA PINDOT NG BUTTON, PALITAN MO YUNG VARIABLE SYEMPRE DEPENDE SA VARIBALE NA GINAMIT MO. 

			 //YUNG MGA VARIABLE SA TAAS, IKAW NA BAHALA MAGPALIT EXPLAIN KO SA CALL KUNG GUTO MO
    ?> 

