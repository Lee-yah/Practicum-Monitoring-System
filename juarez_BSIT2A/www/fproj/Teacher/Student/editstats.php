<?php session_start();
// if (isset($_SESSION['pass'])){
  
// }
// else{
//   header('location:e_LogIn.php');
// }
?> 

<?php 

require 'connection.php';


//submit add button
if (isset($_GET['uncheckID'])) {
 
    $unid = $_GET['uncheckID'];


    $sql = "UPDATE records SET report_status='unchecked' WHERE r_id=$unid";
  
  
if ($conn->query($sql)===TRUE) {
 // echo '<script> alert("Record updated succesfully")
 //     </script>';
      	header("location:http://127.0.0.1/www/fproj/Teacher/Practicum.php");
    
  
  
}
  else
       echo "Error ".$sql."<br>".$conn->error;
  

//Close database connection
$conn->close();


}elseif (isset($_GET['checkID'])) {


    $chid = $_GET['checkID'];

    $sql = "UPDATE records SET report_status='checked' WHERE r_id=$chid";
  
  
if ($conn->query($sql)===TRUE) {
 // echo '<script> alert("Record updated succesfully")
 //     </script>';
        header("location:http://127.0.0.1/www/fproj/Teacher/Practicum.php");
    
  
  
}
  else
       echo "Error ".$sql."<br>".$conn->error;
  

//Close database connection
$conn->close();
}
 else
        {
             header("location:http://127.0.0.1/www/fproj/startbootstrap/User.php");
        }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>