<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "mypass";
$dbname ="test";
 
 
 
 $domain = $_POST['domain'];
 $yoe = $_POST['yoe'];

 
 $conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);
 
 if($conn->connect_error){
	 die("Connecion failed: " . $conn->connect_error);
 }
 
 $result = $conn->query("select * from doctor where domain='$domain' and yoe>='$yoe'");
 echo "<h3><table><tr><td><b>Name\t</td><td><b>Years of experience\t</td><td><b>Domain\t</td><td><b>Gender\t</td></tr></h3>";
 if($result->num_rows !=0){
	 while($rows = $result->fetch_assoc()){
		 $fname=$rows['name'];
		 $fyoe = $rows['yoe'];
		 $fdomain = $rows['domain'];
		 $fgender = $rows['gender'];
		 echo "<tr><td>$fname</td><td>$fyoe</td><td>$fdomain</td><td>$fgender</td></tr>";
	 }
	 echo "</table>";
	 
 }else{
	 echo "No results";
 }
 
 $conn->close();
 ?>