
<?php session_start();
// if (isset($_SESSION['pass'])){
  
// }
// else{
//   header('location:e_LogIn.php');
// }
?>     


<?php
//variables 




$section =$course = $instructor =" ";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # code...

if (isset($_POST['addAds'])) {
  
   $Sid = test_input($_POST["Sid"]);
  $section = test_input($_POST["section"]);
  $instructor = test_input($_POST["instructor"]);
  $course = test_input($_POST["course"]);
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
     .form {margin: 20px auto;
             border: solid white;
            background-color: white; 
            height: 550px;
            padding: 30px;
            text-align: left;
            align-content: center;
            clear: both;
           text-align: center;
          
        
           }
.float {float: left;}
.formwrapper{ clear: both; }

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
  .cols-12 {width: 100%; height: 100px;  }



  }
  @media only screen and (max-width:768px)
  {

  .colss-1 {width: 2%; height: 570px;margin:0 auto;}
  .colss-2 {width: 16.66%;}
  .colss-3 {width: 25%;}
  .colss-4 {width: 33.33%; }
  .colss-5 {width: 41.66%;}
    .colss-55 {width: 48%; }
  .colss-6 {width: 50%;}
  .colss-7 {width: 58.33%;}
  .colss-8 {width: 66.66%;}
  .colss-9 {width: 75%;}
  .colss-10 {width: 83.33%;}
  .colss-11 {width: 91.66%;   height: 600px;}
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

  </style>
</head>
<body>


<div class=" mt-3 ml-5"><a href="\www\fproj\startbootstrap\C&S.php" ><button  type="button" class="btn btn-outline-light btn-circle btn-lg"><i class="fa fa-close"></i></button>  
</a> </div>

<div class ="form cols-6 colss-11 ">
  <form  id="myForm shadow" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  class="needs-validation" novalidate>
         <h1 class="addtext mt-4">Add Section Form</h1>
          <br><br>
            <h3>Section Information</h3>
          <div class="alert alert-success" id="success-alert">
           <button type="button" class="close" data-dismiss="alert">x</button>
           <strong>Success! </strong> New Section have added to the database.
           </div>
           <div class="box1 cols-12">
               <br>

                <br>  

<div class="form-group form-group-sm  ">
      <div class=" input-group mb-3">
             <div class="input-group-prepend">
                          <span class="input-group-text">New Section</span>
                           <input type="text" name="Sid"  class="form-control" placeholder="Section Id (Optional)">
              </div> 

            
                        <input type="text" name="section" class="form-control"  required> 
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        <br>
            
      </div>         
 </div>
        <div class="cols-12 mt-5">
                    


                       <div class="col form-group form-group-sm mt-4 mb-4 cols-6 float">
                       <label>Course :</label> 
                          <div class="form-group ">
                               <select name="course" class="custom-select instructorh"  required>
                                <?php 

                                      require 'connection.php';

                                      $sql = "SELECT * FROM course";
                                      $result = $conn->query($sql);

                                      //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                                      if($result->num_rows>0)
                                      {
                                         //output data of each row
                                         while($row =$result->fetch_assoc())
                                         {
                                             echo "<option value=".$row["course_id"].">".$row["course"]." - ".$row["major"]."</option>";
                                         }
                                      }
                                      else
                                      
                                        echo "0 results";

                                      //Close database connection
                                      $conn->close();
                                 ?>
                               
                              </select>  
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        </div>
                  </div>
                     <div class="form-group form-group-sm mt-4 mb-4 cols-6 float">
                       <label>Instructor :</label> 
                          <div class="form-group ">
                               <select name="instructor" class="custom-select instructorh"  required>
                                <?php 

                                      require 'connection.php';

                                      $sql = "SELECT * FROM ins_drop";
                                      $result = $conn->query($sql);

                                      //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                                      if($result->num_rows>0)
                                      {
                                         //output data of each row
                                         while($row =$result->fetch_assoc())
                                         {
                                             echo "<option value=".$row["i_id"].">".$row["fullname"]."</option>";
                                         }
                                      }
                                      else
                                      
                                        echo "0 results";

                                      //Close database connection
                                      $conn->close();
                                 ?>
                               
                              </select>  
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        </div>
                  </div>

    </div>
<div class="cols-12 mt-5">
                   <input type="submit" name="addAds" class="btn btn-primary" value="Add Section">
          
                   <button type="reset" class="btn btn-secondary" >Reset Button</button>
</div>

   
      

      </div>  <!-- end of 1st whole box -->
            
      </form>

      </div> <!-- end of Form ..1st div outside form -->
                   
    
  </div>  <!-- end of formwrapper ..1st div outside form -->



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



$sql = "INSERT INTO user (section_id,i_id,section,course_id) 
          VALUES('$Sid',$instructor','$section','$course' )";

 
  

     if($conn->query($sql)===TRUE){ 
         
     }
  

else{  echo "Error ".$sql."<br>".$conn->error;}
           

  
 //Close database connection
           $conn->close(); 
         


 
}



?>