<?php
$q = "select * from categories where 1";
$r = $conn->query($q);

?>
<div class="category-container text-center mb-4">
            <h2 class="text-center p-2 mt-2">CATEGORY</h2>
            <div class="row">
                <?php
while($row = $r->fetch_assoc()) {
                ?>

<div class="col category-img">
                    <img src="assets/images/<?= $row['image']?>" class="card-img-top" class="text-center" alt="" style="width: 7rem;">
                    <a href="category.php?cat=<?= $row['id'] ?>"><?= $row['name'] ?></a>
                </div>
                <?php } ?>                

            </div>

        </div>