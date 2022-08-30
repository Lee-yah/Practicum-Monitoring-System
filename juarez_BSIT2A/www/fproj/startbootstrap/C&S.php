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

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<!-- datatables  -->
<!--   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

 -->
<style>
       .row:after       {
                     content: "";
                     clear: both;
                     display: table;
                      }

        * {  box-sizing: border-box;}
        [class*="col-"] {float: left; padding:15px; width: 100%;}
  


        @media only screen and (min-width:768px)
        {
            .col-1 {width: 8.33%;}
            .col-2 {width: 16.66%;}
            .col-3 {width: 25%;}
            .col-4 {width: 33.33%;}
            .col-5 {width: 41.66%;}
            .col-6 {width: 50%;}
            .col-7 {width: 58.33%;}
            .col-8 {width: 66.66%;}
            .col-9 {width: 75%;}
            .col-10 {width: 83.33%;}
            .col-11 {width: 91.66%;}
            .col-12 {width: 100%; }
   
          }
</style>
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

      <a href="Practicum.php" class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed "  >
          <span>Practicum Records</span>
        </a>

         <a class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed active" href="#" >
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
              <a class="nav-link" href="#">Courses & Sections Page <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- top navbar end -->

      <!-- start page content after top navbar -->

       <div class="container-fluid ml-4 mb-3">
        <h1 class="mt-4 mr-4">CIC Courses & Sections </h1>
       <!--     <p> Welcome <code>Admin!</code></p>
 -->      </div>

