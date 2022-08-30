
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


<!-- datatables  -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
   <div class="list-group-item-dark border-right " id="sidebar-wrapper" >

      <div class="sidebar-heading"><span style="font-size: 16pt;">CIC PMS </span></div>


      <div class="list-group list-group-flush">
          
        
     
        <a href="index1.php" class="list-group-item list-group-item-action list-group-item-dark ">Dashboard</a>

        <a  href="User.php"  class="list-group-item list-group-item-action list-group-item-dark nav-link collapsed">Users
        </a>

      <a href="Practicum.php" class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed active"  >
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
              <a class="nav-link" href="#">Practicum Records Page <span class="sr-only">(current)</span></a>
            </li>
     
          </ul>
        </div>
      </nav>

      <!-- top navbar end -->

      <!-- start page content after top navbar -->

      <div class="container-fluid ml-4 mb-5">
               <h1 class="mt-4 ">Manage Practicum Records </h1>
    <!--     <p> Welcome <code>Admin!</code></p>
 -->      </div>


      
<!-- card start -->
  <div class="row col-12">
    <div class="col-1"></div>
     <div class="col-10 ">
          <div class="card shadow mb-4 " >
              <div class="card-header py-3">
                       <h4 class="m-0 font-weight-bold text-primary">Practicum Records</h4>
                 </div>
                  <div class="card-body ">
                            <div class="container mt-3">
                                 <h2>Practicum Table</h2>
                                  <p>Type something in the input field to search the table for student names, semester or start date and etc:</p>   

<div class="row" action="Practicum.php">
          <div class="col form-group form-group-sm">
                  
              <input class="form-control" id="myInputt" type="text" placeholder="Search..">
           </div>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <div class="col form-group form-group-sm mb-3">  
          <div class="d-flex justify-content-end flex-row">      
                          <div class="form-group ">
                           <div class="input-group ">
                               <select  name="company" class="custom-select instructorh" >
                                <option selected value="all">All company...</option>
                                <?php 

                                      require 'connection.php';

                                      $sql = "SELECT * FROM company";
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
                              <div class="input-group-append">
                                 <button type="submit" class="btn btn-primary" >Go</button>
                              </div>
                             </div>
                        </div>
           </div>
          </div>
         
