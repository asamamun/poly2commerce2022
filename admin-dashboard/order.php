<?php
require "inc/admin-auth.php";
require "inc/header.php";
require "../inc/connection.php";
$q = "select * from orders where 1 order by created_at desc";
$r = $conn->query($q);
?>

</head>

<body class="sb-nav-fixed">
<?php include 'inc/nav.php'; ?>
<div id="layoutSidenav">
<?php include 'inc/sidenav.php'; ?>
<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Order Management</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
<!-- order -->
<div id="tableContainer">
    <p> <strong>Legend : </strong>
        <span class="smallbox bg-danger"></span> = Pending , 
        <span class="smallbox bg-primary"></span> = Processing , 
        <span class="smallbox bg-info"></span> = Shipped , 
        <span class="smallbox bg-success"></span> = Complete , 
    </p>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Total</th>
            <th>Discount</th>
            <th>Comment</th>
            <th>Payment</th>
            <th>Transaction ID</th>
            <th>Status</th>
            <th>Products</th>
            <th>Order Time</th>            
            <th>Action</th>
        </tr>
        <tbody>
            <?php
            require "../inc/connection.php";
        $q = "select orders.*, users.username as username from orders,users where orders.user_id=users.id order by orders.created_at desc";
        $allp = $conn->query($q);
        $html = "";
        while($row = $allp->fetch_assoc()){
            $html .="<tr>";
            $html .="<td>".$row['id']."</td>";
            $html .="<td>".$row['username']."</td>";
            $html .="<td>".$row['total']."</td>";
            $html .="<td>".$row['discount']."</td>";
            $html .="<td>".$row['comment']."</td>";
            $html .="<td>".$row['payment']."</td>";
            $html .="<td>".$row['trxid']."</td>";
            $boxcolor = null;
            if($row['status'] == "pe"){$boxcolor = "bg-danger";}
            if($row['status'] == "pr"){$boxcolor = "bg-primary";}
            if($row['status'] == "sh"){$boxcolor = "bg-info";}
            if($row['status'] == "co"){$boxcolor = "bg-success";}
            $html .="<td><span class='smallbox ".$boxcolor."'> </span>".$row['status']."</td>";
            $html .="<td>all products list</td>";
            $html .="<td>".$row['created_at']."</td>";            
            $html .="<td><a title='edit status' target='_blank' href='orderstatus.php?id=".$row['id']."'><i class='bi bi-pencil-square'></i></a> | <a title='order details' target='_blank' href='orderdetails.php?id=".$row['id']."'><i class='bi bi-binoculars'></i></a></td>";
            $html .="</tr>";
        }
        echo $html;
            ?>
        </tbody>
    </table>
</div>

<!-- order end -->
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