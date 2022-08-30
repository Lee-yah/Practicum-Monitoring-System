<?php session_start();
// if (isset($_SESSION['myusername'])){
  
// }


?>
<?php 
$role = "";
require 'connection.php' ;

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}

if(isset($_POST['login'])){

  $myusername = mysqli_real_escape_string($conn,$_POST['user']);
  $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
 


//sql to select records from profile table
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

//check if the number of rows in the result set is greater than 0 which means that record(s) exist
if($result->num_rows>0)
{
   //output data of each row
   while($row =$result->fetch_assoc())
   {  

        
       

     if( ($row["username"]== $myusername)&& ($row["password"]== $mypassword))
     {
              
          $role=$row["role"];      // get the role for access  
 
          echo $row["username"];
          echo $row["password"];

          if(!empty($_POST["remember"])) {   
              setcookie('user',$myusername,time()+(86400*30)); //86400  = 1day
            
               $_SESSION['myusername'] = $row["username"]; // for cookies

              } 
          else
            {  setcookie ('user'," ");  }
            

             if($role==1){
                header('location:startbootstrap\index1.php');

             }
             elseif($role==2){
                header('location:Teacher\index1.php');

             }
             else
             {
                 header('location:Student/Practicum.php');
             }
               
               
     }//end of if pass and user
     else{
      // echo '<script> alert("Wrong credentials")</script>';
       // header('location:login.php');
        echo $role;
          }
    }//end while
}
else
{
  echo "0 results";
}

//Close database connection
$conn->close();


} //if btn is press end
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َLOGIN</title>
    <link rel="stylesheet" href="logstyle.css">
  </head>
  <body>

<form class="box" action="" method="post">
  <h1>CIC PMS</h1>
  <h2>Login</h2>
  <input type="text" name="user" placeholder="Username" required>
  <input type="password" name="pass" placeholder="Password" required>
  <input type="checkbox" checked="checked"  class="rme" name="remember" style="margin-bottom:15px;"> <label class="rem" style="margin-bottom:15px;color:white;">Remember username</label>
  <input type="submit" name="login" value="Login">
</form>


  </body>
</html>
