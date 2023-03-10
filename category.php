<?php
require "inc/connection.php";
?>
<?php
if(isset($_GET['cat'])){
    $id = $_GET['cat'];
}
else{
    exit;
}
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
    .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
</style>
</head>
<body>
    <div class="container">
<!-- navbar begin -->
<?php include "inc/navbar.php";?>
<!-- navbar end -->
<!-- content start -->
<!-- product start -->
<div class="row">
<?php
$pq = "select products.*,categories.name as catname from products,categories where hot='1' and category_id='".$id."' and products.category_id=categories.id order by products.created_at desc";
$pqr = $conn->query($pq);
$p = "";
$catname = "";
while($row = $pqr->fetch_assoc()){
$catname = $row['catname'];
    $p .= '<div class="card mt-2 col-md-3 d-flex align-items-stretch"><img src="assets/products/'.$row['images'].'" class="card-img-top" alt="..."><div class="card-body"><a href="details.php?id='.$row["id"].'"><h5 class="pname">'.$row['name'].'</h5></a><!--p class="card-text">'.$row['description'].'</p--><p>'.$row['price'].'</p><p><a class="addCartBtn" data-pid="'.$row['id'].'" data-pprice="'.$row['price'].'" href="javascript:void(0)"><i class="bi bi-bag"></i></a></p></div></div>';
}
echo "<h2>Category: ".$catname."</h2>" . $p;
?>
</div>
<!-- product end -->


<!-- content end -->

<!-- footer start -->
<?php include "inc/footer.php"; ?>
<!-- footer end -->
<script>
$(document).ready(function () {
    const cart = new Cart();
    $("#bcart").html(cart.totalItems());
    $(".addCartBtn").click(function(){
        $t = $(this);
       let pid = $t.data("pid");
       let pprice = $t.data("pprice");
       let name = $t.parent().parent().find('.pname').html();
       let img = $t.parent().parent().parent().find('.card-img-top').attr('src');
    //    alert(img)
    //    alert(name);
    //    alert(pid + ": " + pprice);
       cart.addItem({ name: name, price: pprice, id:pid, image:img  });
       $("#cartLength").html(cart.totalItems());
// console.log(cart.totalItems());
alert("Product "+ name + " has been added to cart");
    });
});
    </script>
    </div>
</body>
</html>