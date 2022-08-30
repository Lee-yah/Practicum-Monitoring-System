<?php 

require 'connection.php';


//submit add button
if (isset($_POST['UpIns'])) {
 
  $iid = $_GET['GinsID'];
  // $iname = test_input($_POST["ischoolId"]);
  $iname = test_input($_POST["ifullname"]);
  $igender= test_input($_POST["igender"]);
  $iemail=  test_input($_POST["iemail"]);
  $usernamee=  test_input($_POST["username"]);
   $user_id=  test_input($_POST["userid"]);
 

    $sql = "UPDATE instructor SET fullname='$iname',gender='$igender',email='$iemail' WHERE i_id=$iid";
  
  
if ($conn->query($sql)===TRUE) {
 // echo '<script> alert("Record updated succesfully")
 //     </script>';
    $sql = "UPDATE user SET username='$usernamee' WHERE user_id=$user_id";

        if ($conn->query($sql)===TRUE) {

                header("location:http://127.0.0.1/www/fproj/Teacher/index1.php");
        }
          

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