<?php
include('dbconn.php');

include('header.php');
$pComment = $_REQUEST['comment'];
$pDate = date('Y-m-d');
$userId = $_SESSION['userId'];
$sql = "SELECT * FROM thread WHERE user_id='$userId';";
$result = mysqli_query($dbConn,$sql);
$rws = mysqli_fetch_array($result);
$post_id = $rws[0];
$user_id = $rws[1];

//$userPic = $rws[7];
$sql = "INSERT INTO comments VALUES('$post_id','$userId','','$pComment');";
 mysqli_query($dbConn,$sql);
 header('Location:user-profile.php');