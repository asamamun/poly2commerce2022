<?php
require "inc/admin-auth.php";
require "inc/header.php";
?>
    <style>
        html,
        body * {
            box-sizing: border-box;
        }

        body {
            background: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwcNDQ0NBw0HBwgNBw0HDQcHBw8ICQcNFREWFhURExUYHSggGBolGxUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDQ0NDw0NDisZFRkrNysrKystKysrKy0rKzcrKy0tKysrKysrKy0tKy0tKysrKysrKysrKysrKysrKysrK//AABEIALwBDAMBIgACEQEDEQH/xAAYAAEBAQEBAAAAAAAAAAAAAAABAgAGB//EABYQAQEBAAAAAAAAAAAAAAAAAAABEf/EABkBAQEBAQEBAAAAAAAAAAAAAAIBBgUAA//EABURAQEAAAAAAAAAAAAAAAAAAAAB/9oADAMBAAIRAxEAPwDzxmZtnzZmLzzQsRKGGCKiUoYY0VBONDGInDC0MGlDDGioNONDGkVBpRoYyohRoqCKgnGioIqDTjGNDBOQxUEVBpRoqCKgnI0VBFQacMLESjkWZncZllQQosJjQwThhjQwaUMUIqIcaKgihKNDGhg04YYyoNKNFQRQnGioFQaUjKgioNONCxgnIYqCKiUo0VGMGnGio0I05DDGhg04YWhEpHHkKjuMuxYxDhhjQwaUMVBFDTjKgioJyNDGioNKNFQQwacMVBFRCjKgioJRoqCKgnGioFQacjQxoqCcaKjSEaUaKgioJyNFSNDBpwwxoUKQwscE446KgLuMvDDGiolONDGipBpRoYyhORooRUGlGioIoacZUEVBpRoqCKgnGioIqDSjRUaFKcaKgioJyNFQRUGlIYY0ME4YY0hg04YY0VBONFQQwaUMUIoTkcaYxjusvDIY0VBpRooRUE40VBFRKcaKgioJRoqCKg040VBFQSjRUEUNORoqNIYJRoqBUE5GioIqJThhjQhSkMMaFKchioIqCcaKEVBONFQRUGlGVgihOONioIqO7WXjRUEUJRoqCKg05GVBFQaUaKEVBONFRoRKNFRoYlOGGNDBpQwxjBORoqCKgnGkVGhg05CY0MGlIYqCKg040VBFQTjRUEVINKNFMYNOGERSHHGxUEVHcrLQwwRUQ5GigqDTjKgihKNFQSKgnDDGhEoYWhgnDDGI0o0VBFRDkMMjQwachMaGCUhhjRUGnGioIqCcaKEVBpxoqNDBpSNFRoYJyGFpChyONimhjuMtGioIqCcaKEVBpRoqCKiU4YY0MEoYY0MGnIYY0MEoTGhgnIYY0MGnDDGhgnDDGiolKRoqCKgHGioFRKcaKjSGDSkJgioJyGGNDBpyGFiJyONio0Md1loyoIqDSjRTQwacMMaGCUMLQxKchMaGCcMMaGDSkaKjQyCcMVBFQacjQxoqCcjRUEVBpRoqCKgnI0VBFSDThkLGCUhMaGIcMLQwachhaQicjjoYxjustI0VBFDSjRUaGCcMMaGCUMMYwacMLQjSkMMaGCchioIqJTkZUgioJyNFQRUGlGioIqCcjRUEVBpwwxoYNOQwxoYJQxUEihpyNDGipBpyNDjRSHI42GNDHcZWGGNDBpwwxjEKGGNDBOQxUEMEoTGME5DDI0VBpxooKgnI0VBFQacjSKgioJSNFRoYlORoqNCNOQmRoYJSGKkEVBpyNDGVBpyNIoKg05GihFYJyONhEVHdrKwwxoYNOGGNDBpQqkEMSnDCxg0oYZGME4YoQwacMVBFQacaKgioNKGGCKgnGipAqCcMMYwacMMaGDShioClOGKgioNONFQRUE40UIoSkf/Z) no-repeat center center fixed;
            background-size: cover
        }

        .container {
            width: 100%;
            padding-top: 20px;
            padding-bottom: 100px
        }

        .frame {
            height: 100%;
            width: 600px;
            background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS82mL0lCjn8cUhnzzoE1oYnjPkobX4USGFXw&usqp=CAU) no-repeat center center;
            background-size: cover;
            margin-left: auto;
            margin-right: auto;
            border-top: solid 1px rgba(255, 255, 255, .5);
            border-radius: 5px;
            box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: all .5s ease
        }

        form {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            color: rgba(255, 235, 205, 0.712);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .title-name {
            color: aliceblue;
            margin: 0 auto;
        }
    </style>
    </head>
    <body class="sb-nav-fixed">

    <?php include 'inc/nav.php'; ?>
    <div id="layoutSidenav">
<?php include 'inc/sidenav.php'; ?>
<div id="layoutSidenav_content">
                
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Order</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                    </div>

                    <!-- container start -->
    <div class="container">
        <!-- frame start -->
        <div class="frame p-2">
            <!-- nav start -->
            <div class="nav mt-1">
                <h3 class="title-name">Add Category</h3>
            </div>
            <!-- nav end -->

            <!-- form start -->
            <form action="" method="post">

                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="Sku" placeholder="Name">
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control description" id="description" rows="2"></textarea>
                </div>

                <div class="form-group">
                    <label for="images" class="form-label">Image</label>
                    <input type="file" class="form-control" name="images" id="images">
                </div>

                <div class="d-grid gap-2 col-5 mx-auto">
                    <button type="submit" id="addcategory" class="btn btn-primary mt-3">Add Category</button>
                </div>

            </form><!-- form end -->
        </div> <!-- frame end -->
    </div><!-- container end -->
                </main>


                <!--  -->
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
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
