<?php
include('dbconn.php');
$userEmail = $_REQUEST['userEmail'];
$userPwd = md5($_REQUEST['userPwd']);
$sql = "SELECT * FROM user WHERE user_email='$userEmail' AND user_pwd='$userPwd';";
$result = mysqli_query($dbConn,$sql);
$rws = mysqli_fetch_array($result);
if($userEmail==$rws[3] && $userPwd==$rws[4] && $rws[8]==1){
	$_SESSION['userId'] = $rws[0];
	header ('Location:user-profile.php');
}
else{
    
    	header ('Location:_uname_error.php');

}

