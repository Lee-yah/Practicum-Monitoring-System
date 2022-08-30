<?php session_start();
if (isset($_SESSION['user_id'])){
  }
else {
    header('location:http://127.0.0.1/www/fproj/enter.php');
}
?>
 
<?php
require 'connection.php' ;

if (isset($_GET['GID'])) {
	# code...
 $rid = $_GET['GID'];
    $query = " select * FROM records where r_id='".$rid."'";
    $result = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result))
    {
         $filename = $row["filename"];
         $subdate = NULL;

    }
   $sql = "UPDATE records SET filename=' ', sub_date='$subdate ' WHERE r_id=$rid";
   mysqli_query($conn, $sql); 
    unlink("uploads/".$filename);
     header("Location:http://127.0.0.1/www/fproj/Student/Practicum.php");

}

?>
