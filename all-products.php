<?php
require "inc/connection.php";
$s = "select * from products where 1 order by created_at desc";
$r = $conn->query($s);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page: polycommerce</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
    <div class="container">
<!-- navbar begin -->
<?php include "inc/navbar.php";?>
<!-- navbar end -->
<!-- content start -->
<h1>You have to write code here to show the products</h1>
<?php
while($row = $r->fetch_assoc()){
    echo "<h1>".$row['name']."</h1>";
    echo "<p>".$row['description']."</p>";
    echo "<p>".$row['price']."</p>";
    echo "<hr>";
}
?>
<!-- content end -->

<!-- footer start -->
<?php include "inc/footer.php"; ?>
<!-- footer end -->
    </div>
    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>


</body>
</html>