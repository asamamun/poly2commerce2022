<div class="container">
    <div>
        <h2 class="text-center p-2 mt-4">LATEST ITEM</h2>
    </div>
    <div class="owl-carousel">
<?php
$items = "";
while($row = $hotitems->fetch_assoc()){
$items .= '<div class="card">
<img src="assets/products/'.$row['images'].'" class="card-img-top img-fluid" alt="...">
<div class="card-body">
    <p class="card-text"><b class="pname">'.$row['name'].'</b> <br><span class="pprice"> '.$row['price'].' </span>Tk only</p>
    <a href="details.php?id='.$row['id'].'" class="btn btn-primary">Deteils</a>
    <a href="javascript:void(0)" class="addToCart btn btn-outline-info" data-id="'.$row['id'].'"><i class="bi bi-bag"></i></a>
</div>
</div>';
}
echo $items;
?>


<!--         <div class="card">
            <img src="assets/images/ol-img-2.jpeg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Red T-Shirts</b> <br> 699 Tk only</p>
                <a href="#" class="btn btn-primary">Deteils</a>
            </div>
        </div>
        <div class="card">
            <img src="assets/images/ol-img-3.jpeg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Dress</b> <br> 770 Tk only</p>
                <a href="#" class="btn btn-primary">Deteils</a>
            </div>
        </div>
        <div class="card">
            <img src="assets/images/ol-img-4.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Baby shut combo</b> <br> 970 Tk only</p>
                <a href="#" class="btn btn-primary">Deteils</a>
            </div>
        </div>
        <div class="card">
            <img src="assets/images/ol-img-5.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Baby dress</b> <br> 360 Tk only</p>
                <a href="#" class="btn btn-primary">Deteils</a>
            </div>
        </div>
        <div class="card">
            <img src="assets/images/ol-img-6.jpeg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Men combo</b> <br> 1270 Tk only</p>
                <a href="#" class="btn btn-primary">Deteils</a>
            </div>
        </div> -->
    </div>
</div>