<?php session_start();?>
<?php 

require 'connection.php';


//submit add button
if (isset($_POST['UpStud'])) {
 
  $Gid = $_GET['GID'];
  // $iname = test_input($_POST["ischoolId"]);
   $sfName = test_input($_POST["sfName"]);
  $smName = test_input($_POST["smName"]);
  $slName = test_input($_POST["slName"]);
  $sbirthdate = test_input($_POST["sbirthdate"]);
  $sgender = test_input($_POST["sgender"]);
  $sinstructor = test_input($_POST["sinstructor"]);
  $ssection = test_input($_POST["ssection"]);
  $semail = test_input($_POST["semail"]);
  $scontactno = test_input($_POST["scontactno"]);
  $ssemester = test_input($_POST["ssemester"]);
  $sstartdate = test_input($_POST["sstartdate"]);
  $senddate = test_input($_POST["senddate"]);
  $scompany = test_input($_POST["scompany"]);
 $susername  = test_input($_POST["susername"]);
  echo $sid = test_input($_POST["id"]);

   $rid = test_input($_POST["rid"]);


$sql = "UPDATE user SET username='$susername' WHERE user_id=$Gid";

$ssql = "UPDATE student SET fname='$sfName',mname='$smName',lname='$slName',gender='$sgender', birthdate='$sbirthdate' ,i_id='$sinstructor',section_id='$ssection',email='$semail',contactno='$scontactno' WHERE user_id=$Gid";

$sssql = "UPDATE records SET sem='$ssemester', start_date='$sstartdate',end_date='$senddate' , c_id='$scompany',i_id='$sinstructor' WHERE r_id=$rid";
         
  
if ($conn->query($sql)===TRUE){
     if($conn->query($ssql)===TRUE){
        if($conn->query($sssql)===TRUE){
             header("location:http://127.0.0.1/www/fproj/Student/Practicum.php");
                //Close database connection
           $conn->close();
          }   
     }
  
}
else{  echo "Error ".$sql."<br>".$conn->error;}
           

}
 else
        {
             header("location:http://127.0.0.1/www/fproj/Student/Practicum.php");
        }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>