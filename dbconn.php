 <?php
session_start();
$dbServer = "localhost"; // Database Server 
$dbUserName = "root"; // Database User Name
$dbPassword = ""; // Database Password
$dbName = "depnity"; // Database which was created
$dbConn = mysqli_connect($dbServer,$dbUserName,$dbPassword,$dbName); // Connecting with the MySQL DB Server