<?php session_start();
if (isset($_SESSION['user_id'])){
  }
else {
    header('location:enter.php');
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CIC Practicum Monitoring System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="userstyle.css">

<style >
  
  .righttext {
   
    font-weight: bold;
  }
  .righttext2 {
   color:#0d98ba;
    font-weight: bold;
  }

   .righttext3 {
   font-size: 15pt;
    font-weight: bold;
  }


</style>
</head>

<body>

  <div class="d-flex" id="wrapper">

 <div class="list-group-item-dark border-right" id="sidebar-wrapper" >


     <div class="sidebar-heading"><span style="font-size: 16pt;">CIC PMS </span></div>
     <hr class="sidebar-divider my-0">

      <div class="list-group list-group-flush">
          
    
        <a href="Practicum.php" class="list-group-item list-group-item-action list-group-item-dark active nav-link collapsed"  >
          <span>Dashboard</span>
        </a>  

        <a class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed" href="Company.php">
          <span>Company</span>
        </a>

        <a class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed" href="logout.php">
          <span>Logout</span>
        </a>
   
   
      </div>

    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom ">
       <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->
         <button class="btn btn-xs" id="menu-toggle"><span style="color:red;padding:0px;margin:0px;" class="navbar-toggler-icon "  ></span></button>
         
          <div  id="navbarSupportedContent" class="mr-4">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
               <li class="nav-item active">
              <a class="nav-link" href="#"> Dashboard <span class="sr-only">(current)</span></a>
            </li>
        </div>     

     </nav>

      <!-- top navbar end -->

      <!-- start page content after top navbar -->

       <?php 
                require 'connection.php';
                 $userid=$_SESSION['user_id']; 


                                                                   
                //sql to select records from profile table
                $sql = " select * FROM user_student_records where user_id='".$userid."'";
                $result = $conn->query($sql);

                 //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                if($result->num_rows>0)
                 {
                //output data of each row
                while($row =$result->fetch_assoc())
                 {    
                 ?>

      <div class="container-fluid ml-4 mb-5">
        <h1 class="mt-4 ">CIC Practicum Management System </h1>
        <p>Welcome <code><?php echo $row["username"]."!"?> </code></p>
      </div>
  
<div class="row col-12">
  <!-- card start -->
  <div class="col-sm-6 ml-auto mr-auto ">
    <div class="col-1"></div>
     <div class="col-12 ">
         <div class="card shadow mb-4 ml-lg-4 ml-sm-4 mr-xs-4" >

 <?php        

                  $iid=$row["i_id"];
                  $Ins=$row["fullname"];
                  $_SESSION['rid']=$row["r_id"];
                 
                   $rid= $row["r_id"];
                  $userid=$row["user_id"];

  


            ?>
                     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h5 class="m-0 font-weight-bold text-primary"> Profile </h5>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> Settings
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                     
                      <a class="dropdown-item" href="Student/editpass.php?Guserr=<?php echo $userid ?>">Change password</a>
                      
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="Student/editstudent.php?Guser=<?php echo $userid ?>">Edit Profile</a>
                    </div>
                  </div>
                </div>
                  <div class="card-body  ">
                       <?php 

                          if ($row["gender"]=="f") {
                              $gender ="female";
                          }else  $gender ="male";

                echo "<span class=righttext>"."Username: "."</span>".$row["username"]."<br>"."<br>"."<p class=righttext3>"."Personal Information"."</p>".

                   "<span class=righttext>"."School-Id : "."</span>".$row["s_id"]."<br>"."<br>".
                   "<span class=righttext>"."Name : "."</span>". $row["Name"]."<br>"."<br>".
                  "<span class=righttext>". "Gender : "."</span>".$gender."<br>"."<br>".
                   "<span class=righttext>".  "Birthdate : "."</span>". $row["birthdate"]."<br>"."<br>"

                        ?>

                 <span class=righttext> Instructor: </span> <a href="Instructor\viewIns.php?Giid=<?php echo $iid  ?>" >
                   <?php echo $Ins ?></a> 
                   <br> <br>
                                                      
                   <?php             

                    echo "<span class=righttext>". "Section : "."</span>".$row["section"].  "<br>"."<br>".


                     "<span class=righttext>".  "Email Address : "."</span>".$row["email"]. "<br>". "<br>".     
                    "<span class=righttext>". "Contact No. : "."</span>".$row["contactno"]."<br>"."<br>". "<p class=righttext3>"

                      ."Practicum Record Information"."</p>".
                     "<span class=righttext>".   "Semester Practicum taken : "."</span>".$row["sem"]."<br>"."<br>".
                      "<span class=righttext>". "Start Date of Practicum : "."</span>".$row["start_date"]."<br>"."<br>".
                     "<span class=righttext>".   "End Date of Practicum : "."</span>".$row["end_date"]."<br>"."<br>".
                     "<span class=righttext>".   "Practicum Company : "."</span>".$row["c_name"]. "<br>";

                                                        
                     ?>

                        </div>
                    </div>
               </div>
       <div class="col-1"></div>
</div>

      
<!-- card start -->
  <div class=" col-sm-6 ml-auto mr-auto">
    <div class="col-1"></div>
     <div class="col-12 ">
          <div class="card shadow mb-4 mr-lg-4 mr-sm-4 ml-xs-4" >
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h5 class="m-0 font-weight-bold text-info">End Semester File Report </h5>


           <!--        <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> Options
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                     <div class="dropdown-header">File Options:</div>
                      <a class="dropdown-item" href="#">Download File</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Delete file </a>
                    </div>
                  </div> -->


                </div>
                  <div class="card-body ">

             <div class="col-xs-8 col-xs-offset-2 well">
                       <form action="Student/upload.php" method="post" enctype="multipart/form-data">
                          <legend>Select PDF File to Upload:</legend>

                       <div class="form-group">
                       <input type="file" name="file1" />
                       <input type="hidden" name="rid" value="<?php echo $rid?>">
                       </div>
                       <div class="form-group">
                     <!--    <?php  

                        if(empty($row["filename"])){
                            
                        ?>
                        <input type="submit" name="submitF" value="Upload" class="btn btn-info" disabled="">

                        <?php

                        }

                        ?> -->
                         <input type="submit" name="submitF" value="Upload" class="btn btn-info"/>
                       </div>
                            <?php if(isset($_GET['st'])) { ?>
                            <div>
                            <?php if ($_GET['st'] == 'success') {
                                echo '<script> alert("File succesfully uploaded ")</script>';
                           }
                            else
                               {
                             echo '<script> alert("Invalid File Extension! ")</script>';
                          } ?>
                            </div>
                        <?php } ?>
                       </form>
              </div>


 <?php  echo  "<span class=righttext2>"." File : ".$row["filename"]. "<br>";
   if(!empty($row["filename"])){

  ?>
  <div class="col-12">
 <br>
   <a href="Student/uploads/<?php echo $row['filename']; ?>" target="_blank">
      <button  type="button" class="btn btn-outline-info" style="font-size:10px; "> View
        <!-- <i class="material-icons">mode_view</i> -->
       </button></a> 
   
   
    <a href="Student/uploads/<?php echo $row['filename']; ?>" download> 
      <button  type="button" class="btn btn-outline-info" style="font-size:10px; "> Download
     <!--  <i class="material-icons">mode_download</i> -->
      </button></a>

       <a href="Student/delfile.php/?GID=<?php echo $rid; ?>" > 
      <button  type="button" class="btn btn-outline-danger" style="font-size:10px; "> Delete
     <!--  <i class="material-icons">mode_download</i> -->
      </button></a>
   
   
</div>
      <br>


  <?php  
   }


  ?>



  

         <?php echo "<span class=righttext2>"."Date Submitted : ".$row["sub_date"].  "<br>".
                          "<span class=righttext2>"."File status : ".$row["report_status"].  "<br>";                         

                            }
                              }
                        else
                           {
                              echo "0 results";
                            }

                        //Close database connection
                      $conn->close();


                      ?>
                        </div>
                    </div>
               </div>
       <div class="col-1"></div>
</div>
</div>
            </div>



      
  <!-- end page content after top navbar -->


    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");

    });



       $(document).ready(function(){
  $("#myInputt").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTablee tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


  </script>

</body>

</html>
