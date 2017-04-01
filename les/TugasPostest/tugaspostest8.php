<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "prayogo";
// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection 
if (!$conn) { 
die("Connection failed: " . mysqli_connect_error()); 
} 
echo "Connected successfully"; 

//Create database 
//$sql = "CREATE DATABASE prayogo"; 
//if (mysqli_query($conn, $sql)) { 
//echo "Database created successfully"; 
//} else { 
//echo "Error creating database: " . mysqli_error($conn); 
//} 

//sql to create table 
//$sql = "CREATE TABLE molet( 
//nim INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//nama VARCHAR(50) NOT NULL )"; 
//if (mysqli_query($conn, $sql)) { 
//echo "Table MyGuests created successfully"; 
//} else { 
//echo "Error creating table: " . mysqli_error($conn); 
//} 
 
$sql = "INSERT INTO molet(nim, nama) 
VALUES ('1515015073','Prayogo Nugroho Molet')"; 
if (mysqli_query($conn, $sql)) { 
 echo "New record created successfully"; 
} else { 
echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
}
 mysqli_close($conn); 
?>

