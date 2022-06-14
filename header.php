<?php
include('dbconn.php');
if(isset($_SESSION['userId'])){
$userId = $_SESSION['userId'];
$sql = "SELECT * FROM user WHERE user_id='$userId';";
$result = mysqli_query($dbConn,$sql);
$rws = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DEPNITY! Public forum to resolve your queries</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/IMG_Repository/favicon.gif">
    <!-- google fonts -->
    <link async href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,600;0,700;1,400;1,600;1,700&family=Josefin+Sans:ital,wght@0,300;0,400;0,423;0,500;0,600;0,700;1,300;1,400;1,423;1,500;1,600;1,700&family=Lemonada:wght@400;500;600;700&family=Rowdies&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <!-- style css-->
    <link rel="stylesheet" href="css/style.css">  
    
       
    </head>
        
        
    <body>
        
        <section id="header">
            
            <div id="header-out" class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="header-logo-area" class="header-content">
                            <img id="logo" src="img/IMG_Repository/PHP-Logo.jpg" alt="logo">
                        </div>
                        <div id="header-heading" class="header-content">
                            <h3>Depnity</h3>
                            <h4>Enlightening the world with the power of <span class="emph">DE</span>velopment <span class="emph">P</span>eace and u<span class="emph">NITY</span></h4>
                            <hr style="background-color: #A4A9AD;"><hr style="background-color: #fff;">
                        </div>
                        
                        <div id="login-area">
                           <?php
                            if(!isset($_SESSION['userId'])){
                            ?>
                            
                               <div id="sign up">
                                   
                               </div>
                                
                           <form id="login-form" method="post" action="user-login.php">
                            <h5>Log in/  <a href="user-registration.php" style="font-weight:700; font-size:18px; color:#022B3A;">Sign Up!</a></h5>
                               <table>
                                   <tr>
                                       <td>
                                           <input type="text" name="userEmail" alt="username" placeholder="email" required>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <input type="password" name="userPwd" alt="password" placeholder="Password" required>
                                       </td>
                                   </tr>
                                   <tr>
                                      
                                       
                                       <td>
                                           <input id="sbbtn" type="submit" name="submit" alt="submit" role="button" value="Log in">
                                            <a href="#chng_pwd.php">Forgot password?</a>
                                       </td>
                                       
                                   </tr>
                               </table>
                           </form>
                            <?php
					           }
				            else{
				            ?>
				            <div class="profile_details" style="margin:13% 20% 0 20%;">
                                
				                <h6 style="color: #022B3A; font-weight:700; font-style:italic; font-size:18px;">Welcome <?php echo $rws[1];?>!</h6>
                                <a style="margin:4% 28%;"href="profile-update.php">Profile settings</a>
                                <a style="padding:8px; background-color:#022B3A; margin: 34%; border: none; border-radius:5px; text-decoration:none; color:#fff;" href="logout.php">Log out</a> 
				            </div>
				               
				            <?php
				            }
				            ?> 
                        </div>
                    </div>
                </div>
            </div>            
        </section>
    