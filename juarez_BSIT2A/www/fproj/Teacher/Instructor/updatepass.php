<?php 

require 'connection.php';


//submit add button
if (isset($_POST['ChangePass'])) {
 
  $CP = $_GET['Guser'];
  // $iname = test_input($_POST["ischoolId"]);
  $npass = test_input($_POST["newpass"]);

 

    $sql = "UPDATE user SET password='$npass' WHERE user_id=$CP";
  
  
if ($conn->query($sql)===TRUE) {
 // echo '<script> alert("Record updated succesfully")
 //     </script>';
      	header("location:http://127.0.0.1/www/fproj/Teacher/index1.php");
    
  
  
}
  else
       echo "Error ".$sql."<br>".$conn->error;
  

//Close database connection
$conn->close();
}
 else
        {
             header("location:http://127.0.0.1/www/fproj/Teacher/index1.php");
        }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>