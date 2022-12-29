<?php
require "inc/connection.php";
$selectQ = "select * from products where hot='1' order by created_at desc limit 20";
$hotitems = $conn->query($selectQ);
?>
<?php include "inc/header.php"; ?>
</head>

<body>
    <div class="container">
        <!-- navbar begin -->
        <?php include "inc/navbar.php"; ?>
        <!-- navbar end -->

        <!-- carousel begin -->
        <?php include "inc/carousel.php"; ?>
        <!-- carousel end -->

        <!-- owl carousel start -->
        <?php include "inc/owl-carousel.php"; ?>
        <!-- owl carousel end -->

        <!-- category start -->
        <?php include "inc/category.php"; ?>
        <!-- category end -->

        <!-- footer start -->
        <?php include "inc/footer.php"; ?>
        <!-- footer end -->

    
</body>

</html>