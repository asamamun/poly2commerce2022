<?php
require "../inc/connection.php";
if(isset($_POST['update'])){
    $newstat = $_POST['status'];
    $iiiid = $_POST['id'];
    $uq = "update orders set status='".$newstat."' where id='".$iiiid."' ";
    $conn->query($uq);
    $message= "Status updated";
    header("location: order.php");
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "select * from orders where id='".$id."' limit 1";
    $r = $conn->query($q);
    $rr =$r->fetch_assoc();
}
else{
    exit;
}
?>
<?php require "inc/header.php"; ?>
    </head>
    <body class="sb-nav-fixed">
<?php require "inc/nav.php"; ?>
        <div id="layoutSidenav">
<?php require "inc/sidenav.php";?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Order Status</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Orders status management:<?= $message??"";?></li>
                        </ol>
<div id="tableContainer">
    <form action="orderstatus.php?id=<?= $id ?>" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
    Order Status : <select name="status" id="status" required>
        <option value="pe" <?= $rr['status']=="pe"?"selected":""; ?>>Pending</option>
        <option value="pr" <?= $rr['status']=="pr"?"selected":""; ?>>Procesing</option>
        <option value="sh" <?= $rr['status']=="sh"?"selected":""; ?>>Shipped</option>
        <option value="co" <?= $rr['status']=="co"?"selected":""; ?>>Complete</option>
    </select>
    <hr>
    <input type="submit" name="update" value="Update Status">
    </form>
    
</div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
