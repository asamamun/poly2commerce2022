
    <?php 
    if(isset($_POST['register'])){
        $error = false;
        $message = [];
        require "inc/connection.php";
        $name = $conn->escape_string($_POST['username']);
        $email = $conn->escape_string($_POST['email']);
        $pass1 = $_POST['password'];
        $pass2 = $_POST['repassword'];
        if($pass1 !== $pass2) { $error=true; $message[] = "password mismatched";}
        if($name == "") { $error=true; $message[] = "name required";}
        if($email == "") { $error=true; $message[] = "email required";}
        if(!$error){
            $insertQuery = "INSERT INTO users values(null,'".$name."','".$email."','".password_hash($pass1,PASSWORD_DEFAULT)."','1',null)";
            $conn->query($insertQuery);
            if($conn->affected_rows)
                {
                  header("Location:login.php?m=registration successfull. now you can login");  
                }        
            }
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/authstyle.css">
    <style>
        p{
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head> 

<body>


    
    <div class="container"><!-- container start -->
        <div class="frame" id="frame2"><!-- frame start -->
            <div class="nav"><!-- nav start -->
                <ul class="links">
                    <li class="signin-inactive-2">
                        <a href="login.php" class="btn">Sign Up</a>
                    </li>
                    <li class="signin-active-1">
                        <a href="registration.php" class="btn">Register</a>
                    </li>
                </ul>
            </div><!-- nav end -->
            <form action="" method="post"><!-- form start -->

                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                  </div>

                <div class="form-group">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="Email" placeholder="Enter Your Email" required>
                  </div>

                  <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" required maxlength="8">
                  </div>

                  <div class="form-group">
                    <label for="password" class="form-label">Re-type password</label>
                    <input type="password" class="form-control" name="repassword" id="RT_Password" placeholder="Re-type password" required minlength="8">
                  </div>

                  <div class="form-group" id="Checkbox">
                    <input type="checkbox" class="form-check-input" name="agree" value="yes" id="exampleCheck1" required>
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                        statements in <a href="#" class="term-service">Terms of service</a></label>
                  </div>

                  <div class="d-grid gap-2 col-5 mx-auto">
                    <button type="submit" name="register" class="btn btn-primary">Register</button>
                  </div>

            </form><!-- form end -->

            <p class="loginhere">Have already an account ? <br> 
                <a href="login.php" class="loginhere-link">Login here</a>
            </p>
        </div> <!-- frame end -->
    </div><!-- container end -->
</body>

</html>