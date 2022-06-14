<?php
include('dbconn.php');
$userFname = $_REQUEST['fname'];
$userLname = $_REQUEST['lname'];
$userMobile = $_REQUEST['mobile'];
$userEmail = $_REQUEST['email'];
$userPassword = md5($_REQUEST['pwd']); // MD5 encryption is used for password
$userGender = $_REQUEST['gender'];
$userDOB = $_REQUEST['dob'];
//$userPic = "_pic/profile-pic.png";
$sql = "INSERT INTO user VALUES('','$userFname','$userLname','$userEmail','$userPassword','$userGender','$userDOB','1','1')";
mysqli_query($dbConn,$sql);
header('Location:registration-success.php');