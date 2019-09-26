<div class="container">
        <div class="row">
            <div class="col-lg-8 ">
                <h2>Login here </h2>
                <?php //var_dump($_SESSION); ?>
                <form name="sentMessage" id="contactForm" action="auth/login.php" method="POST" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address."
                            name="tbEmail">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Type your password" id="phone" required data-validation-required-message="Please enter your phone number." 
                            name="tbPassword">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default" name="btnLogin">Login</button>
                        </div>
                    </div>
                </form>
               <div>
                 <?php 
                    if(isset($_SESSION['error_message'])) {
                        echo $_SESSION['error_message'];
                        unset($_SESSION['error_message']);
                    } 
                    // session_destroy();
                 ?>
               </div>
            </div>
        </div>
    </div>
