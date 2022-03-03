<?php
		if(isset($_POST['update'])){
				if (isset($_POST['empNo'])) {
    				$db_empno = $_POST['empNo'];
    			}
    			if (isset($_POST['fname'])) {
    				$db_fname = $_POST['fname'];
    			}
    			if (isset($_POST['mname'])) {
    				$db_mname = $_POST['mname'];
    			}
    			if (isset($_POST['sname'])) {
    				$db_sname = $_POST['sname'];
    			}
    			if (isset($_POST['civStat'])) {
    				$db_civstat = $_POST['civStat'];
    			}
    			if (isset($_POST['desi'])) {
    				$db_desi = $_POST['desi'];
    			}
    			if (isset($_POST['depNo'])) {
    				$db_depno = $_POST['depNo'];
    			}
    			if (isset($_POST['payDate'])) {
    				$db_paydate = $_POST['payDate'];
    			}
    			if (isset($_POST['empStat'])) {
    				$db_empstat = $_POST['empStat'];
    			}
    			if (isset($_POST['dept'])) {
    				$db_dept = $_POST['dept'];
    			}
    			if (isset($_POST['empImg'])) {
    				$db_empimg = $_POST['empImg'];
    			}
    			if (isset($_POST['output'])) {
    				$db_output = $_POST['output'];
				}

    			//----------------------------------------------

    			if (isset($_POST['tOtherG'])) {
    				$db_gross = $_POST['tOtherG'];
				}
				if (isset($_POST['tOtherNI'])) {
    				$db_net = $_POST['tOtherNI'];
				}
				if (isset($_POST['sssL'])) {
    				$db_sssL = $_POST['sssL'];
				}
				if (isset($_POST['ibigL'])) {
    				$db_ibigL = $_POST['ibigL'];
				}
				if (isset($_POST['ibig'])) {
    				$db_ibig = $_POST['ibig'];
				}
				if (isset($_POST['faculty'])) {
    				$db_faculty = $_POST['faculty'];
				}
				if (isset($_POST['facultyL'])) {
    				$db_facultyL = $_POST['facultyL'];
				}
				
				if (isset($_POST['salaryL'])) {
    				$db_salaryL= $_POST['salaryL'];
				}

				if (isset($_POST['others'])) {
    				$db_others = $_POST['others'];
				}

				//--------------------------------------

				if (isset($_POST['ratehrB'])) {
    				$db_ratehrB = $_POST['ratehrB'];
				}

				if (isset($_POST['nohrB'])) {
    				$db_nohrB= $_POST['nohrB'];
				}

				if (isset($_POST['hon-ratehr'])) {
    				$db_honratehr = $_POST['hon-ratehr'];
				}

				if (isset($_POST['hon-nohr'])) {
    				$db_honnohr = $_POST['hon-nohr'];
				}
				
				if (isset($_POST['other-ratehr'])) {
    				$db_otherratehr = $_POST['other-ratehr'];
				}

				if (isset($_POST['other-nohr'])) {
    				$db_othernohr = $_POST['other-nohr'];
				}
				if (isset($_POST['incomeCutB'])) {
    				$db_incomecutb = $_POST['incomeCutB'];
				}
				if (isset($_POST['tHon'])) {
    				$db_thon = $_POST['tHon'];
				}
				if (isset($_POST['tOtherIP'])) {
    				$db_totherip = $_POST['tOtherIP'];
				}
				if (isset($_POST['tOtherG'])) {
    				$db_totherg = $_POST['tOtherG'];
				}
				if (isset($_POST['sss'])) {
    				$db_sss= $_POST['sss'];
				}
				if (isset($_POST['bilyon'])) {
    				$db_bilyon = $_POST['bilyon'];
				}
				if (isset($_POST['others'])) {
    				$db_others = $_POST['others'];
				}
				if (isset($_POST['others'])) {
    				$db_otherL = $_POST['others'];
				}
				if (isset($_POST['deSum'])) {
    				$db_desum = $_POST['deSum'];
				}

				 $sql = "UPDATE payroll SET employee_no = '$db_empno', fname = '$db_fname', mname = '$db_mname', sname = '$db_sname',civilstat = '$db_civstat', designation = '$db_desi', dependents_no = '$db_depno', dept = '$db_dept', employeestat = '$db_empstat', b_rate_hr = '$db_ratehrB', b_num_hrs = '$db_nohrB', b_income = '$db_incomecutb', h_rate_hr = '$db_honratehr', h_num_hrs = '$db_honnohr', h_income = '$db_thon', o_rate_hr = '$db_otherratehr', o_num_hrs = '$db_othernohr', o_income = '$db_totherip', gross_income = '$db_gross', net_income = '$db_net', sss_contrib = '$db_sss', ph_contrib = '$db_bilyon', pagibig_contrib = '$db_ibig', sss_loan = '$db_sssL', pagibig_loan = '$db_ibigL', fs_deposit = '$db_faculty', fs_loan = '$db_facultyL', salary_loan = '$db_salaryL', other_loan = '$db_otherL', total_deduct = '$db_desum', payroll_date =  '$db_paydate'";

				 if ($conn->query($sql) === TRUE) {
  						echo "UPDATED record successfully";
					} 
					else {
  						echo "Error: " . $sql . "<br>" . $conn->error;
					}
		}

				
?>