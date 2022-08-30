<?php session_start();
if (isset($_SESSION['user_id'])){
  }
else {
    header('location:http://127.0.0.1/www/fproj/enter.php');
}
?>
 
   
<?php
require 'connection.php' ;


$Gsid = $_GET['Guser'];
    $query = " select * FROM user_student_records where user_id='".$Gsid."'";
    $result = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result))
    {
           $userid = $row["user_id"];
          $fName = $row["fname"];
          $mName = $row["mname"];
          $lName = $row["lname"];
          $birthdate = $row["birthdate"];
          $gender = $row["gender"];
           $insid = $row["i_id"];
          $ins = $row["fullname"];
           $secid = $row["section_id"];
          $sec = $row["section"];
          $email = $row["email"];
          $contactno = $row["contactno"];
          $sem = $row["sem"];
              $rid = $row["r_id"];
          $start = $row["start_date"];
          $end = $row["end_date"];
           $compid = $row["c_id"];
          $comp = $row["c_name"];
          $usernamee = $row["username"];
          $Sid = $row["s_id"];
    }
  
           
 //  Close database connection
  $conn->close();


?>


<!DOCTYPE html>
<html>
<head>
  <title>Add Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <!-- para sa alert button -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style >

  body{margin:0px;}

      li {font-weight: bold;display:inline-block;padding-top: 10px;}
      a  {color:lightgray;font-style: none;}
      ul {list-style: none; }
.header {border:solid skyblue; padding-top: 10px;}
      h1 {margin: 0px auto;}
      h1 .addtext {padding-top: 20px;}
     .kayak    {float: left;margin:0px auto ;text-align:center;}
     .error {color: red;}
     .form {margin: 0px auto;
             border: solid white ;
             background-color: white; 
             width: 80%;
            text-align: left;
            align-content: center;
            padding: 25px;
            padding-top: 50px;
            clear: both;
            height:750px;
           }
     #des {padding-right: 80px;}
       a:link                 { text-decoration:  none; }
           .header h3 {margin-bottom:5px;color:mistyrose;}


.formwrapper{ background-color: dimgray;padding-top: 7%;padding-bottom: 7%;clear: both; padding-top: 30px;}

.box1{height:600px;margin:0 auto;}
.box2{float:left;}
.divider {float:left;}
.divider1 {border-right:solid  lightgray;}
.gender {font-weight: bold;}
.instructorh {height: 30px;}
[class*="cols-"] { width: 100%;}
@media only screen and (min-width:768px)
  {

  .cols-1 {width: 2%; height: 570px;margin:0 auto;}
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
  .cols-11 {width: 91.66%;}
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
  .colss-11 {width: 91.66%; height:1100px}
  .colss-12 {width: 100%; height:1300px;margin:0px auto;}



  }

    .btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
    margin-top: 10px;

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


<div class="formwrapper cols-12 colss-12 ">

<div class=" ml-5 mt-0"><a href="\www\fproj\Student\Practicum.php" ><button  type="button" class="btn btn-outline-light btn-circle btn-lg"><i class="fa fa-close"></i></button>  
</a> </div>