</form>
</div>

                                  <br>
                                  <div style="overflow-x:auto;">
                                  <table class="table table-bordered table-hover overflow-x">
                                    <thead>
                                      <tr>
                                        
                                        <th class="pr-5">School Id</th>
                                        <th class="pr-5">Name</th>
                                        <th class="pr-5">Semester</th>
                                        <th class="pr-5" >Start Date</th>
                                        <th class="pr-5">End Date</th>
                                        <th class="pr-5">Company</th>
                                        <th class="pr-5">Instructor</th>
                                        <th class="pr-5">File Submitted</th>
                                        <th class="pr-5">Date Submitted</th>
                                        <th>Download File</th>
                                        <th>Status</th>
                                        <th>View Students</th>
                                    
                                       
                                     
                                      </tr>
                                   </thead>   
                                   <tbody id="myTablee">
                                        <?php 

                                              require 'connection.php';
                                                                      
                                                    //sql to select records from profile table
                                                    $sql = "SELECT * FROM user_student_records";
                                                    $result = $conn->query($sql);

                                                      //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                                                    if($result->num_rows>0)
                                                        {
                                                                         //output data of each row
                                                       while($row =$result->fetch_assoc())
                                                                {

                                                                                  

                                                           if(isset($_POST['company'])){
                                                                if ($_POST['company']==$row["c_id"]) {
                                                                  # code...
                                                                
                                                               
                                                                $status=$row["report_status"];
                                                                $rid=$row["r_id"];

                                                                echo "<tr>".
                                                                "<td>".$row["s_id"]."</td>".
                                                                "<td>".$row["Name"]."</td>".
                                                                "<td>".$row["sem"]."</td>".
                                                               "<td>".$row["start_date"]."</td>".
                                                               "<td>".$row["end_date"]."</td>".
                                                               "<td>".$row["c_name"]."</td>".
                                                               "<td>".$row["fullname"]."</td>".
                                                                "<td>".$row["filename"]."</td>".
                                                                "<td>".$row["sub_date"]."</td>"
                                                              
                                            ?>

                                                               <td> <a href="\www\fproj\Student\Student\uploads\<?php echo $row['filename']; ?>" download><button  type="button" class="btn btn-outline-primary" style="font-size:10px;border-style: none;">Download File <br> <i class="material-icons">file_download</i></button> </a></td>
                                                             
                                                               <td> <?php echo $status?> </td>
                <td><a href="Student/viewStud.php?GID=<?php echo $rid ?>"><button  type="button" class="btn btn-outline-primary" style="font-size:10px;border-style: none;">View Student<br> <i class="material-icons">visibility</i></button> </td>
                                                             
                                           <?php
                                            
                                              

                                                               "</tr>"; 

                                                               }elseif ($_POST['company']=="all") {
                                                               
                                                               
                                                                $status=$row["report_status"];
                                                                $rid=$row["r_id"];

                                                                echo "<tr>".
                                                                "<td>".$row["s_id"]."</td>".
                                                                "<td>".$row["Name"]."</td>".
                                                                "<td>".$row["sem"]."</td>".
                                                               "<td>".$row["start_date"]."</td>".
                                                               "<td>".$row["end_date"]."</td>".
                                                               "<td>".$row["c_name"]."</td>".
                                                               "<td>".$row["fullname"]."</td>".
                                                                "<td>".$row["filename"]."</td>".
                                                                "<td>".$row["sub_date"]."</td>"
                                                

                                            ?>
                     
                    

                    <td> <a href="\www\fproj\Student\Student\uploads\<?php echo $row['filename']; ?>" download><button  type="button" class="btn btn-outline-primary" style="font-size:10px;border-style: none;">Download File <br> <i class="material-icons">file_download</i></button> </a></td>
                                                             
                                                               <td> <?php echo $status?> </td>
                     <td><a href="Student/viewStud.php?GID=<?php echo $rid ?>"><button  type="button" class="btn btn-outline-primary" style="font-size:10px;border-style: none;">View Student <br> <i class="material-icons">visibility</i></button> </td>
                                                             
                                           <?php
                                            
                                                                "</tr>"; 
                                                             
                                                               }
                                               }    elseif(!isset($_POST['company'])){


                                                                $status=$row["report_status"];
                                                                $rid=$row["r_id"];

                                                                echo "<tr>".
                                                                "<td>".$row["s_id"]."</td>".
                                                                "<td>".$row["Name"]."</td>".
                                                                "<td>".$row["sem"]."</td>".
                                                               "<td>".$row["start_date"]."</td>".
                                                               "<td>".$row["end_date"]."</td>".
                                                               "<td>".$row["c_name"]."</td>".
                                                               "<td>".$row["fullname"]."</td>".
                                                                "<td>".$row["filename"]."</td>".
                                                                "<td>".$row["sub_date"]."</td>"


                                           ?>
                    <td> <a href="\www\fproj\Student\Student\uploads\<?php echo $row['filename']; ?>" download><button  type="button" class="btn btn-outline-primary" style="font-size:10px;border-style: none;">Download File <br> <i class="material-icons">file_download</i></button> </a></td>
                                                                                                                           
                     <td> <?php echo $status?> </td>
                <td><a href="Student/viewStud.php?GID=<?php echo $rid ?>"><button  type="button" class="btn btn-outline-primary" style="font-size:10px;border-style: none;">View Student <br> <i class="material-icons">visibility</i></button> </td></tr>



                                           <?php



                                                                       }
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
                        </div>
                    </div>
               </div>
       <div class="col-1"></div>
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
