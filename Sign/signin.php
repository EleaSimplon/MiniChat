<?php

    include '../View/header.php';

?>


    <!--SECTION 1 HEADER-->
    

    <!--SECTION 2 FORM-->

    <!-----*** LOGIN ***----->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div id="form" class="col-lg-6 col-md-12 col-sm-12">
                <form action="../index.php" method="POST" class="login">
                    <h2>Login</h2>
                    
                    <div class="rowTab"> 
                        <div class="labels">
                            <label><b>Nickname*</b></label>
                            <div class="rightTab">
                                <input type="text" class="input-field" placeholder="Your Nickname" name="nickname" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="rowTab">
                        <div class="labels">
                            <label><b>Password*</b></label>
                            <div class="rightTab">
                                <input type="password" class="input-field" placeholder="Your password" name="password" id="myInput" required>  
                            </div>
                                                      
                        </div>
                    </div>
                    
                    <div class="btn">
                        <input type="submit" id='submit' value='LOGIN'>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
  
<?php

include '../View/footer.php';

?>