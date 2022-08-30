


<?php 

require 'connection.php';

//submit add button
if (isset($_GET['delID'])) {
 // echo '<script> alert("Are you sure you want to delete it forever?")   </script>';
  $cid = $_GET['delID'];


    $sql = " delete from company where c_id = '".$cid."'";
      
  
if ($conn->query($sql)===TRUE) {
   header("location:http://127.0.0.1/www/fproj/startbootstrap/Company.php");
  
}
  else
       echo "Error ".$sql."<br>".$conn->error;
   // echo '<script> alert( $error)   </script>';

//Close database connection
$conn->close();
}
 else
        {
             header("location:http://127.0.0.1/www/fproj/startbootstrap/Company.php");
        }




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
