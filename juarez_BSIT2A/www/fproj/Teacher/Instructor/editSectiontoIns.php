
<?php session_start();
// if (isset($_SESSION['pass'])){
  
// }
// else{
//   header('location:e_LogIn.php');
// }
?>     

<?php
require 'connection.php' ;


$StoI = $_GET['GetStoI'];
    $query = " select * FROM inssection where inssection_id='".$StoI."'";
    $result = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result))
    {
         $SIID = $row["inssection_id"];
        $iid = $row["i_id"];
         $SEC= $row["section_id"];
        $SY=  $row["SY"];

                                                    
                                                              
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


<div class=" mt-3 ml-5"> <a href="\www\fproj\Teacher\index1.php" > <button  type="button" class="btn btn-outline-light btn-circle btn-lg"><i class="fa fa-close"></i></button>  
</a> </div>

<div class ="form cols-6 colss-11 ">
  <form  id="myForm shadow" action="updateSectiontoIns.php?GsiID=<?php echo $SIID ?>" method="post"  class="needs-validation" novalidate>
         <h1 class="addtext mt-4">Edit Section under Instructor Form</h1>
          <br><br>
            <h3>Record Information</h3>
          <div class="alert alert-success" id="success-alert">
           <button type="button" class="close" data-dismiss="alert">x</button>
           <strong>Success! </strong> New Section have added under an Instructor's database.
           </div>
           <div class="box1 cols-12">
               <br>

                <br>  

<div class="form-group form-group-sm  mt-4">
    <div class="form-group form-group-sm ">
                  <label>Record Id:</label>  
                        <input type="text" name="Rid" class="form-control" value="<?php echo $SIID ?>"
                        disabled=""> 
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in this field.</div>
      
  </div>        
 </div>


 <div class="cols-12 mt-3">
        <div class="col form-group form-group-sm mt-4 mb-4 cols-6 float">
                       <label>Instructor :</label> 
                          <div class="form-group ">
                               <select name="ins" class="custom-select instructorh"  required>
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
                                             if ($iid == $row["i_id"]) {
                                                echo "<option selected value=".$row["i_id"].">".$row["fullname"]."</option>";
                                             }
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
       
                    
                       

                       <div class="col form-group form-group-sm mt-4 mb-4 cols-6 float">
                       <label>Section :</label> 
                          <div class="form-group ">
                               <select name="sect" class="custom-select instructorh"  required>
                                <?php 

                                      require 'connection.php';

                                      $sql = "SELECT * FROM section";
                                      $result = $conn->query($sql);

                                      //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                                      if($result->num_rows>0)
                                      {
                                         //output data of each row
                                         while($row =$result->fetch_assoc())
                                         {

                                            if ($SEC == $row["section_id"]) {
                                                echo "<option selected value=".$row["section_id"].">".$row["section"]."</option>";
                                             }
                                             echo "<option value=".$row["section_id"].">".$row["section"]."</option>";
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

<div class="form-group form-group-sm  ">
    <div class="form-group form-group-sm mb-4">
                  <label>School Year:</label>  
                        <input type="text" name="SY" class="form-control" maxlength="9" pattern="^[0-9 ]{4}-[0-9 ]{4}$" placeholder="2020-2021" value=" <?php echo $SY ?>" required> 
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        <br>
  </div>        
 </div>
<div class="cols-12 mt-5">
                   <input type="submit" name="UpStoI" class="btn btn-primary" value="Update Record">
          
                   <button type="reset" class="btn btn-secondary" >Reset Button</button>
</div>
</div> <!-- end of 1st whole box -->
   
            
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


