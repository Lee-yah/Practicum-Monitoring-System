
<?php session_start();
// if (isset($_SESSION['pass'])){
  
// }
// else{
//   header('location:e_LogIn.php');
// }
?>     

<?php
require 'connection.php' ;


$Sid = $_GET['GSection'];
    $query = " select * FROM Section where course_id='".$Sid."'";
    $result = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result))
    {
         echo  $Cmid =   $row["course_id"];
               $Cmc =    $row["course"];
               $Cmm =   $row["major"];

    }


?>


<?php
//variables 




$major =$course =" ";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # code...

if (isset($_POST['addAds'])) {
  
  $courseID = test_input($_POST["cmid"]);
  $course = test_input($_POST["course"]);
  $major = test_input($_POST["major"]);

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
     .form {margin:50px auto;

             border: solid white;
            background-color: white; 
             height: 450px;
            padding: 25px;
            text-align: left;
            align-content: center;
            clear: both;
           text-align: center;
       
        
           }

.formwrapper{ background-color: dimgray;clear: both; }

.box1{margin:0 auto;}

.gender {font-weight: bold;}
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
  .cols-12 {width: 100%; }



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
  .colss-12 {width: 100%; margin:0px auto;}



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

.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}


  </style>
</head>
<body>


<!-- <div class="formwrapper cols-12 colss-12"> -->

<div class="mt-3 ml-5"><a href="\www\fproj\startbootstrap\C&S.php" ><button  type="button" class="btn btn-outline-light btn-circle btn-lg"><i class="fa fa-close"></i></button>  
</a> </div>


<div class ="form cols-6 colss-11">
  <form  id="myForm shadow" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  class="needs-validation" novalidate>
         <h1 class="addtext mt-4">Add Couse Form</h1>
          <br><br>
          <div class="alert alert-success" id="success-alert">
           <button type="button" class="close" data-dismiss="alert">x</button>
           <strong>Success! </strong> Course have added to the database.
           </div>
           <div class="box1 cols-12">
        
       
           
               <h3>Course Information</h3>

               <br>

        <br>  
      <div class=" form-group form-group-sm mt-4 mb-4">
            <div class=" input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Course</span>
                           <input type="text" name="cmid"  placeholder="Course Id(Optional)" class="form-control">
                        </div>
                               <input name="course" class="form-control instructorh"  autocomplete="off" placeholder="BSCS - Bachelor of Science in Computer Science" required>
                               
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        
             </div>           
     </div>
                  <div class="col form-group form-group-sm mb-4">
                  <label>Major:</label>  
                        <input type="text" name="major" class="form-control"  autocomplete="off" required> 
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        <br>
                  </div>
              

               


                   <input type="submit" name="addAds" class="btn btn-primary" value="Add Course">
          
                   <button type="reset" class="btn btn-secondary" >Reset Button</button>


   
      

      </div>  <!-- end of 1st whole box -->
            
      </form>

      </div> <!-- end of Form ..1st div outside form -->
                   
    
<!--   </div> -->  <!-- end of formwrapper ..1st div outside form -->



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

  $(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 2000);
 
});

</script>  <!-- end of success button javascript -->



</body>
</html>


<?php 

require 'connection.php';


//submit add button
if (isset($_POST['addAds'])) {




$sql = "INSERT INTO Course (course_id,course,major) 
          VALUES('$courseID','$course',' $major')";


  

     if($conn->query($sql)===TRUE){ 
      
     }
  

else{  echo "Error ".$sql."<br>".$conn->error;}
           

  
 //Close database connection
           $conn->close(); 
         


 
}



?>