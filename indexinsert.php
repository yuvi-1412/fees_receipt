<?php 
error_reporting(0);
// Username is root
$user = 'root';
$password = 'prakhar';

$database = 'FINALPROJECT';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

if(!empty($_POST['e_no'])) {
	$eno = $_POST['e_no'];
	echo "Your registration is: ".$eno.".";
} 

if(!empty($_POST['sem'])) {
	$semcode = $_POST['sem'];
	echo 'You have chosen: ' . $semcode;
} 

$sql = "SELECT * FROM students_excel WHERE enroll_no = '$eno' AND semester_code = '$semcode'";
// $sql = "SELECT * FROM students_excel INNER JOIN student_data ON students_excel.enroll_no=student_data.enrollment WHERE enroll_no = '$eno' AND semester_code = '$semcode' ;";


$Application_no = "";
$year_term_code= "";
$course_code = "";
$branch_code = "";
$semester_code = "";
$college_code = "";
$acad_fee=0; 
$dev_fee=0; 
$univ_fee=0; 
$caution_money=0; 
$univ_enroll_fee=0;
$exam_fee=0; 
$excess_fee=0; 
$late_fee=0; 
$reg_fee=0; 
$other_fee=0; 
$misc_fee=0;
$total_fee = (int)$acad_fee + (int)$dev_fee + (int)$univ_fee + (int)$caution_money + (int)$univ_enroll_fee + (int)$exam_fee + (int)$excess_fee + (int)$late_fee + (int)$reg_fee + (int)$other_fee + (int)$misc_fee;

$paid_status = "";
$payment_mode = "";
$utr_upi_neft_DD_number = "";
$bank_name = "";
$payment_date = "";
$trans_id = "";
$dt_insrt = "";
$by_insrt = "";
$dt_updt = "";
$by_updt = "";
$Remark1 = "";
$Remark2 = "";
$LateFee = "";


    // $result = $mysqli->query($sql);
//if($result!=NULL) {
    //$mode = 0 ;
    //if the query ran ok, do stuff
    //while($rows=$result->fetch_assoc())
	// 			{
	// 			// $rows['Enroll_no'];
    //             //update
    //             $name = $rows['name'];
	// 			$Application_no = $rows['Application_no'];
	// 			$year_term_code= $rows['year_term_code'];
	// 			$course_code = $rows['course_code'];
	// 			$branch_code = $rows['branch_code'];
	// 			$semester_code = $rows['semester_code'];
	// 			$college_code = $rows['college _code'];
	// 			if($rows['acad_fee']!=NULL) { $acad_fee = $rows['acad_fee']; }
    //             else { $acad_fee=0; }
    //             if($rows['dev_fee']!=NULL) { $dev_fee = $rows['dev_fee']; }
    //             else { $dev_fee=0; }
    //             if($rows['univ_fee']!=NULL) { $univ_fee = $rows['univ_fee']; }
    //             else { $univ_fee=0; }
    //             if($rows['caution_money']!=NULL) { $caution_money = $rows['caution_money']; }
    //             else { $caution_money=0; }
    //             if($rows['univ_enroll_fee']!=NULL) { $univ_enroll_fee = $rows['univ_enroll_fee']; }
    //             else { $univ_enroll_fee=0; }
    //             if($rows['exam_fee']!=NULL) { $exam_fee = $rows['exam_fee']; }
    //             else { $exam_fee=0; }
    //             if($rows['excess_fee']!=NULL) { $excess_fee = $rows['excess_fee']; }
    //             else { $excess_fee=0; }
    //             if($rows['late_fee']!=NULL) { $late_fee = $rows['late_fee']; }
    //             else { $late_fee=0; }
    //             if($rows['reg_fee']!=NULL) { $reg_fee = $rows['reg_fee']; }
    //             else { $reg_fee=0; }
    //             if($rows['other_fee']!=NULL) { $other_fee = $rows['other_fee']; }
    //             else { $other_fee=0; }
	// 			if($rows['misc_fee']!=NULL) { $misc_fee= $rows['misc_fee']; }
    //             else { $misc_fee=0; }
			
	// 			// $total_fee = $rows['total_fee'];
    //             $total_fee = (int)$acad_fee + (int)$dev_fee + (int)$univ_fee + (int)$caution_money + (int)$univ_enroll_fee + (int)$exam_fee + (int)$excess_fee + (int)$late_fee + (int)$reg_fee + (int)$other_fee + (int)$misc_fee;

	// 			$paid_status = $rows['paid_status'];
	// 			$payment_mode = $rows['payment_mode'];
	// 			$utr_upi_neft_DD_number = $rows['utr_upi_neft_DD_number'];
	// 			$bank_name = $rows['via_bank_name_paytm_phonepay_googlepay_etc'];
	// 			$payment_date = $rows['payment_date'];
	// 			$trans_id = $rows['trans_id'];
	// 			$dt_insrt = $rows['dt_insrt'];
	// 			$by_insrt = $rows['by_insrt'];
	// 			$dt_updt = $rows['dt_updt'];
	// 			$by_updt = $rows['by_updt'];
	// 			$Remark1 = $rows['Remark1'];
	// 			$Remark2 = $rows['Remark2'];
	// 			$LateFee = $rows['LateFee'];
    // } -->
