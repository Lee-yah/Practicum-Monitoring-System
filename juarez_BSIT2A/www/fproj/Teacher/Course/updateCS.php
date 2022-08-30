

<?php 

require 'connection.php';


//submit add button
if (isset($_POST['UpCourse'])) {


  $Cid = $_GET['GCourseID'];
 
  $course = test_input($_POST["course"]);
  $major = test_input($_POST["major"]);


  $sql = "UPDATE Course SET course='$course',major='$major' WHERE course_id=$Cid";
     if($conn->query($sql)===TRUE){ 
          	header("location:http://127.0.0.1/www/fproj/startbootstrap/C&S.php");
     }
  

else{  echo "Error ".$sql."<br>".$conn->error;}
           

  
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