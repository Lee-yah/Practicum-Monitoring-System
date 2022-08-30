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


<!-- datatables  -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<style type="text/css">
  
    .texth5
  {
    color: maroon;

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

        <a  href="User.php"  class="list-group-item list-group-item-action list-group-item-dark active nav-link collapsed">Users
        </a>

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

         <a class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed" href="logout.php">
          <span>Logout</span>
        </a>
    <!-- 
             <a class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
            <i class="fas fa-laugh-wink"></i>
          <span>Company</span>
            <i class="fa fa-angle-down"></i>
        </a>
        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#sidebar-wrapper">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="dropdown-item collapse-item" href="cards.html">Add Company</a>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item collapse-item" href="cards.html">View Company</a>
          </div>
        </div>  -->
   
   
      </div>
    </div>

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom ">
       <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> --> 
       <button class="btn btn-xs" id="menu-toggle"><span class="navbar-toggler-icon "  ></span></button>
         
        <div  id="navbarSupportedContent" class="mr-4">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
             <li class="nav-item active">
              <a class="nav-link" href="#">User Page <span class="sr-only  ">(current)</span></a>
            </li>
         
          </ul>
        </div>
        <!-- <div class="col-8"></div> -->
      </nav>

      <!-- top navbar end -->

      <!-- start page content after top navbar -->

      <div class="container-fluid ml-4 mb-5">
        <h1 class="mt-4 mr-4">Manage System Users </h1>
    <!--     <p> Welcome <code>Admin!</code></p> -->
      </div>

      
<!-- card start -->
  <div class="row col-12">
    <div class="col-1"></div>
     <div class="col-10 ">
          <div class="card shadow mb-4 " >
              <div class="card-header py-3">
                       <h4 class="m-0 font-weight-bold text-primary ">List of Users</h4>
                 </div>
                  <div class="card-body ">
                       <div class="d-flex justify-content-end flex-row">      
                                       <button type="button" class="btn btn-outline-primary dropdown-toggle mr-4 " data-toggle="dropdown"> <i class=" fa fa-user-plus"></i> <span>  Add User</span> </button>
                                       <div class="dropdown-menu">
                                           <a class="dropdown-item" href="Student/addstudent.php">Student</a>
                                           <a class="dropdown-item" href="Instructor/addinstructor.php">Instructor</a>
                                       </div>
                          
                      </div>
                            <div class="container mt-3">
                                 <h2 class="">User Table</h2>
                                  <p>Type something in the input field to search the table for user id or username:</p>  
                                  <input class="form-control" id="myInputt" type="text" placeholder="Search..">
                                  <br>
                                  <div style="overflow-x:auto;">
                                  <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>User Id</th>
                                        <th class="pr-5">Username</th>
                                        <th>Date Password Modified</th>
                                        <th>Role</th>
                                        <th class="pr-5">Reset Password</th>
                                        <th class="pr-5">Name</th>
                                        <th> Actions</th>
                                     
                                      </tr>
                                   </thead>   
                                   <tbody id="myTablee">
                                        <?php 

                                              require 'connection.php';
                                                                     
                                                    //sql to select records from profile table
                                                    $sql = "SELECT * FROM user_is";
                                                    $result = $conn->query($sql);

                                                      //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                                                    if($result->num_rows>0)
                                                        {
                                                                         //output data of each row
                                                       while($row =$result->fetch_assoc())
                                                                {
                                                                $id = $row["user_id"];
                                                                
                                                                
                                                                echo "<tr>".  
                                                                "<td>".$row["user_id"]."</td>".
                                                                "<td>".$row["username"]."</td>".
                                                               "<td>".$row["date_modified"]."</td>".
                                                               "<td>".$row["role"]."</td>".
                                                               "<td>".$row["reset_password"]."</td>".
                                                               "<td>".$row["Name"]."</td>"
                                          ?>
                                                         
                                                          <td><a href="user/resetpass.php?resetID=<?php echo $id ?>">
                                                        <button  type="button" class="btn btn-outline-danger" style="font-size:10px;"> Reset Password
                                                          <!-- <i class="material-icons"> </i> --></button></a></td>


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
