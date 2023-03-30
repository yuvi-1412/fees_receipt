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

?>
<?php
 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
            //  $mysqli = getdb();
             $sql = "INSERT into students_excel  
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."','".$getData[19]."','".$getData[20]."','".$getData[21]."','".$getData[22]."','".$getData[23]."','".$getData[24]."','".$getData[25]."','".$getData[26]."','".$getData[27]."','".$getData[28]."','".$getData[29]."','".$getData[30]."','".$getData[31]."','".$getData[32]."')";
                   $result = mysqli_query($mysqli, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"index.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"index.php\"
          </script>";
        }
           }
      
           fclose($file);  
     }
  }   
 ?>
 
<!-- //  function get_all_records(){
//                 $con = getdb();
//                 $Sql = "SELECT * FROM employeeinfo";
//                 $result = mysqli_query($con, $Sql);  
//                 if (mysqli_num_rows($result) > 0) {
//                  echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
//                          <thead><tr><th>EMP ID</th>
//                                       <th>First Name</th>
//                                       <th>Last Name</th>
//                                       <th>Email</th>
//                                       <th>Registration Date</th>
//                                     </tr></thead><tbody>";
//                  while($row = mysqli_fetch_assoc($result)) {
//                      echo "<tr><td>" . $row['emp_id']."</td>
//                                <td>" . $row['firstname']."</td>
//                                <td>" . $row['lastname']."</td>
//                                <td>" . $row['email']."</td>
//                                <td>" . $row['reg_date']."</td></tr>";        
//                  }
                
//                  echo "</tbody></table></div>";
                 
//             } else {
//                  echo "you have no records";
//             }
//             }
  -->
<!-- (S_no,Enroll_no,Application_no,year_term_code,course_code,branch_code,semester_code,college_code,acad_fee,dev_fee,univ_fee,caution_money,univ_enroll_fee,exam_fee,excess_fee,late_fee,reg_fee,other_fee,misc_fee,total_fee,paid_status,payment mode,utr/upi/neft/DD_number','via bank name/ paytm / phonepay/ googlepay etc','payment date',trans_id,dt_insrt,by_insrt,dt_updt,by_updt,Remark1,Remark2,LateFee) -->