<?php

    include '../View/header.php';

?>



    <!--SECTION 1 HEADER-->
    

    <!--SECTION 2 FORM-->
    <div class="container forms">
        <div class="row d-flex justify-content-center">
            <div id="form" class="col-lg-6 col-md-12 col-sm-12">
                <h1>Sign Up Now !</h1>
                    <form method="post" action="/process/insert.php">
                    

                    <div class="rowTab"> 
                            <div class="labels">
                                <label>* Email :</label>
                            </div>
                            <div class="rightTab">
                                <input type="text" name="mail" class="input-field" required placeholder="JD@gmail.com">
                            </div>     
                        </div>

                        <div class="rowTab">
                            <div class="labels">
                                <label for="username">* Nickname :</label>
                            </div>
                            <div class="rightTab">
                                <input type="text" name="nickname" class="input-field" required placeholder="John Doe">
                            </div>
                        </div>

                        <div class="rowTab"> 
                            <div class="labels">
                               <label>* Password :</label>
                            </div>
                            <div class="rightTab">
                                <input type="password" name="password" class="input-field">
                            </div>        
                        </div>
                        
                        <div class="btn">
                            <input type="submit" id='submit' value='SIGN UP'>
                        </div>
                       
                    </form>
            </div>
        </div>
    </div>


<?php

    include '../View/footer.php';

?>