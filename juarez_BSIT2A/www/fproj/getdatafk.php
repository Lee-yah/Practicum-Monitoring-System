<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</div >
	


      <div id="main" class="row "> 
		<div class="displayproduct">
      
   <?php 
$servername ="localhost";$username="root"; $password= "";$dbname = "practicumdb";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//Check connection
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
//sql to select records from profile table
$sql = "SELECT course_id,course,major FROM coursetbl";
$result = $conn->query($sql);

//check if the number of rows in the result set is greater than 0 which means that record(s) exist
if($result->num_rows>0)
{
   //output data of each row
   while($row =$result->fetch_assoc())
   {
    echo "id:".$row["course_id"]."- Course: ".$row["course"]." Major: ".$row["major"]."<br>";
   }
}
else
{
	echo "0 results";
}

//Close database connection
$conn->close();

?>










</body>
</html>