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
  
 .maroon {color: maroon;}


</style>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
   <div class="list-group-item-dark border-right " id="sidebar-wrapper" >

      <div class="sidebar-heading"><span style="font-size: 16pt;">CIC PMS </span></div>


      <div class="list-group list-group-flush">
          
        
     
        <a href="index1.php" class="list-group-item list-group-item-action list-group-item-dark ">Dashboard</a>

      <a href="Practicum.php" class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed "  >
          <span>Practicum Records</span>
        </a>

         <a class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed " href="C&S.php" >
          <span>Courses & Sections</span>
        </a>
         
 <a class="list-group-item list-group-item-action list-group-item-dark  nav-link collapsed active" href="Instructor.php">
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
              <a class="nav-link" href="#">Instructor Page <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- top navbar end -->

      <!-- start page content after top navbar -->

      <div class="container-fluid ml-4 mb-5">
        <h1 class="mt-4 ">Instructors' Information </h1>
       <!--  <p>Good Morning <code>Admin!</code></p> -->
      </div>


    
<!-- card start -->
  <div class="row col-12">
    <div class="col-1"></div>
     <div class="col-10">
          <div class="card shadow mb-4 " >
              <div class="card-header py-3">
                       <h4 class="m-0 font-weight-bold maroon">CIC Practicum Instructors</h4>
                 </div>
                  <div class="card-body ">
                            <div class="container mt-3">
                                 <h2>Instructor Table</h2>
                                  <p>Type something in the input field to search the table for fullnames or email :</p>  
                                  <input class="form-control" id="myInputt" type="text" placeholder="Search..">
                                  <br>
                                  <div style="overflow-x:auto;">
                                  <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                       
                                        <th>Fullname</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                     
                                      </tr>
                                   </thead>   
                                   <tbody id="myTablee">
                                        <?php 

                                              require 'connection.php';
                                                                      
                                                    //sql to select records from profile table
                                                    $sql = "SELECT * FROM instructor";
                                                    $result = $conn->query($sql);

                                                      //check if the number of rows in the result set is greater than 0 which means that record(s) exist
                                                    if($result->num_rows>0)
                                                        {
                                                                         //output data of each row
                                                       while($row =$result->fetch_assoc())
                                                                {


                                                                $iid = $row["i_id"];
                                                                if ($row["gender"]=='f') {
                                                                  $igender ="female";
                                                                }else{$igender ="male"; }



                                                                echo "<tr>".
                                                               
                                                               "<td>".$row["fullname"]."</td>".
                                                               "<td>". $igender ."</td>".
                                                               "<td>".$row["email"]."</td>".

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
                              </div>   <!-- overflow -->
                            </div>    <!-- container -->
                        </div>         <!-- cardbody -->
                    </div>       <!-- cardshadow -->
               </div>         <!-- col-10 -->
       <div class="col-1"></div>

</div>


 </div>    <!-- /#page-content-wrapper --> 
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
