

<?php 

require 'connection.php';


//submit add button
if (isset($_POST['UpStoI'])) {

   $StoI = $_GET['GsiID'];         
   $section = test_input($_POST["sect"]);
  $instructor = test_input($_POST["ins"]);
 $SY = test_input($_POST["SY"]);
  


    $sql = "UPDATE inssection SET i_id='$instructor',section_id='$section',SY='$SY' WHERE inssection_id=$StoI";
  
  

     if($conn->query($sql)===TRUE){ 
         	   header("location:http://127.0.0.1/www/fproj/Teacher\index1.php");
     }
  

else{  
  echo "Error ".$sql."<br>".$conn->error;
}
           

  
 //Close database connection
           $conn->close(); 
         


 
}else
        {
               header("location:http://127.0.0.1/www/fproj/Teacher\index1.php");        }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>