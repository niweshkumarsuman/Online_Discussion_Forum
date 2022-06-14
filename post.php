<?php
include('header.php');
if(!isset($_SESSION['userId']))
	header('Location:post_prompt.php');
?>

        <section id="content-wrapper">
                    
                    <!--left-area-->
                    <div id="left-area" class="col">
                        <div id="links">
                            <ul>
                                <li>
                                    <a href="#trend">Topics in trend</a>
                                </li>
                                <li>
                                    <a href="user-profile.php">Post a question</a>
                                </li>
                                <li>
                                    <a href="#post">Donate Us!</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="mid-area" class="col">
                        <div id="title"><h2>Create a Post!</h2> </div>
                        
                        <!-- Threads -->
                        <div class="threads">
                            
                                        <form id="post_form" method="post" action="user-post-insert.php">                                          
                                            <table>
                                               <tr>
                                                <td><input style="width:600px;background-color: #ade8f4; box-shadow: 5px 4px 5px #022B3A; color:#022B3A; border-radius: 5px; border: 1px solid #022B3A; outline: none; height:50px; padding:7px; font-size:34px; margin: auto 40%; font-family:'Rowdies'; text-align:center;" type="text" name="pTitle" placeholder="Title"></td>
                                                <tr>
                                                    <td><textarea style="width:760px; height:550px;box-shadow: 10px 15px 15px #022B3A; padding:15px; resize:none; outline:none; font-size:20px; margin: 10px 30%; font-weight:300; font-family:'Josefin Sans'; text-align:left; border-radius:20px; background-color: #ade8f4; color:#1B1C22;" name="pArticle" placeholder="Write a Post!"></textarea></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><input style="margin:0 74%; outline:none;box-shadow: 3px 3px 5px #F15152; border-radius: 5px; border: 1px solid #2B4162;padding: 6px; outline:none; font-size:22px; background-color:#2B4162; color:#fff;" type="submit" name="submit" value="Submit">
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    
                            
                        </div>
                        
                    </div>
        </section>
    
   