<div class="row col-12">
    <div class="col-1"></div>
     <div class="col-10">
         <div class="card shadow mb-4 " >
                  <div class="card-header py-3">
                       <h4 class="m-0 font-weight-bold text-primary">CIC offered Courses & Majors</h4>
                 </div>

                 <div class="card-body ">
                          <div class="d-flex justify-content-end flex-row">   
                            <button class="btn btn-xs" id="menu-toggle"><span style="color:red;padding:0px;margin:0px;" class="navbar-toggler-icon "  ></span></button>   
                                       <div class="btn-group-xs mr-4">
                                          <label type="button" class="text-primary mr-2">Add Course/Major 
                                          <a href="\www\fproj\startbootstrap\Course\addcourse.php" >
                                              <button type="button" class="ml-1 btn btn-outline-primary btn-circle btn-lg ">
                                                <i class="fa fa-plus"></i>
                                              </button>
                                          </a>
                                          </label>   
                                       </div>
                            </div>
                  
                            <div class="container mt-3">
                                  <h2>Course Table</h2>
                                  <p>Type something in the input field to search the table for courses and majors:</p>  
                                  <input class="form-control" id="myInput" type="text" placeholder="Search..">
                                  <br>
                                  <div style="overflow-x:auto;">
                                  <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>Course id</th>
                                        <th class="pr-5">Course</th>
                                        <th class="pr-5">Major</th>
                                        <th colspan="2">Action</th>
                                       
                                      </tr>
                                   </thead>   
                                
                                   <tbody id="myTable">
                                
                                       <?php 

                                         require 'connection.php';
                                        
                                        //sql to select records from profile table
                                        $sql = "SELECT * FROM course";
                                        $result = $conn->query($sql);

                                        //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                                        if($result->num_rows>0)
                                        {
                                           //output data of each row
                                           while($row =$result->fetch_assoc())
                                           {

                                            $cmid= $row["course_id"];
                                            echo "<tr>".
                                            "<td>".$row["course_id"]."</td>".
                                            "<td>".$row["course"]."</td>".
                                            "<td>".$row["major"]."</td>"
                                      

                                              
                                ?>          
                                              <td><a href="Course/editCS.php?GCourse=<?php echo $cmid ?>" > 
                                                          <button  type="button" class="btn btn-outline-primary" style="font-size:10px; border-style: none;"> Edit 
                                                          <i class="material-icons">mode_edit</i>
                                                        </button></a> </td>
 <!-- 
                                              <td><a href="Course/delCourse.php?delCourse=<?php echo $cmid ?>">
                                                        <button  type="button" class="btn btn-outline-danger" style="font-size:10px;border-style: none;">Delete 
                                                          <i class="material-icons">delete_forever</i>

 -->
                                            </tr>
                              <?php         
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
                           
               </div>  <!-- card body -->
       </div> <!-- card end -->
       </div>

       <div class="col-1"></div>
</div>
<div class="row col-12">
    <div class="col-1"></div>
     <div class="col-10">
          <div class="card shadow mb-4 " >
              <div class="card-header py-3">
                       <h4 class="m-0 font-weight-bold text-primary">CIC Sections </h4>
                 </div>
                  <div class="card-body ">
                       <div class="d-flex justify-content-end flex-row">      
                                       <div class="btn-group-xs mr-4">
                                          <label type="button" class="text-primary mr-2">Add Section 
                                          <a href="\www\fproj\startbootstrap\Section\addsection.php" >
                                              <button type="button" class="ml-1 btn btn-outline-primary btn-circle btn-lg ">
                                                <i class="fa fa-plus"></i>
                                              </button>
                                          </a>
                                          </label>   
                                       </div>
                      </div>
                            <div class="container mt-3">
                                 <h2>Section Table</h2>
                                  <p>Type something in the input field to search the table for sections</p>  
                                  <input class="form-control" id="myInputt" type="text" placeholder="Search..">
                                  <br>
                                  <div style="overflow-x:auto;">
                                  <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th class="pr-5">Course</th>
                                        <th class="pr-5">Major</th>
                                        <th class="pr-5">Section</th>
                                        <th colspan="2"> Actions</th>
                                     
                                      </tr>
                                   </thead>   
                                   <tbody id="myTablee">
                                        <?php 

                                              require 'connection.php';
                                                                      
                                                    //sql to select records from profile table
                                                    $sql = "SELECT * FROM course_section";
                                                    $result = $conn->query($sql);

                                                      //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                                                    if($result->num_rows>0)
                                                        {
                                                                         //output data of each row
                                                       while($row =$result->fetch_assoc())
                                                                {
                                                                  $secid = $row["section_id"];
                                                                echo "<tr>".
                                                            
                                                                 "<td>".$row["course"]."</td>".
                                                                "<td>".$row["major"]."</td>".
                                                               "<td>".$row["section"]."</td>"

                                                          
                                              ?>
 
                                              <td><a href="Section/editSection.php?GSection=<?php echo $secid ?>" > 
                                                          <button  type="button" class="btn btn-outline-primary" style="font-size:10px; border-style: none;"> Edit 
                                                          <i class="material-icons">mode_edit</i>
                                                        </button></a> </td>
 
                                       <!--        <td><a href="Course/delSection.php?delSection=<?php echo $cmid ?>">
                                                        <button  type="button" class="btn btn-outline-danger" style="font-size:10px;border-style: none;">Delete 
                                                          <i class="material-icons">delete_forever</i>

 -->
                                            </tr>

                                             <?php                  
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
<!--      <div class="col-sm-6">
       <div class="card shadow mb-4 mr-auto " >
                <div class="card-header py-3">
                     <h4 class="m-0 font-weight-bold text-primary">Courses Sections</h4>
                </div>

                <div class="card-body ">
                   <div class="d-flex justify-content-end flex-row">      
                           <div class="btn-group-xs mr-4">
                              <label type="button" class="text-primary mr-2">Add Section 
                              <a href="\www\fproj\startbootstrap\Section\addsection.php" >
                                  <button type="button" class="ml-1 btn btn-outline-primary btn-circle btn-lg ">
                                    <i class="fa fa-plus"></i>
                                  </button>
                              </a>
                              </label>   
                           </div>
                   </div>
                   <div>
                        jjjjj
                   </div>
               </div> 
       </div>

     </div> -->




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
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
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
