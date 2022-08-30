<?php session_start();
// if (isset($_SESSION['pass'])){
  
// }
// else{
//   header('location:e_LogIn.php');
// }
?>  

<?php

include_once 'connection.php';
//check if form is submitted
if (isset($_POST['submitF']))
{
    $filename = $_FILES['file1']['name'];
   $rid= $_POST['rid'];
  
    echo $rid;

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf' ];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            
                $filename = ($rid) . '-' . $filename;
           
            //set target directory
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "UPDATE records SET filename='$filename', sub_date='$created' WHERE r_id=$rid";


            mysqli_query($conn, $sql);
            header("Location:http://127.0.0.1/www/fproj/Student/Practicum.php?st=success");
        }
        else
        {
            header("Location:http://127.0.0.1/www/fproj/Student/Practicum.php?st=error");
        }
    }
    else
        header("Location: http://127.0.0.1/www/fproj/Student/Practicum.php");
}


// if (issset($_GET['GName'])) {

//     unlink($_GET["GName"]);
//    $sql = "UPDATE records SET filename=' ', sub_date=' ' WHERE r_id=$rid";
//     mysqli_query($conn, $sql);
//     header("Location:http://127.0.0.1/www/fproj/Student/Practicum.php");
// }
?>