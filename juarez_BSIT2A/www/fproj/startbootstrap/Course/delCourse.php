


<?php 

require 'connection.php';

//submit add button
if (isset($_GET['delCourse'])) {
 // echo '<script> alert("Are you sure you want to delete it forever?")   </script>';
  $Courseid = $_GET['delCourse'];


    $sql = " delete from Course where course_id = '".$Courseid."'";
      
  
if ($conn->query($sql)===TRUE) {
   header("location:http://127.0.0.1/www/fproj/startbootstrap/C&S.php");
  
}
  else
       echo "Error ".$sql."<br>".$conn->error;
   // echo '<script> alert( $error)   </script>';

//Close database connection
$conn->close();
}
 else
        {
             header("location:http://127.0.0.1/www/fproj/startbootstrap/C&S.php");
        }




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
