<?php
error_reporting(0);

// Username is root
$user = 'root';
$password = 'prakhar';

// Database name is geeksforgeeks
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

$result = $mysqli->query($sql);
if($result!=NULL) {
				while($rows=$result->fetch_assoc())
				{
				// $rows['Enroll_no'];
				$Application_no = $rows['Application_no'];
				$year_term_code= $rows['year_term_code'];
				$course_code = $rows['course_code'];
				$branch_code = $rows['branch_code'];
				$semester_code = $rows['semester_code'];
				$college_code = $rows['college _code'];
				$acad_fee = $rows['acad_fee'];
				$dev_fee = $rows['dev_fee'];
				$univ_fee = $rows['univ_fee'];
				$caution_money = $rows['caution_money'];
				$univ_enroll_fee = $rows['univ_enroll_fee'];
				$exam_fee = $rows['exam_fee'];
				$excess_fee = $rows['excess_fee'];
				$late_fee = $rows['late_fee'];
				$reg_fee = $rows['reg_fee'];
				$other_fee = $rows['other_fee'];
				$misc_fee = $rows['misc_fee'];
				$total_fee = $rows['total_fee'];
				$paid_status = $rows['paid_status'];
				$payment_mode = $rows['payment_mode'];
				$utr_upi_neft_DD_number = $rows['utr_upi_neft_DD_number'];
				$bank_name = $rows['via_bank_name_paytm_phonepay_googlepay_etc'];
				$payment_date = $rows['payment_date'];
				$trans_id = $rows['trans_id'];
				$dt_insrt = $rows['dt_insrt'];
				$by_insrt = $rows['by_insrt'];
				$dt_updt = $rows['dt_updt'];
				$by_updt = $rows['by_updt'];
				$Remark1 = $rows['Remark1'];
				$Remark2 = $rows['Remark2'];
				$LateFee = $rows['LateFee'];
                }
            }

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
    <!--<script>
        function doIt() {
            alert("Hello");
        }
    </script>-->
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
                    <td>Reciept Date : <?php echo $payment_date ?></td>
                </tr>
                <tr>
                    <td>Recieved from Shri/Smt.Ku.</td>
                    <td colspan="2"><?php echo $eno ?> </td>                    
                </tr>
                <tr>
                    <td>A sum of Rs.</td>
                    <td><?php echo $total_fee ?></td>
                    <td></td>
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
                    <td><?php echo $course_code ?></td>
                    <td><?php echo $year_term_code ?> </td>
                    <td><?php echo $branch_code ?> </td>
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
                    <td><?php echo $acad_fee ?></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Development Fees</td>
                    <td><?php echo $dev_fee ?></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Miscellaneous Fees</td>
                    <td><?php echo $misc_fee ?> </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>University Fees</td>
                    <td><?php echo $univ_fee ?></td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Caution Money</td>
                    <td><?php echo $caution_money ?></td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Registration Fees</td>
                    <td><?php echo $reg_fee ?></td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>University Enrollment Fees</td>
                    <td><?php echo $univ_enroll_fee ?></td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Late Fees</td>
                    <td><?php echo $late_fee ?></td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>Excess Amount</td>
                    <td><?php echo $excess_fee ?></td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>Exam Fees</td>
                    <td><?php echo $exam_fee ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-right">Total</td>
                    <td><?php echo $total_fee ?></td>
                </tr>
            </tbody>
        </table>
        
        <!-- Bank details -->
        <table class="table table-bordered mb-0">
            <tbody>
                <tr>
                    <td class="">Details of Postal Order/Bank Draft</td>
                    <td class="">Bank Name/UTR/NEFT NO. : <?php echo $bank_name ?></td>
                </tr>
            </tbody>
        </table>
        
        <!-- DD Number row -->
        <div class="d-flex row_seven mb-5 border border-top-0">
            <div class="border-right d-flex" style="flex:0.3;">
                <div class="border-right " style="padding:12px;">DDNO.</div>
                <div style="padding:12px;"><?php echo $utr_upi_neft_DD_number ?></div>
            </div>
            <div class="border-right d-flex" style="flex:0.3;">
                <div class="border-right " style="padding:12px;">DD Date:</div>
                <div style="padding:12px;"><?php echo $payment_date ?></div>
            </div>
            <div style="padding:12px; flex:0.5">Issuing Branch </div>
        </div>
        
        <!-- Signature div -->
        <div class="pt-5 mb-5">
            <h5 class="text-right text-uppercase">Signature of the reciever</h5>
        </div>
        
        <!-- Print button -->
        <div style="text-align:center;">
            <button onclick="window.print()" type="button" class="btn btn-primary">Print</button>
        </div>
    </form>
    </div>    
</body>
</html>



