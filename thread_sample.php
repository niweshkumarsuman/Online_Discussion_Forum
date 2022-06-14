<?php
include('header.php');
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
                                    <a href="#post">Post a question</a>
                                </li>
                                <li>
                                    <a href="#post">Donate Us!</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="mid-area" class="col">
                        <div id="title"><h2>Feed</h2> </div>
                        
                        <!-- Threads -->
                        
                            <div class="threads">
                            <p></p>
                            <?php
                            $sql = "SELECT * FROM thread ORDER BY thread_date;";
                            $result = mysqli_query($dbConn,$sql);
                            while($rws = mysqli_fetch_array($result)){
                            ?>
                            
                            <h4><?php echo $rws[2];?></h4>
                            <p><?php echo $rws[3];?></p>
                            <hr style="height:6px; background-color:black;">  
                            <?php
                            }
                            ?>                            
                            </div>
                        
                       
                    </div>
        </section>
        
        
        
    