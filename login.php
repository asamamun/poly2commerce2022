<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(isset($_POST['login'])){
require "inc/connection.php";
$email  = $_POST['email'];
$pass  = $_POST['password'];
$q = "select * from users where email='$email' limit 1";
$r = $conn->query($q);
if($r->num_rows > 0){
    $rec = $r->fetch_assoc();
    if(password_verify($pass,$rec['password'])){
$_SESSION['userid'] = $rec['id'];
$_SESSION['username'] = $rec['username'];
$_SESSION['loggedin'] = true;
$_SESSION['role'] =$rec['role'];
if($rec['role'] == "1"){
    header("location:index.php");
}
if($rec['role'] == "2"){
    header("location:admin-dashboard/");
}
}
else{
    exit;
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
</head>

<body>
    
    <div class="container"><!-- container start -->
    <h1><?php echo $_GET['m']??""; ?></h1>
        <div class="frame"><!-- frame start -->
            <div class="nav mt-3"><!-- nav start -->
                <ul class="links">
                    <li class="signin-active">
                        <a href="login.php" class="btn">Sign Up</a>
                    </li>
                    <li class="signin-inactive">
                        <a href="registration.php" class="btn">Register</a>
                    </li>
                </ul>
            </div><!-- nav end -->

            <form action="" method="post"><!-- form start -->

                <div class="form-group">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="Email" placeholder="Enter Your Email" required>
                  </div>

                  <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" required>
                  </div>
                  
                  <div class="d-grid gap-2 col-5 mx-auto">
                    <button type="submit" name="login" class="btn btn-primary mt-3">Sign Up</button>
                  </div>

            </form><!-- form end -->
        </div> <!-- frame end -->
    </div><!-- container end -->
</body>

</html>