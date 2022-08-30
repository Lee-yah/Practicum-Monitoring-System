
<?php session_start();
// if (isset($_SESSION['pass'])){
  
// }
// else{
//   header('location:e_LogIn.php');
// }
?>     

   <?php 

        require 'connection.php';
        $id = $_GET['GID'];                                                   
         //sql to select records from profile table
         $sql = "SELECT * FROM user_student_records WHERE r_id=$id";
         $result = $conn->query($sql);

         //check if the number of rows in the result set is greater than 0 which means that record(s) exist
        if($result->num_rows>0)
        {
        //output data of each row
        while($row =$result->fetch_assoc())
            {
                        $sid = $row["s_id"];
                        $name = $row["Name"];
                        $email=  $row["email"];
                        $gender =$row["gender"];
                        $bday = $row["birthdate"];  
                        $fullname = $row["fullname"];
                        $section = $row["section"];                              
                        $email = $row["email"]; 
                        $contact = $row["contactno"];    
                       if ($gender=="f") {
                        $genderr ="female";
                       }else  $genderr ="male"; 
             }
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
           /* padding: 25px;*/
            margin-top: 100px;
          /*  clear: both;*/
            /*height:500px;
*/           }
     #des {padding-right: 80px;}
       a:link                 { text-decoration:  none; }
           .header h3 {margin-bottom:5px;color:mistyrose;}



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
  .cols-11 {width: 91.66%;}
  .cols-12 {width: 100%;   }



  }
  @media only screen and (max-width:768px)
  {

  .colss-1 {width: 2%; }
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
  .colss-11 {width: 91.66%;}
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


 .righttext2 {
   
    color: black;
     font-size: 14pt;
  }
  .righttext {
   
   font-weight: bold;
    font-size: 14pt;
  }



  </style>
</head>
<body>


<div class="formwrapper cols-12 colss-12 ">
<div class=" mt-3 ml-5 "><a href="\www\fproj\Teacher\Practicum.php" ><button  type="button" class="btn btn-outline-light btn-circle btn-lg"><i class="fa fa-close"></i></button>  
</a> </div>


 

<div class ="card form cols-6 colss-11  ">

<div class ="card-body  ">
               <h3 style="color: maroon;font-size: 18pt;font-weight: bold;">Student Personal Information</h3>

               <br>

              <?php 

              echo "<span class=righttext>"."School Id : "."</span>"."<span class=righttext2>".$sid."</span>"."<br>".
                   "<span class=righttext>"."Name : "."</span>"."<span class=righttext2>".$name."</span>"."<br>".
                   "<span class=righttext>"."Email : "."</span>" ."<span class=righttext2>".$email."</span>"."<br>".
                   "<span class=righttext>"."Gender : "."</span>"."<span class=righttext2>".$genderr."</span>"."<br>".
                   "<span class=righttext>"."Birthdate : "."</span>"."<span class=righttext2>".$bday."</span>"."<br>".
                   "<span class=righttext>"."Instructor : "."</span>"."<span class=righttext2>".$fullname."</span>"."<br>".
                   "<span class=righttext>"."Section : "."</span>"."<span class=righttext2>".$section."</span>"."<br>".
                   "<span class=righttext>"."Email : "."</span>"."<span class=righttext2>".$email."</span>"."<br>".
                   "<span class=righttext>"."Contact No. : "."</span>"."<span class=righttext2>".$contact."</span>"."<br>"



                      ;
            

              ?> 



        <br>  
            
      </div> 
</div>
      </div> <!-- end of Form ..1st div outside form -->
                   
    
  </div>  <!-- end of formwrapper ..1st div outside form -->





</body>
</html>