//} //else {
    //$mode = 1;
                // $Application_no = "";
				// $year_term_code= "";
				// $course_code = "";
				// $branch_code = "";
				// $semester_code = "";
				// $college_code = "";
				// $acad_fee=0; 
                // $dev_fee=0; 
                // $univ_fee=0; 
                // $caution_money=0; 
                // $univ_enroll_fee=0;
                // $exam_fee=0; 
                // $excess_fee=0; 
                // $late_fee=0; 
                // $reg_fee=0; 
                // $other_fee=0; 
				// $misc_fee=0;
                // $total_fee = (int)$acad_fee + (int)$dev_fee + (int)$univ_fee + (int)$caution_money + (int)$univ_enroll_fee + (int)$exam_fee + (int)$excess_fee + (int)$late_fee + (int)$reg_fee + (int)$other_fee + (int)$misc_fee;

				// $paid_status = "";
				// $payment_mode = "";
				// $utr_upi_neft_DD_number = "";
				// $bank_name = "";
				// $payment_date = "";
				// $trans_id = "";
				// $dt_insrt = "";
				// $by_insrt = "";
				// $dt_updt = "";
				// $by_updt = "";
				// $Remark1 = "";
				// $Remark2 = "";
				// $LateFee = "";

    //echo "Something has gone wrong! ".$sql->errorno;
    //if it didn't, echo the error message
//}
    

                $mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' integrity='sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l' crossorigin='anonymous'/>
    <title>Reciept</title>
    <script>
  var pressedButton = document.getElementsByTagName("button")[0];
 
  pressedButton.addEventListener("click", function (event) {
    alert("Your data is updated")
    window.location.href = "front1.php";
  })
