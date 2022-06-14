<?php
include('dbconn.php');
$pID = $_REQUEST['thread_id'];
$userId = $_SESSION['userId'];
$pDate = date('Y-m-d');
//$uPic = $_REQUEST['uPic'];
$pComment = $_REQUEST['comment'];
$sql ="INSERT INTO threads VALUES('$pID','$userId','','$pComment');";
mysqli_query($dbConn,$sql);
header("Location:success-comment.php");