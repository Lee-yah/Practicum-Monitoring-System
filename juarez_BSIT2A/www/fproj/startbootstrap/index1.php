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

<style >
  
  .righttext {
   
    font-weight: bold;
    color: maroon;
  }
  .righttext2 {
   
    font-weight: bold;
  }

   .righttext3 {
   font-size: 15pt;
    font-weight: bold;
  }
  
  .texth5
  {
    color: maroon;

  }
a:link {color: black;}
a:hover{text-decoration: none; color:maroon;}
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


        <a  href="User.php"  class="list-group-item list-group-item-action list-group-item-dark ">Users
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

        <a href="logout.php" class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed" href="">
          <span>Logout</span>
        </a>

   
   
      </div>

    </div>

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
     
         <button class="btn btn-xs" id="menu-toggle"><span class="navbar-toggler-icon "  ></span></button>
  
        <div   id="navbarSupportedContent" class="mr-4">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
               <li class="nav-item active">
              <a class="nav-link" href="#"> Dashboard <span class="sr-only">(current)</span></a>
            </li> 

          </ul>
        </div>

      </nav>


                <?php 
                                  require 'connection.php';
                                  //sql to select records from profile table
                                      // $userid=11;
                                         $userid=$_SESSION['user_id'];                        
                                      //sql to select records from profile table
                                      $sql = " select * FROM user where user_id='".$userid."'";
                                      $result = $conn->query($sql);

                                      if($result->num_rows>0)
                                        {
                                           while($row =$result->fetch_assoc())
                                                {

                                                  $userid=$row["user_id"];

                                                   
                      ?>

      <div class="container-fluid ml-4 mb-5">
        <h1 class="mt-4 mr-4">CIC Practicum Monitoring System </h1>
        <p>Welcome <code><?php echo $row["username"]."!"; ?></code>
        </p>
      </div>
      
       <div class="row col-12">
            <div class="col-1"></div>
                <div class="col-10 ">
             
                <div class="card shadow mb-4 " >
                     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                         <h4 class="m-0 font-weight-bold texth5">Profile</h4> 
                             <div class="dropdown no-arrow ">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> Settings
                               </a>
                             
                              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                   <a class="dropdown-item" href="admin/editpass.php?Guserr=<?php echo $userid ?>">Change password</a>
                                  <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="admin/editprofile.php?Guser=<?php echo $userid ?>">Edit Profile</a>
                               </div>
                              </div>
                    </div>
                               <div class="card-body ">
                              <div class="container mt-3">
                         
                              <?php                          
                                                        echo "<span class=righttext>"."Admin Information". "</span>"."<br>".
                                                        "<br>"."<span class=righttext2>"."user Id : "."</span>".$row["user_id"]. "<br>".
                                                        "<span class=righttext2>"."username : "."</span>".$row["username"]. "<br>"
                                                   ;


                                                    
                                                          
                                                }
                                        }else
                                        {
                                          echo "0 results";
                                        }

                                        //Close database connection
                                        $conn->close();




                              ?>
                        </div>
                    </div>
                 </div>
                 </div>
             <div class="col-1"></div>

       </div>
       

<!-- card start -->
  <div class="row col-12">
    <div class="col-1"></div>
     <div class="col-10 ">
          <div class="card shadow mb-4 " >
              <div class="card-header py-3">
                       <h4 class="m-0 font-weight-bold texth5">Admin List</h4>
                 </div>
                  <div class="card-body ">
                       <div class="d-flex justify-content-end flex-row">      
                                          <a href="admin\addadmin.php"><button type="button" class="btn btn-outline-danger mr-4 " > <i class=" fa fa-user-plus"></i> <span>  Add Admin</span> </button></a>
                                    
                      </div>
                             
                     
                            <div class="container mt-3">
                                 <h2 class="">Admin Table</h2>
                                  <p>Type something in the input field to search the table for userid or username :</p>  
                                  <input class="form-control" id="myInputt" type="text" placeholder="Search..">
                                  <br>
                                  <div style="overflow-x:auto;">
                                  <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>User Id</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <!-- <th>Reset Password</th> -->
                                   <!--      <th> Actions</th> -->
                                     
                                      </tr>
                                   </thead>   
                                   <tbody id="myTablee">
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
                                                                  if ($row{"role"}==1) {
                                                                  $adminid=$row["user_id"];
                                                                     echo "<tr>".
                                                                "<td>".$row["user_id"]."</td>".
                                                                "<td>".$row["username"]."</td>".
                                                               "<td>".$row["password"]."</td>".
                                                               "<td>".$row["role"]."</td>".
                                                               // "<td>".$row["reset_password"].
                                                               "</td>"
                                                                  
                                                               
                                          ?>
                                                                <!-- <td><a href="admin/editadmin.php?GetID=<?php echo $adminid ?>" > 
                                                          <button  type="button" class="btn btn-outline-primary" style="font-size:10px; border-style: none;"> Edit 
                                                          <i class="material-icons">mode_edit</i>
                                                        </button></a> </td> -->
                                                        
                                                 <!--          <td><a href="Company/cdel.php?delID=<?php echo $cid ?>">
                                                        <button  type="button" class="btn btn-outline-danger" style="font-size:10px;border-style: none;">Delete 
                                                          <i class="material-icons">delete_forever</i> -->


                                         <?php
                                                               "</tr>"; }
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
