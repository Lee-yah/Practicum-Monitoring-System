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



<style type="text/css">

 .btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
/*    line-height: 1.42857;*/
    margin-top: 30px;

}
.btn-lg {
    width: 50px;
    height: 50px;
    padding: 0px 8px;
    border-radius: 35px;
    font-size: 25px;
  /*  line-height: 1.33;*/
  margin-top: 0px;
}


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
  .texth5 {color: maroon;}
a:link {color: black;}
a:hover {color:black;text-decoration: none;}
.settings{color:maroon;}


</style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="list-group-item-dark border-right" id="sidebar-wrapper" >


     <div class="sidebar-heading"><span style="font-size: 16pt;">CIC PMS </span></div>
     <hr class="sidebar-divider my-0">

      <div class="list-group list-group-flush">
          
        

        <a href="index1.php" class="list-group-item list-group-item-action list-group-item-dark active" >Dashboard</a>


        <a href="Practicum.php" class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed"  >
          <span>Practicum Records</span>
        </a>  

        <a href="C&S.php" class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed" >
          <span>Courses & Sections</span>
        </a>

     <a class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed" href="Instructor.php">
          <span>Instructor</span>
        </a>

        <a class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed" href="Company.php">
          <span>Company</span>
        </a>
       
           <a href="logout.php" class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed" >
          <span>Logout</span>
        </a>
   
      </div>

    </div>

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
       <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->
         <button class="btn btn-xs" id="menu-toggle"><span class="navbar-toggler-icon "  ></span></button>
  
        <div  id="navbarSupportedContent" class="mr-4">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
               <li class="nav-item active">
              <a class="nav-link" href="#"> Dashboard <span class="sr-only">(current)</span></a>
            </li>
        </div>

      </nav>

      <!-- start page content after top navbar -->


    <?php 
               require 'connection.php';
                $userid=$_SESSION['user_id'];                                                                                              
                //sql to select records from profile table
                $sql = " select * FROM user_ins where user_id='".$userid."'";
                $result = $conn->query($sql);

                 //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                 if($result->num_rows>0)
                          {
                //output data of each row
                  while($row =$result->fetch_assoc())
                  {
                           $_SESSION['iid']=$row["i_id"];
                            $iid=$row["i_id"];
                         $Ins=$row["fullname"];
                           $usernamee=  $row["username"];
                        // $userid=$row["user_id"];
                            
                        ?>
      <div class="container-fluid ml-4 mb-5">
        <h1 class="mt-4 ">CIC Practicum Management System </h1>
        <p>Welcome <code> <?php echo $usernamee."!";?></code></p>
      </div>
  
<div class="row col-12">
  <!-- card start -->
  <div class="col-sm-6 ml-auto mr-auto ">
     
    <div class="col-1"></div>
     <div class="col-sm-12">
         <div class="card shadow mb-4 ml-lg-4 ml-sm-4 mr-xs-4" >
                     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h5 class="m-0 font-weight-bold texth5"> Profile </h5>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle settings" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-gear fa-sm fa-fw text-gray-400"></i>  Settings
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                     
                      <a class="dropdown-item" href="Instructor/editpass.php?Guserr=<?php echo$userid ?>">Change password</a>
                      
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="Instructor/editIns.php?GetIns=<?php echo$userid ?>">Edit Profile</a>
                    </div>
                  </div>
                </div>
                  <div class="card-body  ">
                                        <?php 

                                        

                                                                    if ($row["gender"]=="f") {
                                                                      $gender ="female";
                                                                    }else  $gender ="male";

                                                                 echo "<span class=righttext>"."Username: "."</span>".$row["username"]."<br>"."<br>"."<p class=righttext3>"."Personal Information"."</p>".

                                                                  "<span class=righttext>"."School-Id : "."</span>".$row["i_id"]."<br>"."<br>".
                                                                 "<span class=righttext>"."Name : "."</span>". $row["fullname"]."<br>"."<br>".
                                                                "<span class=righttext>". "Gender : "."</span>".$gender."<br>"."<br>".
                                                              "<span class=righttext>".  "Email: "."</span>". $row["email"]."<br>"."<br>"   ;         

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

      
<!-- card start -->
  <div class="col-sm-6 ml-auto mr-auto">
   
    <div class="col-1"></div>
     <div class="col-sm-12">
          <div class="card shadow mb-4 mr-lg-4 mr-sm-4 ml-xs-4" >
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h5 class="m-0 font-weight-bold texth5"> My Sections History </h5>
                   
                  </div>
                  <div class="card-body ">
                            <div class="d-flex justify-content-end flex-row">      
                                       <div class="d-flex justify-content-end flex-row">      
                                           <div class="btn-group-xs mr-4 marge">
                                               <label  class=" mr-2">My Section </label>  
                                               <a href="\www\fproj\Teacher\Instructor\addSectiontoIns.php" >
                                                <button type="button" class="ml-1 btn btn-outline-secondary settings btn-circle btn-lg ">
                                                <i class="fa fa-plus"></i>
                                                </button>
                                                </a>
                                                
                                            </div>
                                        </div>
                          </div>
                  
                                   <div class="container mt-3">
                                  <div style="overflow-x:auto;">
                                  <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>Section</th>
                                        <th>Course</th>
                                        <th>Major</th>
                                        <th>School Year</th>
                                        <th colspan="2">Action</th>
                              
                                     
                                      </tr>
                                     </thead>
                                <tbody id="myTablee">
                                  <?php 
                               
                                         require 'connection.php';
                                        
                                        //sql to select records from profile table
                                        $sql = " select * FROM ins_csdetails where i_id='".$iid."'";
                                        $result = $conn->query($sql);

                                        //check if the number of rows in the result set is greater than 0 which means that record(s) exist

                                        if($result->num_rows>0)
                                        {
                                           //output data of each row
                                           while($roww =$result->fetch_assoc())
                                           {

                                           $ISid = $roww["inssection_id"];
                                            
                                            echo "<tr>".
                                            "<td>".$roww["section"]."</td>".
                                            "<td>".$roww["course"]."</td>".
                                            "<td>".$roww["major"]."</td>".
                                              "<td>".$roww["SY"]."</td>"
                                  ?>

                                           <td><a href="Instructor/editSectiontoIns.php?GetStoI=<?php echo $ISid ?>" > 
                                            <button  type="button" class="btn btn-outline-secondary" style="font-size:10px; border-style: none;"> Edit 
                                             <i class="material-icons">mode_edit</i>
                                            </button></a> </td>
                                             <td><a href="Instructor/delSectoIns.php?delID=<?php echo $ISid ?>">
                                              <button  type="button" class="btn btn-outline-danger" style="font-size:10px;border-style: none;">Delete 
                                            <i class="material-icons">delete_forever</i>



                                  <?php



                                            "</tr>";
                                             
                                           }
                                        }
                                        else
                                        {
                                          echo "0 results";
                                        }

                                        //Close database connection
                                        $conn->close();

                                       ?>


                                      </tbody>
                                </table>
                                  </div> 
                                   </div>
                        </div> <!-- end of card -->
                        </div>
                    </div>
               </div>
       <div class="col-1"></div>

</div>
<div class="col-12"></div>
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
  </script>

</body>

</html>
