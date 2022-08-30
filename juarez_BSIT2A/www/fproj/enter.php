<?php session_start();
if (isset($_SESSION['user_id'])){
  }

?>


<?php
$servername ="localhost";$username="root"; $password= "";$dbname = "practicumdb";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//Check connection
if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}


if(isset($_POST['login'])){

 $myusername = mysqli_real_escape_string($conn,$_POST['user']);
  $mypassword = mysqli_real_escape_string($conn,$_POST['pass']);


$hashpass= md5($mypassword);

$sql = "SELECT * FROM user WHERE username='$myusername' AND password='$mypassword' ";
$result = $conn->query($sql);
//check if the number of rows in the result set is greater than 0 which means that record(s) exist
if($result->num_rows>0)
{
   //output data of each row
   while($row =$result->fetch_assoc())
   {  
         $hashpassdb=md5($row["password"]);

     // if (($row["password"] == $mypassword) && ($row["username"] == $myusername )) {
        if (($hashpassdb == $hashpass) && ($row["username"] == $myusername )) {  
      
        if(!empty($_POST["remember"])) {   
              setcookie('user',$myusername,time()+(86400)); //86400  = 1day
                $_SESSION['user_id'] = $row["user_id"];
              } 
          else
            {
                 if(isset($_COOKIE["user"]))   
                {  
                 setcookie ("user","");  
                }  
                   $_SESSION['user_id'] = $row["user_id"];
               
            }

       if ($row["role"] == "1") {
          header('location:startbootstrap\index1.php');
       }
      elseif ($row["role"] == "2") {
          header('location:Teacher\index1.php');
       }else
       { 
          header('location:Student\Practicum.php');
       } 


       
     } 
     else {
       // echo "not same";
       // echo '<script> alert("Wrong credentials")</script>';
     }

     // }else{
     //  echo '<script> alert("Wrong credentials")</script>';
     //      }
    }
}
else
{
  echo '<script> alert("Wrong credentials")</script>'; // kay compare man daan sa query dle na 0 results kundi warning
}


}

//Close database connection
$conn->close();


?>            

<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َLOGIN</title>
    <link rel="stylesheet" href="logstyle.css">
  </head>
  <body>

<form class="box"  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <h1>CIC PMS</h1>
  <h2>Login</h2>
  <input type="text" name="user" placeholder="Username" value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>" required>
  <input type="password" name="pass" placeholder="Password" required>
  <input type="checkbox" checked="checked"  class="rme" name="remember" style="margin-bottom:15px;"> <label class="rem" style="margin-bottom:15px;color:white;">Remember username</label>
  <input type="submit" name="login" value="Login">
</form>


  </body>
</html>