</script>
</head>
<body class="container mb-5">
    <style>
        td{
            padding:5px !important;
        }
    </style>
    <div>
    <form action="#" method="POST"> 
        <!-- logo and header -->
        <div class="container d-flex align-items-center logo_&_header" style="justify-content:center;">
            <div class="m-3">
                <img width="100px" src="https://pbs.twimg.com/profile_images/982502564385112065/ZrD_2xsk_400x400.jpg" alt="logo"/>
            </div>
            <div>
                <h4>DEVI AHILYA VISHWAVIDYALAYA, INDORE</h4>
                <h4>INSTITUTE OF ENGINEERING & TECHNOLOGY</h4>
                <h4>Khandwa Road, Indore Phone No. :2366800, 2361117, 2361116</h4>
            </div>
        </div>
        
        <!-- first four rows -->
        <table class="table table-bordered mb-0 border-bottom-0">
            <tbody>
                <tr>
                    <td>Rno.</td>
                    <td>3601</td>
                    <td>Reciept Date : <input type="text" name="payment_date" value="<?= $payment_date ?>" ></td>
                </tr>
                <tr>
                    <td>Recieved from Shri/Smt.Ku. <input type="text" name="name" value="<?= $name ?>" ></td>
                    <td colspan="2"><input type="text" name="eno" value="<?= $eno ?>" ></td>                    
                </tr>
                <tr>
                    <td>A sum of Rs.</td>
                    <td><input type="text" name="type" value="<?= $total_fee ?>"></td>
                    <td> <input type="text" name="type" value = ""></td>
                </tr>                
                <tr>
                    <td colspan="3">
                        As per details given below:
                    </td>
                </tr>
            </tbody>
        </table>
        
        <!-- course row -->
        <table class="table table-bordered mb-0 border-bottom-0">
            <tbody>
                <tr>
                    <td>Course/Year/Branch :</td>
                    <td><input type="text" name="course_code" value="<?= $course_code ?>" ></td>
                    <td><input type="text" name="year_term_code" value="<?= $year_term_code ?>" ></td>
                    <td><input type="text" name="branch_code" value="<?= $branch_code ?>" ></td>
                </tr>
            </tbody>
        </table>
        
        <!-- particulars table -->
        <table class="table table-bordered mb-0">
            <tbody>
                <tr>
                    <td style="width:60px;" class="">Sno.</td>
                    <td class="">Particulars</td>
                    <td class="">Amount</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Academic Fees</td>
                    <td><input onblur="findTotal()" type="text" name="acad_fee" id="fees1" value="<?= $acad_fee ?>" ></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Development Fees</td>
                    <td><input onblur="findTotal()" type="text" name="dev_fee" id="fees2" value="<?= $dev_fee ?>" ></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Miscellaneous Fees</td>
                    <td><input onblur="findTotal()" type="text" name="misc_fee" id="fees3" value="<?= $misc_fee ?>" ></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>University Fees</td>
                    <td><input onblur="findTotal()" type="text" name="univ_fee" id="fees4" value="<?= $univ_fee ?>" ></td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Caution Money</td>
                    <td><input onblur="findTotal()" type="text" name="caution_money" id="fees5" value="<?= $caution_money ?>" ></td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Registration Fees</td>
                    <td><input onblur="findTotal()" type="text" name="reg_fee" id="fees6" value="<?= $reg_fee ?>" ></td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>University Enrollment Fees</td>
                    <td><input onblur="findTotal()" type="text" name="univ_enroll_fee" id="fees7" value="<?= $univ_enroll_fee ?>" ></td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Late Fees</td>
                    <td><input onblur="findTotal()" type="text" name="late_fee" id="fees8" value="<?= $late_fee ?>" ></td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>Excess Amount</td>
                    <td><input onblur="findTotal()" type="text" name="excess_fee" id="fees9" value="<?= $excess_fee ?>" ></td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>Exam Fees</td>
                    <td><input onblur="findTotal()" type="text" name="exam_fee" id="fees10" value="<?= $exam_fee ?>" ></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-right">Total</td>
                    
                    <td> <input type="text" name="total_fee" value="<?= $total_fee ?>" ></td>
                </tr>
            </tbody>
        </table>
        
        <!-- Bank details -->
        <table class="table table-bordered mb-0">
            <tbody>
                <tr>
                    <td class="">Details of Postal Order/Bank Draft</td>
                    <td class="">Bank Name/UTR/NEFT NO. : <input type="text" name="bank_name" value="<?= $bank_name ?>" ></td>
                </tr>
            </tbody>
        </table>
        
        <!-- DD Number row -->
        <div class="d-flex row_seven mb-5 border border-top-0">
            <div class="border-right d-flex" style="flex:0.3;">
                <div class="border-right " style="padding:12px;">DDNO.</div>
                <div style="padding:12px;"><input type="text" name="utr_upi_neft_DD_number" value="<?= $utr_upi_neft_DD_number ?>" ></div>
            </div>
            <div class="border-right d-flex" style="flex:0.3;">
                <div class="border-right " style="padding:12px;">DD Date:</div>
                <div style="padding:12px;"><input type="text" name="payment_date"></div>
            </div>
            <div style="padding:12px; flex:0.5">Issuing Branch <input type="text" name="type"></div>
        </div>
        
        <!-- Signature div -->
        <div class="pt-5 mb-5">
            <h5 class="text-right text-uppercase">Signature of the reciever</h5>
        </div>
        
        <!-- Print button -->
        <div style="text-align:center;">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- <div style="text-align:right;">
            <button onclick="window.print()" type="button" class="btn btn-primary">Print</button>
        </div> -->
        
    </form>
    </div>    
