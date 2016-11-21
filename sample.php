<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "mypass";
$dbname ="test";
 
 $name = $_POST['name'];
 $domain = $_POST['domain'];
 $yoe = $_POST['yoe'];
 $gender = $_POST['gender'];
 
 $conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);
 
 if($conn->connect_error){
	 die("Connecion failed: " . $conn->connect_error);
	 
 }
 
 $sql = "INSERT INTO doctor (name,domain,gender,yoe)
 VALUES ('$name','$domain','$gender','$yoe')";
 
 if ($conn->query($sql) === TRUE) {
	 echo "Thank You!";
 } else {
	 echo "Error: " , $sql . "<br>" . $conn->error;
	 
 }
 
 $conn->close();
 ?>