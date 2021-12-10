
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!--Style Sheet-->
    <link rel="stylesheet" href="../../css/login.css">
    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <!--Header-->
    <!--<-?php require("../includes/header.php");?> --->
    <div class="wrapper">
        <header>Login Form</header>
        <form action="" method="post">
            <div class="field email">               
                <div class="input-area">
                    <input type="text" name= "email" placeholder="Email">
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Enter username</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" name="password" placeholder="Password">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>           
                <div class="error error-txt">Enter password</div>
            </div>
            <div class="pass-txt"><a href="#">Forgot password?</a></div>
            <input type="submit" value="Login">
        </form>
        <div class="sign-txt">Not yet member? <a href="signup.php">Signup now</a></div>
    </div>

  <!--Javascript-->
  <script src="../../js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

</body>
</html>