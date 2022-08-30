
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
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
   //check if the number of rows in the result set is greater than 0 which means that record(s) exist
     if($result->num_rows>0)
      {
                                                                         //output data of each row
     while($row =$result->fetch_assoc())
      {
         
         $userid =$row["user_id"];
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


$sfName=$smName=$slName=$sbirthdate=$sgender=$sinstructor=$ssection=$semail=$scontactno=$ssemester=$sstartdate=$senddate=$scompany=$suserId=$susername=$spassword=$sschoolId=$srole=$sresetPassword=$recordId="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # code...

if (isset($_POST['addStud'])) {
  $sfName = test_input($_POST["sfName"]);
  $smName = test_input($_POST["smName"]);
  $slName = test_input($_POST["slName"]);
  $sbirthdate = test_input($_POST["sbirthdate"]);
  $sgender = test_input($_POST["sgender"]);
  $sinstructor = test_input($_POST["sinstructor"]);
  $ssection = test_input($_POST["ssection"]);
  $semail = test_input($_POST["semail"]);
  $scontactno = test_input($_POST["scontactno"]);
  $ssemester = test_input($_POST["ssemester"]);
  $sstartdate = test_input($_POST["sstartdate"]);
  $senddate = test_input($_POST["senddate"]);
  $scompany = test_input($_POST["scompany"]);
  $suserId = test_input($_POST["suserId"]);
  $susername  = test_input($_POST["susername"]);
  $spassword = test_input($_POST["spassword"]);
  $sschoolId = test_input($_POST["sschoolId"]);
  $srole = test_input($_POST["srole"]);
  $sresetPassword = test_input($_POST["sbirthdate"]); //default resetpassword is birthdate


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

<div class=" ml-5 mt-0"><a href="\www\fproj\startbootstrap\User.php" ><button  type="button" class="btn btn-outline-light btn-circle btn-lg"><i class="fa fa-close"></i></button>  
</a> </div>

<div class ="form cols-10 colss-11 mt-4">
  <form  id="myForm shadow" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  class="needs-validation" novalidate>
         <h1 class="addtext">Add Student User Form</h1>
          <br><br>
          <div class="alert alert-success cols-6" id="success-alert">
           <button type="button" class="close" data-dismiss="alert">x</button>
           <strong>Success! </strong> New Student has added to the database.
           </div>
           <div class="box1 cols-12">
        
            <div class="box2 cols-55 mr-0 ml-0">
           
               <h3>Personal Information</h3>

               <br>
               <div class="form-group form-group-sm  ">
                     <div class=" input-group mb-3">
                          <div class="input-group-prepend">
                          <span class="input-group-text">Student</span>
                          </div>
                          <input type="text" name="sfName" class="form-control" pattern="^[a-z A-Z]*$" placeholder="First Name" required>
                          <input type="text" name="smName" class="form-control" maxlength="2" pattern="^[a-z A-Z]\.$"placeholder="Middle Name "
                          required>
                          <input type="text" name="slName"class="form-control" pattern="^[a-z A-Z]*$" placeholder="Last Name" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please enter a valid input in this field.</div>
                     </div>  
                     <br>     
             </div>


         <div class="row">   
                    <div class="col form-group form-group-sm">
                     <label>Birthdate :</label> 
                        <input type="text" name="sbirthdate" class="form-control" placeholder="YYYY-MM-DD" maxlength="10" pattern="^[0-9]{4}-[0-9]{2}-[0-9]{2}$" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in this field.</div>
                    </div> 


                    <div class="col form-group form-group-sm mt-1">
                    <h6 class="mb-3 gender">Gender: </h6>
                       <div class="custom-control custom-radio custom-control-inline">
                       <input type="radio" name="sgender" value="m" class="custom-control-input" id="customRadio1"  required>
                       <label class="custom-control-label" for="customRadio1">Male</label>
                       </div>
                       <div class="custom-control custom-radio custom-control-inline">
                       <input type="radio" name="sgender" value="f" class="custom-control-input" id="customRadio2"  required>
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
                             <input type="text" name="semail"  class="form-control" placeholder="example@gmail.com" title pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" >
                             <div class="valid-feedback">Valid.</div>
                             <div class="invalid-feedback">Please enter a valid input in this field.</div>
                  
                            
                  </div>
                  <div class="col form-group form-group-sm">
                       <label>  Contact Number: </label> 
                                <input type="text" name="scontactno"  maxlength="11" placeholder="11-digit number" pattern="^[0-9]{11}$" class="form-control" title >
                                <div class="valid-feedback">Valid.</div>
                                 <div class="invalid-feedback">Please enter a valid input in this field.</div>
                                
                              
                  </div>
        </div>


        <div class="form-group form-group-sm mt-4">
                  <label>Semester:</label> 
                    <div class="form-group ">
                          <select name="ssemester" class="custom-select instructorh"  >
                             <option value="1st Semester">1st Semester</option>
                             <option value="2nd Semester">2nd Semester</option>
                             <option value="SUMMER">SUMMER</option>
                          </select>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please enter a valid input in this field.</div>
                  </div>
        </div> 
       

        <div class="row mt-5">
          <!--   date("Y-m-d") -->
                      <div class="col form-group form-group-sm ">
                      <label>Start Date:</label> 
                          <input type="date" name="sstartdate" class="form-control" placeholder="YYYY-MM-DD" maxlength="10" pattern="^[0-9]{4}-[0-9]{2}-[0-9]{2}$" >
                           <div class="valid-feedback">Valid.</div>
                           <div class="invalid-feedback">Please enter a valid input in this field.</div>
                       
                      </div>

                     <div class="col form-group form-group-sm">
                     <label>End Date:</label> 
                          <input type="date" name="senddate" class="form-control" placeholder="YYYY-MM-DD" maxlength="10" pattern="^[0-9]{4}-[0-9]{2}-[0-9]{2}$" >
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
                  <label>User Id:</label>  
                        <input type="text" name="suserId" class="form-control"   placeholder="Optional Last Number: <?php echo $userid; ?>" pattern="^[0-9]*$" value="<?php echo $u=$userid+1; ?>" >  
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        <br>
                  </div>
                  <div class="col form-group form-group-sm">
                  <label>Username:</label>  
                        <input type="text" name="susername" class="form-control"  required> 
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        <br>
                  </div>
      </div>


      <div class=" form-group form-group-sm mt-2">
                  <label>Password:</label> 
                        <input type="text" name="spassword" class="form-control" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please enter a valid input in this field.</div>
                        <br>
      </div>


      <div class="form-group form-group-sm mt-2">      
                  <label> School ID :</label> 
                         <input type="text" name="sschoolId"  class="form-control" placeholder="2000-12345" title pattern="^[0-9]{4}-[0-9]{5}$" maxlength="10" required>
                         <div class="valid-feedback">Valid.</div>
                         <div class="invalid-feedback">Please enter a valid input in this field.</div>
      
                         <br>
      </div>
      <div>  <!-- hidden data -->
        <input type="hidden" name="srole" value="3">
 

      </div>

                   <input type="submit" name="addStud" class="btn btn-primary" value="Add Student">
          
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


<?php 

/*
User...
user_id {PK} (field right)    $suserId = test_input($_POST["suserId"]);
username  (field right)       $susername  = test_input($_POST["susername"]);
password (field right)         $spassword = test_input($_POST["spassword"]);
role (Student)                  $srole = test_input($_POST["srole"]);
reset_password (birthday)     $sresetPassword = test_input($_POST["sbirthdate"]); //default resetpassword is birthdate

Student...
s_id  {PK} (field right)           $sschoolId = test_input($_POST["sschoolId"]);
user_id {FK} (fieldright)B        $suserId = test_input($_POST["suserId"]);              
fname (field left)               $sfName = test_input($_POST["sfName"]);
mname (field left)                $smName = test_input($_POST["smName"]);
lname (field left)                $slName = test_input($_POST["slName "]);
gender (field left)                 $sgender = test_input($_POST["sgender"]);
birthdate (field left)             $sbirthdate = test_input($_POST["sbirthdate"]);
i_id {FK} (field left)               $sinstructor = test_input($_POST["sinstructor"]);
section_id {FK} (field left)          $ssection = test_input($_POST["ssection"]);
email (field left)                       $semail = test_input($_POST["semail"]);                                                              
contactno (field left)               $scontactno = test_input($_POST["scontactno"]);                                       

Records...
r_id {PK} (field right)                           $recordId = test_input($_POST["suserId"]); // naay jump number ang record kung == user
s_id {FK} (field left)                             $sschoolId = test_input($_POST["sschoolId"]);
sem (naa pero pwed dle butangan)                  $ssemester = test_input($_POST["ssemester"]);
start_date  (naa pero pwed dle butangan)          $sstartdate = test_input($_POST["sstartdate"]);
end_date (naa pero pwed dle butangan)               $senddate = test_input($_POST["senddate"]);
c_id {FK}(naa pero pwed dle butangan)                $scompany = test_input($_POST["scompany "]);
i_id {FK}(naa pero dle butangan)              $sinstructor = test_input($_POST["sinstructor"]);

 
*/
require 'connection.php';


//submit add button
if (isset($_POST['addStud'])) {




$sql = "INSERT INTO user (user_id,username,password,role,reset_password) 
          VALUES('$suserId','$susername','$spassword','$srole','$sresetPassword')";

$ssql = "INSERT INTO student (s_id, user_id, fname,mname,lname,gender, birthdate ,i_id,section_id,email,contactno)
          VALUES ('$sschoolId', '$suserId', '$sfName','$smName','$slName', '$sgender','$sbirthdate','$sinstructor','$ssection',' $semail','$scontactno')";

$sssql = "INSERT INTO records (s_id, sem, start_date,end_date , c_id,i_id)
          VALUES ('$sschoolId', '$ssemester', '$sstartdate','$senddate','$scompany','$sinstructor')";
  
if ($conn->query($sql)===TRUE){
     if($conn->query($ssql)===TRUE){
        if($conn->query($sssql)===TRUE){
                //Close database connection
           $conn->close();
          }   
     }
  
}
else{  echo "Error ".$sql."<br>".$conn->error;}
           

  

         


 
}



?>