<div class ="form cols-10 colss-11 mt-4">
  <form  id="myForm shadow" action="updateprofile.php?GID=<?php echo $userid ?>" method="post"  class="needs-validation" novalidate>
         <h1 class="addtext">Edit Profile Form</h1>
          <br><br>
          <!-- <div class="alert alert-success cols-6" id="success-alert">
           <button type="button" class="close" data-dismiss="alert">x</button>
           <strong>Success! </strong> New Student has added to the database.
           </div> -->
           <div class="box1 cols-12">
        
            <div class="box2 cols-55 mr-0 ml-0">
           
               <h3>Personal Information</h3>

               <br>
               <div class="form-group form-group-sm  ">
                <label >Name : </label>
                     <div class=" input-group mb-3"> 
                          <input type="text" name="sfName" class="form-control" pattern="^[a-z A-Z]*$" 
                          value="<?php echo $fName ?>" placeholder="First Name" required>
                          <input type="text" name="smName" class="form-control" maxlength="2" pattern="^[a-z A-Z]\.$" value="<?php echo $mName ?>" placeholder="Middle Name "
                          required>
                          <input type="text" name="slName"class="form-control" pattern="^[a-z A-Z]*$" value="<?php echo $lName ?>" placeholder="Last Name" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please enter a valid input in this field.</div>
                     </div>  
                     
             </div>


         <div class="row">   
                    <div class="col form-group form-group-sm">
                     <label>Birthdate :</label> 
                        <input type="text" name="sbirthdate" class="form-control" placeholder="YYYY-MM-DD" maxlength="10" pattern="^[0-9]{4}-[0-9]{2}-[0-9]{2}$" value="<?php echo $birthdate ?>" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in this field.</div>
                    </div> 


                    <div class="col form-group form-group-sm mt-1">
                    <h6 class="mb-3 gender">Gender: </h6>
                       <div class="custom-control custom-radio custom-control-inline">
                       <input type="radio" name="sgender" <?php if (isset($gender) && $gender=="m") echo "checked";?> value="m" class="custom-control-input" id="customRadio1"  required>
                       <label class="custom-control-label" for="customRadio1">Male</label>
                       </div>
                       <div class="custom-control custom-radio custom-control-inline">
                       <input type="radio" name="sgender" <?php if (isset($gender) && $gender=="f") echo "checked";?>  value="f" class="custom-control-input" id="customRadio2"  required>
                       <label class="custom-control-label" for="customRadio2">Female</label>
                      </div>

                   </div>
        </div>
        <br>  

        <div class="row ">
                    <div class="col form-group form-group-sm">
                     <label>Instructor :</label> 
                          <div class="form-group ">
                                <select name="sinstructor" class="custom-select instructorh"  required>
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
                                                  if ($row["i_id"]==$insid) {
                                                    echo "<option selected value=".$row["i_id"].">".$row["fullname"]."</option>";
                                                  }else
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


                  <div class="col form-group form-group-sm">
                       <label>Section :</label> 
                          <div class="form-group ">
                               <select name="ssection" class="custom-select instructorh"  required>
                                <?php 

                                      require 'connection.php';

                                      $sql = "SELECT * FROM section_drop";
                                      $result = $conn->query($sql);

                                      //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                                      if($result->num_rows>0)
                                      {
                                         //output data of each row
                                         while($row =$result->fetch_assoc())
                                         {   
                                             if ($row["section_id"]==$secid) {
                                                    echo "<option selected value=".$row["section_id"].">".$row["section"]."</option>";
                                              }else
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


        <div class="row ">
                  <div class="col form-group form-group-sm">
                      <label> Email:</label> 
                             <input type="text" name="semail"  class="form-control" placeholder="example@gmail.com" value="<?php echo $email ?>" pattern="^[a-zA-Z 0-9._%+-]+@[a-zA-Z 0-9.-]+\.[a-z]{2,}$" >
                             <div class="valid-feedback">Valid.</div>
                             <div class="invalid-feedback">Please enter a valid input in this field.</div>
                  
                            
                  </div>
                  <div class="col form-group form-group-sm">
                       <label>  Contact Number: </label> 
                                <input type="text" name="scontactno"  maxlength="11" placeholder="11-digit number" pattern="^[0-9]{11}$" class="form-control" value="<?php echo $contactno ?>" >
                                <div class="valid-feedback">Valid.</div>
                                 <div class="invalid-feedback">Please enter a valid input in this field.</div>
                                
                              
                  </div>
        </div>


        <div class="form-group form-group-sm mt-4">
                  <label>Semester:</label> 
                    <div class="form-group ">
                          <select name="ssemester" class="custom-select instructorh"  >

                             <option <?php if (isset($sem) && $sem=="1st Semester") echo "selected";?> value="1st Semester">1st Semester</option>
                             <option  <?php if (isset($sem) && $sem=="2nd Semester") echo "selected";?> value="2nd Semester">2nd Semester</option>
                             <option  <?php if (isset($sem) && $sem=="SUMMER") echo "selected";?> value="SUMMER">SUMMER</option>
                          </select>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please enter a valid input in this field.</div>
                  </div>
        </div> 
       

        <div class="row mt-5">
          <!--   date("Y-m-d") -->
                      <div class="col form-group form-group-sm ">
                      <label>Start Date:</label> 
                          <input type="text" name="sstartdate" class="form-control" placeholder="YYYY-MM-DD" maxlength="10" pattern="^[0-9]{4}-[0-9]{2}-[0-9]{2}$" value="<?php echo $start?>">
                           <div class="valid-feedback">Valid.</div>
                           <div class="invalid-feedback">Please enter a valid input in this field.</div>
                       
                      </div>

                     <div class="col form-group form-group-sm">
                     <label>End Date:</label> 
                          <input type="text" name="senddate" class="form-control" placeholder="YYYY-MM-DD" maxlength="10" pattern="^[0-9]{4}-[0-9]{2}-[0-9]{2}$" value="<?php echo $end ?>">
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        
                     </div>
                     <br>
       </div>

                

      <div class="form-group form-group-sm mt-3">
                  <label>Company Name:</label> 
                        <div class="form-group ">
                           <select name="scompany" class="custom-select instructorh" >
                         
                                <?php 

                                    require 'connection.php';

                                    $sql = "SELECT * FROM comp_drop";
                                    $result = $conn->query($sql);

                                    //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                                    if($result->num_rows>0)
                                    {
                                       //output data of each row
                                       while($row =$result->fetch_assoc())
                                       {

                                            if ($row["c_id"]==$compid) {
                                                    echo "<option selected value=".$row["c_id"].">".$row["c_name"]."</option>";
                                                  }else
                                           echo "<option value=".$row["c_id"].">".$row["c_name"]." - ".$row["c_address"]."</option>";
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
      
      <br>


      </div> <!-- end pf 1st box 2 -->




      <div class="divider cols-1 divider1"> 
      </div> <div class="divider cols-1"></div>




      <div class="box2 cols-55">
              
           <div class="cols-9"></div>
          
      <div class="row mt-2">

  
                  <div class="col form-group form-group-sm">
                  <label>Username:</label>  
                        <input type="text" name="susername" class="form-control" value="<?php echo $usernamee?>" required> 
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        <br>
                  </div>
                      <div class="col form-group form-group-sm mt-2">      
                  <label> School ID :</label> 
                         <input type="text" name="sidd"  class="form-control" placeholder="2000-12345"  value ="<?php echo $Sid ?>" disabled>
                         <div class="valid-feedback">Valid.</div>
                         <div class="invalid-feedback">Please enter a valid input in this field.</div>
      
                         <br>
                        </div>
      </div>





  
      <div>  <!-- hidden data -->
        <input type="hidden" name="srole" value="3">
                    <input type="hidden" name="rid" value="<?php echo $rid ?>"> 
                     <input type="hidden" name="id" value="<?php echo $Sid ?>"> 

      </div>

                   <input type="submit" name="UpStud" class="btn btn-primary" value="Update">
          
                   <button type="reset" class="btn btn-secondary" >Reset Button</button>


      </div>  <!-- end of 2nd box -->
      

      </div>  <!-- end of 1st whole box -->
            
      </form>

      </div> <!-- end of myForm ..1st div outside form -->
                   
    
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
