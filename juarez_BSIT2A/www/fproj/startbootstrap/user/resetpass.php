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
if (isset($_GET['resetID'])) {
 
  $id = $_GET['resetID'];

    $query = " select * FROM user where user_id='".$id."'";
    $result = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result))
    {

         $reset = $row["reset_password"];
    }
 // $modified = @date('Y-m-d H:i:s');
 $modified = @date('Y-m-d H:i:s');
    $sql = "UPDATE user SET password='$reset',date_modified='$modified' WHERE user_id=$id";
  
  
if ($conn->query($sql)===TRUE) {
 // echo '<script> alert("Record updated succesfully")
 //     </script>';
      	header("location:http://127.0.0.1/www/fproj/startbootstrap/User.php");
    
  
  
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