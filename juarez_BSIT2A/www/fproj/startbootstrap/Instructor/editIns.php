
<?php session_start();
// if (isset($_SESSION['pass'])){
  
// }
// else{
//   header('location:e_LogIn.php');
// }
?>     


<?php
require 'connection.php' ;


$iid = $_GET['GetIns'];
    $query = " select * FROM instructor where i_id='".$iid."'";
    $result = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result))
    {
         $iid = $row["i_id"];
        $iname = $row["fullname"];
         $igender= $row["gender"];
        $iemail=  $row["email"];

                                                    
                                                              
    }


?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Instructor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <!-- para sa alert button -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style >

  body{margin:0px;background-color: dimgray;}


.header {border:solid skyblue; padding-top: 10px;}
      h1 {margin-bottom: 30px;}

     .form {margin: 0px auto;
             border: solid white ;
             background-color: white; 
             
            text-align: left;
            align-content: center;
            padding: 25px;
            padding-top: 50px;
            clear: both;
            height:500px;
           }
     #des {padding-right: 80px;}
       a:link                 { text-decoration:  none; }
           .header h3 {margin-bottom:5px;color:mistyrose;}


.formwrapper{ padding-top: 1%;clear: both; }
.box1 {text-align: center;}
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
  .cols-9 {width: 75%;height:20px;}
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
  .colss-6 {width: 50%;float: left;}
  .colss-7 {width: 58.33%;}
  .colss-8 {width: 66.66%;}
  .colss-9 {width: 75%;}
  .colss-10 {width: 83.33%;}
  .colss-11 {width: 91.66%; }
  .colss-12 {width: 100%;float: left; }



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


<div class="formwrapper cols-12 colss-12">
<div class=" mt-3 ml-5 "><a href="\www\fproj\startbootstrap\Instructor.php" ><button  type="button" class="btn btn-outline-light btn-circle btn-lg"><i class="fa fa-close"></i></button>  
</a> </div>

<div class ="form cols-6 colss-11 mt-4">
  <form  id="myForm shadow" action="updateins.php?GinsID=<?php echo $iid ?>"  method="post"  class="needs-validation" novalidate>
         <h1 class="addtext">Edit Instructor Form</h1>
          <br><br>
            <div class="alert alert-info" id="success-alert">
           <button type="button" class="close" data-dismiss="alert">x</button>
           <strong>Processing! </strong> <?php echo $iname ?>  is being updated 
           </div>
        
               <h3>Personal Information</h3>

               <br>

          <div class="form-group form-group-sm  ">
               <div class=" input-group mb-3">
                  
                    <div class="input-group-prepend">
                          <span class="input-group-text">Name</span>
                           <input type="text" name="ischoolId"  class="form-control" value ="<?php echo $iid ?>" disabled>
                          </div>     
                        
                        <input type="text" name="ifullname" class="form-control" pattern="^[a-z A-Z]*$" value ="<?php echo
                            $iname ?>" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in the name field.</div>
                </div>  
              <br>  
        
     </div>

         <div class="row">   
  
                     <div class="col form-group form-group-sm mt-1">
                          <div class="form-group form-group-sm">
                            <label> Email:</label> 
                                 <input type="text" name="iemail"  class="form-control" placeholder="example@gmail.com" pattern="^[a-z A-Z0-9._%+-]+@[a-z A-Z0-9.-]+\.[a-z]{2,}$" value ="<?php echo
                           $iemail ?>"required>
                             <div class="valid-feedback">Valid.</div>
                             <div class="invalid-feedback">Please enter a valid input in this field.</div>

                           </div>
                  </div>
                  <div class="col form-group form-group-sm mt-1">
                          <h6 class="mb-3 gender">Gender: </h6>
                             <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" name="igender"  <?php if (isset($igender) && $igender=="m") echo "checked";?> value="m" class="custom-control-input" id="customRadio1"  required>
                             <label class="custom-control-label" for="customRadio1">Male</label>
                             </div>
                             <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" name="igender"  <?php if (isset($igender) && $igender=="f") echo "checked";?> value="f" class="custom-control-input" id="customRadio2"  required>
                             <label class="custom-control-label" for="customRadio2">Female</label>
                             </div>

                   </div>
                   
            
        </div>
        <br>  

      <div class="box1" style="margin-top:30px;">
                   <input type="submit" name="UpIns" class="btn btn-primary" value="Update Instructor">
          
                   <button type="reset" class="btn btn-secondary" >Reset Button</button>
      </div>

            
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

