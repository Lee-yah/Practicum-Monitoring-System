

<?php 

require 'connection.php';


//submit add button
if (isset($_POST['UpSec'])) {
 
  $secid = $_GET['GID'];

 $section= test_input($_POST["section"]);
  $courseid=  test_input($_POST["course"]);


    $sql = "UPDATE section SET section='$section',course_id='$courseid' WHERE section_id=$secid";
  
  
if ($conn->query($sql)===TRUE) {
 // echo '<script> alert("Record updated succesfully")
 //     </script>';
      	header("location:http://127.0.0.1/www/fproj/startbootstrap/C&S.php");
    
  
  
}
  else
       echo "Error ".$sql."<br>".$conn->error;
  

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