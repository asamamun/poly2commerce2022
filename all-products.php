<?php
require "inc/connection.php";
$s = "select * from products where 1 order by created_at desc";
$r = $conn->query($s);
?>
<?php require "inc/header.php"; ?>
</head>
<body>
    <div class="container">
<!-- navbar begin -->
<?php include "inc/navbar.php";?>
<!-- navbar end -->
<!-- content start -->
<div class="row">
<?php
$html = "";
while($row = $r->fetch_assoc()){
$html .= '<div class="card col-md-3">
<img src="assets/products/'.$row['images'].'" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">'.$row['name'].'</h5>
  <p class="card-text">'.$row['description'].'</p>
  <p>Tk '.$row['price'].'</p>
  <a title="details" href="details.php?id='.$row['id'].'" class="btn btn-primary"><i class="bi bi-pc-display-horizontal"></i></a> <a title="add to cart" href="javascript:void(0)" class="addToCart btn btn-outline-info" data-id="'.$row['id'].'"><i class="bi bi-bag"></i></a>
</div>
</div>';
}
echo $html;
?>
</div>
<!-- content end -->

<!-- footer start -->
<?php include "inc/footer.php"; ?>
<!-- footer end -->
    </div>
</body>
</html>