<?php
if(isset($_GET['id'])){
$id = $_GET['id'];
}
else{
    exit;
}
require "inc/connection.php";
$selectQ = "select * from products where id='".$id."' limit 1";
$prod = $conn->query($selectQ);
if($prod->num_rows != 1){ $message = "product not found"; exit;}
$d = $prod->fetch_assoc();
// var_dump($d);
?>
<?php include "inc/header.php"; ?>
<style>
            * {
            box-sizing: border-box;
        }

        .details-card {
            width: 80%;
            margin: auto;
        }


        .description-container {
            position: relative;
            /* height: 900px; */
        }

        .main-description1 {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .main-description h3 {
            font-size: 2rem;
        }

        .add-inputs,
        .add-inputs input {
            float: left;
            margin-right: 10px;
            margin-bottom: 2px;
        }

        .add-inputs button {
            border-radius: 0;
        }

        .add-inputs input {
            height: 48px;
            width: 65px;
            border-radius: 0;
        }


        .product-title {
            font-size: 1.1rem;
            font-weight: bold;
        }

        .product-price {
            font-size: 1.8rem;
        }

        .social-list {
            padding: 0;
            list-style: none;
        }

        .social-list li {
            float: left;
            padding: 6px 8px;
            margin-right: 12px;
        }

        .social-list li a {
            color: black;
            font-size: 2rem;
        }

        .social-list li a i {
            font-size: 2rem;
        }
</style>
</head>

<body>
    <div class="container">
        <!-- navbar begin -->
        <?php include "inc/navbar.php"; ?>
        <!-- navbar end -->
<!-- product start -->
<div class="container my-5">

        <div class="card details-card p-0">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <img class="img-fluid details-img" src="assets/products/<?= $d['images'] ?>" alt="">
                </div>
                <div class="col-md-6 col-sm-12 description-container p-5">
                    <div class="main-description">
                        <p class="product-category mb-0">Category : <?= $d['category_id']?></p>
                        <h3><?= $d['name'] ?></h3>
                        <hr>
                        <p class="product-price"><?= $d['price'] ?></p>
                        <form class="add-inputs" method="post">
                            <input type="number" class="form-control" id="cart_quantity" name="cart_quantity" value="1" min="1" max="10">
                            <button name="add_to_cart" type="submit" class="btn btn-primary btn-lg">Add to cart</button>
                        </form>
                        <form class="add-inputs" method="post">
                            <button name="add_to_cart" type="submit" class="btn btn-primary btn-lg">Add to Wishlist</button>
                        </form>
                        <div style="clear:both"></div>

                        <hr>


                        <p class="product-title mt-4 mb-1">About this product</p>
                        <p class="product-description mb-4">
                        <?= $d['description'] ?>
                        </p>

                        <hr>

                        <p class="product-title mt-4 mb-1">Share this product</p>
                        <ul class="social-list">
                            <li><a href="#"><i class="fa-brands fa-facebook"></a></i></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></a></i></li>
                            <li><a href="#"><i class="fa-brands fa-square-instagram"></a></i></li>

                        </ul>






                    </div>




                </div>
            </div>
            <!-- End row -->
        </div>
<!-- product end -->
        

        <!-- footer start -->
        <?php include "inc/footer.php"; ?>
        <!-- footer end -->
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.3.min.js"></script>
    
</body>

</html>