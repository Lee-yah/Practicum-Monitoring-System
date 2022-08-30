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


<style>
       .row:after       {
                     content: "";
                     clear: both;
                     display: table;
                      }

        * {  box-sizing: border-box;}
      /*  [class*="col-"] {float: left; padding:15px; width: 100%;}*/
  
         .maroon {color: maroon;}

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
              <a class="nav-link" href="#">Courses & Section Page <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- top navbar end -->

      <!-- start page content after top navbar -->

      <div  class="container-fluid col-11 ml-4 mb-5">
        <h1 class="mt-4 ">Courses/ Majors & Sections </h1>
        <!-- <p>Good Morning <code>Admin!</code></p> -->
      </div>

<div class="row col-12">
    <div class="col-1"></div>
     <div class="col-10">
         <div class="card shadow mb-4 " >
                  <div class="card-header py-3">
                       <h4 class="m-0 font-weight-bold maroon">CIC Course-Major & Section</h4>
                 </div>

                 <div class="card-body ">
                            <div class="">
                                  <h2>Course & Section Table</h2>
                                  <p>Type something in the input field to search the table for course & section:</p>  
                                  <input class="form-control" id="myInput" type="text" placeholder="Search..">
                                  <br>
                                  <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>Course</th>
                                        <th>Section</th>
                                        
                                       
                                      </tr>
                                   </thead>   
                                   <tbody id="myTable">
                                
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

                                     
                                            echo "<tr>".
                                            "<td>".$row["course"]." - " . $row["major"]."</td>".
                                            "<td>".$row["section"]."</td>".
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
                 
               </div>  <!-- card body -->
       </div> <!-- card end -->
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
