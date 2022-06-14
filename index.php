<?php
include('header.php');
?>    
        <section id="content-wrapper">
                    
                    <!--left-area-->
                    <div id="left-area" class="col" style="padding-bottom: 1585px;">
                        <div id="links">
                            <ul>
                                <li>
                                    <a href="#trend">Topics in trend</a>
                                </li>
                                <li>
                                    <a href="post.php">Create a post</a>
                                </li>
                                <li>
                                    <a href="#post">Donate Us!</a>
                                </li>
                                <li>
                                    <a href="_our_team.php">Organization</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div id="mid-area" class="col">
                        <div id="title"><h2>Feed</h2> </div>
                        
                        <!-- Threads -->
                        
                            
                            <p></p>
                            <?php
                            $sql = "SELECT * FROM thread ORDER BY thread_date;";
                            $result = mysqli_query($dbConn,$sql);
                            while($rws = mysqli_fetch_array($result)){
                            ?>
                            <div class="threads">
                            <h4><?php echo $rws[2];?></h4>
                            <p><?php echo $rws[3];?></p>
                            <div id="reviews"><a href="#agree"><i alt="agree" data-toggle="tooltip" title="Agree!"class="fa fa-check-circle fa-2x"><span class="counter"><?php echo $rws[5];?></span></i></a>
                            <a href="#disagree"><i alt="disagree" data-toggle="tooltip" title="Disagree!"class="fa fa-times-circle fa-2x"><span class="counter"><?php echo $rws[6];?></span></i></a>
                            <a href="#comment"><i alt="comment" data-toggle="tooltip" title="Comment"class="fa fa-comments fa-2x"><span class="counter"><?php echo $rws[6];?></span></i>
                            </a>
                            <hr>
                            <div class="comment-section">
                               
                            
                            </div>
                            <hr>
                            <form id="comment" action="comm.php">
                                <tr>
                                    <td><textarea name="comment" style="height:110px; outline:none; width: 40%; border-top-right-radius:15px; border-bottom-left-radius:15px"></textarea></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="submit" style="border-top-right-radius:15px; border-bottom-left-radius:15px;  background-color:#1F7A8C; box-shadow: 1px 2px red;" value="comment"></td>
                                </tr>
                            </form>
                            </div>
                            <hr style="height:2px; background-color:black;">                              
                            </div>
                            <?php
                            }
                            ?>                            
                            
                            
                            
                        
                    </div>
                    
                    
        </section>
        
    