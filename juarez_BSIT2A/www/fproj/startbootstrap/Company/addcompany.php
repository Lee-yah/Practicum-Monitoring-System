
<?php session_start();
// if (isset($_SESSION['pass'])){
  
// }
// else{
//   header('location:e_LogIn.php');
// }
?>     

 <?php 
 require 'connection.php';
                                                                      
 //sql to select records from profile table
    $sql = "SELECT * FROM company";
    $result = $conn->query($sql);
   //check if the number of rows in the result set is greater than 0 which means that record(s) exist
     if($result->num_rows>0)
      {
                                                                         //output data of each row
     while($row =$result->fetch_assoc())
      {
         
         $id =$row["c_id"];
        }
      }else
        {
         echo "0 results";
         }

        //Close database connection
       $conn->close();
?>

<?php
//variables 
$cid=$cname =$caddress=$cemail=$ctelno=$ccontactno=$cdescription=" ";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # code...

if (isset($_POST['addComp'])) {
 
 $cid = test_input($_POST["cid"]);
  $cname = test_input($_POST["cName"]);
  $caddress= test_input($_POST["address"]);
  $cemail=  test_input($_POST["email"]);
  $ctelno= test_input($_POST["telno"]);
  $ccontactno=  test_input($_POST["contactno"]);
  $cdescription=  test_input($_POST["des"]);
   
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
  <title>Add Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <!-- para sa alert button -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style >

  body{margin:0px; background-color: dimgray;}


      h1 {margin: 0px auto;}
      h1 .addtext {padding-top: 20px;}
     .form {margin: 80px auto;
             border: solid white;
            background-color: white; 
             height: 700px;
            padding: 25px;
            text-align: left;
            align-content: center;
            clear: both;
           text-align: center;
       
        
           }

/*.formwrapper{ background-color: dimgray;clear: both; }*/

/*.box1{height:600px;margin:0 auto;}*/

.instructorh {height: 30px;}
[class*="cols-"] { width: 100%;}
@media only screen and (min-width:768px)
  {

  .cols-1 {width: 2%;margin:0 auto;}
  .cols-2 {width: 16.66%;}
  .cols-3 {width: 25%;}
  .cols-4 {width: 33.33%;}
  .cols-5 {width: 41.66%;}
    .cols-55 {width: 48%; }
  .cols-6 {width: 50%;}
  .cols-7 {width: 58.33%;}
  .cols-8 {width: 66.66%;}
  .cols-9 {width: 75%;}
  .cols-10 {width: 83.33%;}
  .cols-11 {width: 91.66%; }
  .cols-12 {width: 100%;   }



  }
  @media only screen and (max-width:768px)
  {

  .colss-1 {width: 2%; height: 570px;margin:0 auto;}
  .colss-2 {width: 16.66%;}
  .colss-3 {width: 25%;}
  .colss-4 {width: 33.33%;}
  .colss-5 {width: 41.66%;}
    .colss-55 {width: 48%; }
  .colss-6 {width: 50%;}
  .colss-7 {width: 58.33%;}
  .colss-8 {width: 66.66%;}
  .colss-9 {width: 75%;}
  .colss-10 {width: 83.33%;}
  .colss-11 {width: 91.66%; }
  .colss-12 {width: 100%; }



  }
  .btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
    margin-top: 30px;

}
.btn-lg {
  width: 50px;
    height: 50px;
    padding: 0px 8px;
    border-radius: 35px;
    font-size: 25px;
    line-height: 1.33;
}

  </style>
</head>
<body>


<!-- <div class="formwrapper cols-12 colss-12"> -->
<div class=" mt-3 ml-5"><a href="\www\fproj\startbootstrap\Company.php" ><button  type="button" class="btn btn-outline-light btn-circle btn-lg"><i class="fa fa-close"></i></button>  
</a> </div>

<div class ="form cols-6 colss-11 mt-4 ml-0-auto mr-0-auto">
  <form  id="myForm shadow" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  class="needs-validation" novalidate>
         <h1 class="addtext mt-4">Add Company Form</h1>
          <br><br>
      
           <div class="box1 cols-12">
        
       
           
               <h3>Company Information</h3>

               <br>
             <div class="alert alert-success" id="success-alert">
           <button type="button" class="close" data-dismiss="alert">x</button>
           <strong>Success! </strong> New Company has added to the database.
           </div>
<div class="row">
            <div class="col form-group form-group-sm">
          <label>Database Id:</label> 
                <input type="text" size="4" name="cid" class="form-control" placeholder="Last Number <?php echo $id?>" value="<?php echo $c=$id+1;?>" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
                <br><br>
           </div>
           <div class="col form-group form-group-sm">
         <label>Company Name:</label>  
                <input type="text" name="cName" class="form-control"  required> 
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
                <br><br>
          </div>

           
</div>         

<div class="row">
            <div class="col form-group form-group-sm">
          <label>Address:</label> 
                <input type="text" name="address" class="form-control" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
                <br><br>
           </div> 

           <div class="col form-group form-group-sm mb-3">      
          <label> Email:</label> 
                 <input type="text" name="email"  class="form-control" placeholder="example@gmail.com" title pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                 <div class="valid-feedback">Valid.</div>
                 <div class="invalid-feedback">Please fill out this field.</div>
      
                 
                 <br><br>
          </div>
 </div>
<div class="row">
          <div class="col form-group form-group-sm">
           <label>  Contact Number: </label> 
                    <input type="text" name="contactno"  maxlength="11" placeholder="11-digit number" pattern="^[0-9]{11}$" class="form-control" title required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    
                    <br><br>
           </div>
             <div class="col form-group form-group-sm mb-3">      
          <label> Telephone Number:</label> 
                 <input type="text" name="telno"  class="form-control" maxlength="20" placeholder="(000) 000-0000
" title pattern="^[0-9 -}*$" required>
                 <div class="valid-feedback">Valid.</div>
                 <div class="invalid-feedback">Please fill out this field.</div>
      
                 
                 <br><br>
          </div>
</div>


          <div class="form-group form-group-sm">         
          <label >   Company Description:  </label> 
                    <textarea name="des" rows="5" cols="40"class="form-control"  required></textarea>       
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                     <br><br>

          </div>
          
          <input type="submit" name="addComp" class="btn btn-primary" value="Add Company">
          <button type="reset" class="btn btn-secondary" >Reset Button</button>
         
                  
    </form>
      

      </div>  <!-- end of 1st whole box -->
            
      </form>

      </div> <!-- end of Form ..1st div outside form -->
                   
    
  <!-- </div> -->  <!-- end of formwrapper ..1st div outside form -->



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
 


 
$sql = "INSERT INTO company (c_id,c_name,c_address,c_email,c_telno,c_contactno,c_description) 
          VALUES('$cid','$cname','$caddress','$cemail','$ctelno','$ccontactno','$cdescription')";
  
if ($conn->query($sql)===TRUE) {
    // echo '<script> alert("New record created succesfully")</script>';
  // echo "<script> TriggerAlertClose();   </script>";
  
}
  else
       echo "Error ".$sql."<br>".$conn->error;
  

//Close database connection
$conn->close();

}
?>



</body>
</html>