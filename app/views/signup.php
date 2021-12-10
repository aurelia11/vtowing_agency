

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Page</title>
    <!--Style Sheet-->
    <link rel="stylesheet" href="../../css/login.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <header>Sign up</header>
        <form action="../action/authentication.php" method="post">
            <div class="field username">
                <div class="input-area">
                    <input type="text" name= "username" placeholder="Full Name">
                    <i class="icon fas fa-user"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Enter full name</div>
            </div>
            <div class="field contact">
                <div class="input-area">
                    <input type="text" name= "contact" placeholder="Contact Number">
                    <i class="icon fas fa-address-book"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Enter contact number</div>
            </div>
            <div class="field email">
                <div class="input-area">
                    <input type="text" name= "email" placeholder="Email Address">
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Enter email</div>
            </div>
            <div class="field contact">
                <div class="input-area">
                    <input type="text" name= "regnumber" placeholder="Registered Car Number">
                    <i class="icon fas fa-car-alt"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Enter a registered car number</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" name= "password" placeholder="Password">
                    <i class="icon fas fa-unlock-alt"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Enter password</div>
            </div>
            <div class="field confirmpassword">
                <div class="input-area">
                    <input type="password" name= "confirm_password" placeholder="Confirm Password">
                    <i class="icon fas fa-unlock-alt"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Confirm Password</div>
            </div>
            <input type="submit" name="signup_submit" value="Sign up" >

            <div class="sign-txt">Already have an account? <a href="login.php">Login</a></div>

        </form>

    <!--Javascript-->
    <script src="../../js/script.js"></script>
    
</body>
</html>



