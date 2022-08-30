<?php 

require 'connection.php';


//submit add button
if (isset($_POST['ChangePass'])) {
  echo '<script> alert("Password updated succesfully")
     </script>';
  $CP = $_GET['GID'];
  // $iname = test_input($_POST["ischoolId"]);
  $npass = test_input($_POST["newpass"]);

 $modified =test_input( @date('Y-m-d H:i:s'));


    $sql = "UPDATE user SET password='$npass',date_modified= '$modified' WHERE user_id=$CP";
  
  
if ($conn->query($sql)===TRUE) {
 // echo '<script> alert("Record updated succesfully")
 //     </script>';
      	header("location:http://127.0.0.1/www/fproj/startbootstrap/index1.php");
    
  
  
}
  else
       echo "Error ".$sql."<br>".$conn->error;
  

//Close database connection
$conn->close();
}
 else
        {
             header("location:http://127.0.0.1/www/fproj/startbootstrap/index1.php");
        }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>