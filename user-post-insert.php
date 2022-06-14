<?php
include('header.php');
$pTitle = $_REQUEST['pTitle'];
$pArticle = $_REQUEST['pArticle'];
$pDate = date('Y-m-d');
$userId = $_SESSION['userId'];
$sql = "SELECT * FROM user WHERE user_id='$userId';";
$result = mysqli_query($dbConn,$sql);
$rws = mysqli_fetch_array($result);
//$userPic = $rws[7];
$sql = "INSERT INTO thread VALUES('','$userId','$pTitle','$pArticle','$pDate','10','0','0');";
 mysqli_query($dbConn,$sql);
 header('Location:user-profile.php');