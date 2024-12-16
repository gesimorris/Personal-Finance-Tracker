<!DOCTYPE html>
<html>
    <head>
        <title>Profile Management</title>
        <style> 
            html, body {
                background-color: lightgrey;
                height: 100%;
                margin: 0;
            
            }
            #layout-header {
                background-color: greenyellow;
                text-align: center;
                padding: 10px;
            }
            #layout-header h2 {
                font-family: Arial, sans-serif;
                font-size: 24px;
            }
            #layout-content {
                background-color: lightgrey;
                text-align: center;
                padding: 10px;
            }
            #layout-content h2 {
                font-family: Arial, sans-serif;
                font-size: 20px;
                margin-right: 50px;
            }
            #form-management {
                text-align: left;
                padding: 10px;
                background-color: white;
            }
            #img {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            #modal-signin {
                display: inline-block;
                text-align: left;
                padding: 30px;
            }
            #modal-signin label {
                display: inline-block;
                width: 100px;
            }
            #modal-signup {
                display: none;
                text-align: left;
                padding: 30px;
            }
            #modal-signup label {
                display: inline-block;
                width: 100px;
            }
            #login-submit {
                margin-top: 10px;
            }
            #register {
                margin-top: 10px;
            }
            #register-submit {
                margin-top: 10px;
            }

            #blanket {
                display: block;
                position: absolute;
                top: 0; left: 0;
                width: 100%; height: 100%;
                background-color: LightGrey;
                opacity: 0.5;
                z-index: 998;
            }
        </style>
    </head>
    <body>
        <div id="layout-header">
            <h2>My Money Tracker</h2>
        </div>
        <div id="layout-content">
            <h2>Welcome!</h2>
            <div id="form-management">
            <div class='modal' id='modal-signin'>
            <h3 style='text-align:center'>Log In</h3>
            <img id="img" src="profile.png" alt="profile" style="width: 100px; height: 100px;">
            <form id="login-form" method="get" action="mmt_controller.php">
                <input type="hidden" name="page" value="Profile">
                <input type="hidden" name="command" value="SignIn">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>
                <input type="button" id="login-submit" value="Login">
                <input type="button" id="register" value="Register">
            </form>
            <?php if (!empty($error_message)): ?>
                <div style="color: red; font-weight: bold;">
                <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
            </div>
            <div class='modal' id='modal-signup'>
            <h3 style='text-align:center'>Sign Up</h3>
            <img id="img" src="profile.png" alt="profile" style="width: 100px; height: 100px;">
            <form id="register-form" method="get" action="mmt_controller.php">
                <input type="hidden" name="page" value="Profile">
                <input type="hidden" name="command" value="SignUp">
                <label for="username">Username:</label>
                <input type="text" id="register_username" name="username" required><br>
                <label for="password">Password:</label>
                <input type="password" id="register_password" name="password" required><br>
                <input type="button" id="register-submit" value="Register">
            </form>
            <?php if (!empty($error_message)): ?>
                <div style="color: red; font-weight: bold;">
                <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
            </div>
            </div>
        </div>
    </body>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script>
        // Display the register form
        document.getElementById("register").addEventListener("click", function(){
            document.getElementById('modal-signin').style.display = 'none';
            show_signup_modal_window();
        });

        document.getElementById("login-submit").addEventListener("click", function(){
            document.getElementById("login-form").submit();
        });

        document.getElementById("register-submit").addEventListener("click", function(){
            document.getElementById("register-form").submit();
        });

        function show_signin_modal_window() {
            document.getElementById('modal-signin').style.display = 'block';
        }
        function show_signup_modal_window() {
            document.getElementById('modal-signup').style.display = 'block';
        }

        <?php
            if ($display_modal_window == 'none') {       // Do nothing if modal window is not to be displayed
                // Do nothing
            } else if($display_modal_window == 'signin') {
                echo "show_signin_modal_window();";    // Display the sign in modal window
            } else if ($display_modal_window == 'signup') {
                echo "show_signup_modal_window();";    // Display the sign up modal window
            }
            ?>
    </script>
</html>