</body>
</html>

 <?php

    if(isset($_POST['submit']))
    {
        // $enrollment
        // $Application_num = $_POST[''];

        
// Username is root
$user = 'root';
$password = 'prakhar';

$database = 'FINALPROJECT';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
        $Enrollment = $_POST['eno'];
        // $Semester = $_POST['sem'];
        $Year_term_code = $_POST['year_term_code'];
        $Course_code = $_POST['course_code'];
        $Branch_code = $_POST['branch_code'];
        
        $Academic_Fees = $_POST['acad_fee'];
        $Development_Fees = $_POST['dev_fee'];
        $University_Fees = $_POST['univ_fee'];
        $Caution_Money = $_POST['caution_money'];
        $University_Enrollment_Fees = $_POST['univ_enroll_fee'];
        $Exam_Fees = $_POST['exam_fee'];
        $Excess_Amount = $_POST['excess_fee'];
        $Late_Fees = $_POST['late_fee'];
        $Registration_Fees = $_POST['reg_fee'];
        $Other_Fees = 0;
        $Miscellaneous_Fees = $_POST['misc_fee'];
        // $Total_Fees = $_POST['total_fee'];
        $Total_Fees= $Academic_Fees+$Development_Fees+$University_Fees+$Caution_Money+$University_Enrollment_Fees+$Exam_Fees+$Excess_Amount+$Late_Fees+$Registration_Fees+$Miscellaneous_Fees;
        $BANK = $_POST['bank_name'];
        $DD = $_POST['utr_upi_neft_DD_number'];
        if($BANK!="" || $DD!=""){
            $Payment_status="Y";
        } else {
            $Payment_status="N";
        }
        $Payment_Date = $_POST['payment_date'];
        
        

         //insert
            // $query = "insert into students_excel values('$Academic_Fees','$Development_Fees','$Miscellaneous_Fees','$University_Fees','$Caution_Money','$Registration_Fees','$University_Enrollment_Fees','$Late_Fees,$Excess_Amount', '$Exam_Fees','$BANK','$DD')";
            $query = "insert into students_excel(Enroll_no, year_term_code, course_code, branch_code, acad_fee, dev_fee, univ_fee,
             caution_money, univ_enroll_fee, exam_fee, excess_fee, late_fee, reg_fee, other_fee, misc_fee, total_fee, paid_status,
             utr_upi_neft_DD_number, via_bank_name_paytm_phonepay_googlepay_etc, payment_date) values 
             ('$Enrollment', '$Year_term_code', '$Course_code', '$Branch_code', '$Academic_Fees', '$Development_Fees', 
             '$University_Fees', '$Caution_Money', '$University_Enrollment_Fees', '$Exam_Fees', '$Excess_Amount', '$Late_Fees',
              '$Registration_Fees', '$Other_Fees', '$Miscellaneous_Fees', '$Total_Fees', '$Payment_status', '$DD', '$BANK', 
              '$Payment_Date' )";
        
        
         
        
        // $mysqli->query($query);
        mysqli_query($mysqli,$query);
    
        $mysqli->close();
    }

//$acad_fee+$dev_fee+$misc_fee+$univ_fee+$caution_money+$reg_fee+$univ_enroll_fee+$late_fee+$excess_fee+$exam_fee

//Sno ka vo sir samajh lege auto increment ka
//dusri table se FK leke 
//name lena h
//application num 
//total dynamic
//alert using js
//import me duplicate pe no error
