

<?php 

require 'connection.php';


//submit add button
if (isset($_POST['UpComp'])) {
 
  $cid = $_GET['GID'];
  $cname = test_input($_POST["cName"]);
  $caddress= test_input($_POST["address"]);
  $cemail=  test_input($_POST["email"]);
  $ctelno=  test_input($_POST["telno"]);
  $ccontactno=  test_input($_POST["contactno"]);
  $cdescription=  test_input($_POST["description"]);

    $sql = "UPDATE company SET c_name='$cname',c_address='$caddress',c_email='$cemail',c_telno='$ctelno',c_contactno='$ccontactno',c_description='$cdescription' WHERE c_id=$cid";
  
  
if ($conn->query($sql)===TRUE) {
 // echo '<script> alert("Record updated succesfully")
 //     </script>';
      	header("location:http://127.0.0.1/www/fproj/startbootstrap/Company.php");
    
  
  
}
  else
       echo "Error ".$sql."<br>".$conn->error;
  

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