 


<!-- session_start();

$regValue = $_GET['eno'];

echo "Your registration is: ".$regValue."."; -->

<!-- PHP code to establish connection with the localserver -->
<?php
// echo $_POST['e_no'];
error_reporting(0);

session_start(); 

if(!empty($_SESSION['mode'])) {
	$query_mode = $_SESSION['mode'];
	echo $query_mode;
} else {
	$query_mode = 0;
}

if(!empty($_POST['e_no'])) {
	$eno = $_POST['e_no'];
	echo "Your registration is: ".$eno.".";
} 

if(!empty($_POST['sem'])) {
	$semcode = $_POST['sem'];
	echo 'You have chosen: ' . $semcode;
} 
// else {
// 	echo 'Please select the value.';
// }

if(!empty($_POST['br'])) {
	$branchcode = $_POST['br'];
	echo 'You have chosen: ' . $branchcode;
} 
// else {
// 	echo 'Please select the value.';
// }

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

if($query_mode==1) {
	$sql = "SELECT * FROM students_excel WHERE enroll_no = '$eno'";
}
else if($query_mode==2) {
	$sql = "SELECT * FROM students_excel WHERE semester_code = '$semcode' AND branch_code = '$branchcode'";
}
else if($query_mode==3) {
	$sql = "SELECT * FROM students_excel WHERE enroll_no = '$eno' AND semester_code = '$semcode'";
}
else if($query_mode==0){
	$sql = " SELECT * FROM students_excel ";
}



// SQL query to select data from database
// $sql = " SELECT * FROM students_excel ";
// $sql_enroll = " SELECT * FROM students_excel WHERE enroll_no = .$_SESSION['eno'] .";
// echo "$enrollment_number";
// if($enrollment_number!=''){
	// $result = $mysqli->query($sql_enroll);
// }
// else {
	$result = $mysqli->query($sql);
// }
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Students List</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				
				<th>Enroll_no</th>
				<th>Application_no</th>  
				<th>year_term_code</th>
				<th>course_code</th>
				<th>branch_code</th>
				<th>semester_code</th>
				<th>college _code</th>
				<th>acad_fee</th> 
				<th>dev_fee</th> 
				<th>univ_fee</th> 
				<th>caution money</th> 
				<th>univ_enroll_fee</th> 
				<th>exam_fee</th> 
				<th>excess_fee</th> 
				<th>late_fee</th> 
				<th>reg_fee</th>
				<th>other_fee</th> 
				<th>misc_fee</th> 
				<th>total_fee</th> 
				<th>paid_status</th> 
				<th>payment mode</th> 
				<th>utr/upi/neft/DD number</th> 
				<th>via bank name/paytm/phonepay/googlepay etc</th> 
				<th>payment date</th>
				<th>trans_id</th>
				<th>dt_insrt</th> 
				<th>by_insrt</th> 
				<th>dt_updt</th> 
				<th>by_updt</th> 
				<th>Remark1</th> 
				<th>Remark2</th>
				<th>LateFee</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['Enroll_no'];?></td>
				<td><?php echo $rows['Application_no'];?></td>
				<td><?php echo $rows['year_term_code'];?></td>
				<td><?php echo $rows['course_code'];?></td>
				<td><?php echo $rows['branch_code'];?></td>
				<td><?php echo $rows['semester_code'];?></td>
				<td><?php echo $rows['college _code'];?></td>
				<td><?php echo $rows['acad_fee'];?></td>
				<td><?php echo $rows['dev_fee'];?></td>
				<td><?php echo $rows['univ_fee'];?></td>
				<td><?php echo $rows['caution_money'];?></td>
				<td><?php echo $rows['univ_enroll_fee'];?></td>
				<td><?php echo $rows['exam_fee'];?></td>
				<td><?php echo $rows['excess_fee'];?></td>
				<td><?php echo $rows['late_fee'];?></td>
				<td><?php echo $rows['reg_fee'];?></td>
				<td><?php echo $rows['other_fee'];?></td>
				<td><?php echo $rows['misc_fee'];?></td>
				<td><?php echo $rows['total_fee'];?></td>
				<td><?php echo $rows['paid_status'];?></td>
				<td><?php echo $rows['payment_mode'];?></td>
				<td><?php echo $rows['utr_upi_neft_DD_number'];?></td>
				<td><?php echo $rows['via_bank_name_paytm_phonepay_googlepay_etc'];?></td>
				<td><?php echo $rows['payment_date'];?></td>
				<td><?php echo $rows['trans_id'];?></td>
				<td><?php echo $rows['dt_insrt'];?></td>
				<td><?php echo $rows['by_insrt'];?></td>
				<td><?php echo $rows['dt_updt'];?></td>
				<td><?php echo $rows['by_updt'];?></td>
				<td><?php echo $rows['Remark1'];?></td>
				<td><?php echo $rows['Remark2'];?></td>
				<td><?php echo $rows['LateFee'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
