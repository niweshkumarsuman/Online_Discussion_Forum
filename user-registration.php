    <?php
    include('header.php');
    ?>
    <br>
    <section id="sign_up">
            
                <div id="registration" class="container">
                    <div class="row">
                      
                        <div class="col-md-12">
                           
                            <div class="about-item wow zoomIn">
                                <div id="contact-icon" class="about-item-icon">
                                    <i class="fa fa-envelope-square fa-1x"></i><i class="fa fa-phone-square fa-1x"></i><i class="fa fa-user fa-1x"></i>
                                </div>
                                
                                <div id="contact-us-para" class="about-item-desc">
                                  
                                  
                                   <div id="contact" class="col-md-12">
                                      
                                    <h4> | Sign Up </h4>
                                    <div id="call_back_form">
                                        <form method="post" action="user-registration-process.php">
                                           
                                            <table>
                                               <tr>
                                                <td><input type="text" name="fname" placeholder="First Name"></td>
                                                <td><input type="text" name="lname" placeholder="Last Name"></td>
                                                </tr>
                                                <tr>
                                                <td><input type="text" name="mobile" placeholder="Mobile"></td>
                                                <td><input type="email" name="email" placeholder="Email"></td>
                                                </tr>
                                                 <tr>
                                                <td><input type="password" name="pwd" placeholder="Password"></td>
                                                <td><input type="password" name="pwd1" placeholder="Confirm Password"></td>
                                                </tr>
                                                <tr>
                                                <td>Gender </td>
                                                <td><input type="radio" name="gender" value="M" alt="male"> Male
                                                    <input type="radio" name="gender" value="F" alt="female"> Female</td>                                                
                                                </tr>
                                                <tr>
                                                <td>Date of birth </td>
                                                <td><input type="date" placeholder="Address" style="" ></td>                                                
                                                </tr>
                                                <tr>
                                                    <td><input type="submit" name="submit" value="Sign Up"></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                                                            
                                           
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
        </section>