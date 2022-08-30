<?php session_start();
// if (isset($_SESSION['pass'])){
  
// }
// else{
//   header('location:e_LogIn.php');
// }

// Note: and design ang select option sa jud
?>     


<?php
//variables


$cName=$address=$email=$contactno=$description=$contactErr=$emailErr=$valid=$submitted="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # code...

if (isset($_POST['addComp'])) {
  $cName = test_input($_POST["cName"]);
  $address = test_input($_POST["address"]);
  $email = test_input($_POST["email"]);
  $contactno = test_input($_POST["contactno"]);
  $description = test_input($_POST["description"]);


}


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>New Company Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
  <script>

</script>
<script>
function resetForm() {
    document.getElementById("myForm").reset();
}
</script>
  <style >

  body{margin:0px;}

      li {font-weight: bold;display:inline-block;padding-top: 10px;}
      a  {color:lightgray;font-style: none;}
      ul {list-style: none; }
     .header {border:solid skyblue; padding-top: 10px;}
      h2 {margin: 0px auto;margin-left:35px;}
      h2 .addtext {padding-top: 20px;}
     .kayak    {float: left;margin:0px auto ;text-align:center;}
     .error {color: red;}
     .form {margin: 0px auto;border: solid white ;width: 500px;height: 600px;
            text-align: left;align-content: center;padding: 25px;}
     #des {padding-right: 80px;}
       a:link                 { text-decoration:  none; }
           .header h3 {margin-bottom:5px;color:mistyrose;}

  </style>
</head>
<body>
    
   <div class="header">
    <div class="links">
       <ul>
 <!--        <li><a href="diri/invalid_valid.php">Welcome Page</a>|</li> -->
        <!-- <li><a href="a_viewproduct.php">View Product</a>|</li>
        <li><a href="e_Logout.php">Logout</a>|</li>
          <h3>New Product Page</h3> -->
        </ul>
    </div>

<?php
// echo "<h2>"."Welcome ". $_SESSION['name']."!"."</h2>"."<br>"; ?>

</div >
  
<div class ="form">

      <form  id="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  class="needs-validation" novalidate>
         <h2 class="addtext">Add User Form</h2>
          <br><br>
          <div class="alert alert-success" id="success-alert">
           <button type="button" class="close" data-dismiss="alert">x</button>
           <strong>Success! </strong> Company have added to the database.
           </div>
          <div class="form-group">
         <label>Student number:</label>  
                <input type="text" name="sNum" class="form-control" maxlength="10" pattern="^[0-9]{4}-[0-9]{5}$" required> 
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
                <br><br>
          </div>
          <div class="form-group">
          <label>First Name:</label> 
                <input type="text" name="fName" class="form-control" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
          			<br><br>
           </div> 
           <div class="form-group mb-3">      
          <label> MiddleName:</label> 
                 <input type="text" name="mName"  class="form-control"  required>
                 <div class="valid-feedback">Valid.</div>
                 <div class="invalid-feedback">Please fill out this field.</div>
      
                 
          			 <br><br>
          </div>
          <div class="form-group">
           <label>  Last Name: </label> 
                    <input type="text" name="lName"  maxlength="11" placeholder="11-digit number" pattern="^[0-9]{11}$" class="form-control" title required>
                    <span class="error" > <?php echo  $contactErr;?></span>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    
                    <br><br>
           </div>
          <div class="form-group">         
          <label >   Gender:  </label> 
                    <input type="text" name="gender"  maxlength="11" placeholder="11-digit number" pattern="^[0-9]{11}$" class="form-control" title required>     
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                     <br><br>

          </div>

          <div class="form-group">         
          <label >   Birthday:  </label> 
                     <input type="text" name="bDay"  maxlength="10" placeholder="YYYY-MM-DD" pattern="^[0-9]{4}-[0-9]{2}-[0-9]{2}$" class="form-control" title required>     
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                     <br><br>

          </div>
          
          <div class="form-group">         
          <label >   Course:  </label> 
                     <input type="text" name="course"  class="form-control" title required>    
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                     <br><br>

          </div>
           <div class="form-group mb-3">      
          <label> Email:</label> 
                 <input type="text" name="email"  class="form-control" placeholder="example@gmail.com" title pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                 <div class="valid-feedback">Valid.</div>
                 <div class="invalid-feedback">Please fill out this field.</div>
      
                 
                 <br><br>
          </div>
            <label >  Contact No:  </label> 
                     <input type="text" name="contactNo"  maxlength="11" placeholder="11-digit number" pattern="^[0-9]{11}$" class="form-control" title required>    
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                     <br><br>

          
          <input type="submit" name="addComp" class="btn btn-primary" value="Add Company">
          <button type="button" class="btn btn-secondary" onclick="resetForm();">Reset Button</button>
       
                  
    </form>


 </div>   
  <script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();



// $(document).ready(function() {
//   $("#success-alert").hide();
//   $("#myWish").click(function showAlert() {
//     $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
//       $("#success-alert").slideUp(500);
//     });
//   });
// });
// $(document).ready(function() {
//     // show the alert
//     setTimeout(function() {
//         $(".alert").alert('close');
//     }, 2000);
// });
// $(".alert").delay(4000).slideUp(200, function() {
//     $(this).alert('close');
// });

  $(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 2000);
 
});

// $(function () {
//     TriggerAlertClose();
// });

// function TriggerAlertClose() {
//     window.setTimeout(function () {
//         $(".alert").fadeTo(1000, 0).slideUp(1000, function () {
//             $(this).remove();
//         });
//     }, 5000);
// }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<?php 

require 'connection.php';


//submit add button
if (isset($_POST['addComp'])) {
  if ($GLOBALS['valid'] == true) {



$sql = "INSERT INTO student (s_id,s_fname,s_mname,s_lname,s_gender,s_birthday,course_idfk,s_email,s_contactno) 
          VALUES('$cName','$address','$email','$contactno','$description')";
  
if ($conn->query($sql)===TRUE) {
    // echo '<script> alert("New record created succesfully")</script>';
  // echo "<script> TriggerAlertClose();   </script>";
  
}
  else
       echo "Error ".$sql."<br>".$conn->error;
  

//Close database connection
$conn->close();
}

// else{
//   echo "please input again";
// }
}
?>



</body>
</html>