<?php
require "inc/admin-auth.php";
require "inc/header.php";
require "../inc/connection.php";
$select = "select id,name from categories where 1";
$allcat = $conn->query($select);
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
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                    </div>

    <!-- container start -->
    <div class="container">
    <button class="btn btn-primary" id="showFormBtn"> + </button>
        <!-- frame start -->
        <div class="frame p-2" id="formContainer">
            
            <!-- nav start -->
            <div class="nav mt-1">
                <h3 class="title-name">Add Product</h3>
            </div>
            <!-- nav end -->

            <!-- form start -->
            <form action="product/add.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="Sku" class="form-label">Sku</label>
                    <input type="text" class="form-control" name="sku" id="Sku" placeholder="Sku">
                </div>

                <div class="form-group">
                    <label for="category_id" class="form-label">Category ID</label>
                    <select id="category_id" name="category_id" class="form-control form-select" aria-label="">
                        <option value="-1">Select</option>
                        <?php
                    while($row = $allcat->fetch_assoc()){
                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                    }
                        ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="subcategory_id" class="form-label">Sub Category ID</label>
                    <select id="subcategory_id" name="subcategory_id" class="form-control form-select" aria-label="">
                        <option value="-1">Select</option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="Sku" placeholder="Name">
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="2"></textarea>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                </div>

                <div class="form-group">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity">
                </div>

                <div class="form-group">
                    <label for="images" class="form-label">Image</label>
                    <input type="file" class="form-control" name="images" id="images">
                </div>

                <div class="form-group">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" class="form-control" name="discount" id="discount" placeholder="discount">
                </div>

                <div class="d-grid gap-2 col-5 mx-auto">
                    <button type="submit" name="addproduct" id="addproduct" class="btn btn-primary mt-3">Add Product</button>
                </div>

            </form><!-- form end -->
        </div> <!-- frame end -->
    </div><!-- container end -->
    <div class="container" id="tableContainer">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Sku</th>
                <th>Category</th>
                <th>SubCategory</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Images</th>
                <th>Discount</th>
                <th>Action</th>
            </tr>
            <tbody>
                <?php
                $s = "select * from products where 1";
                $allp = $conn->query($s);
while($row = $allp->fetch_assoc()){
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['sku']."</td>
    <td>".$row['category_id']."</td>
    <td>".$row['subcategory_id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['description']."</td>
    <td>".$row['price']."</td>
    <td>".$row['quantity']."</td>
    <td><img width='60px' src='../assets/products/".$row['images']."'/></td>
    <td>".$row['discount']."</td>
    <td>Edit | Delete</td>    
</tr>";
}

                ?>
            
            </tbody>

        </table>
    </div>
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
        <script src="js/jquery-3.6.3.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#formContainer").hide();
                $("#showFormBtn").click(function(){
                    $("#formContainer").toggle(200);
                });


                $("#category_id").change(function(){
                    $("#subcategory_id").html("");
                    //alert($(this).val())
                    $.getJSON("ajax/showsubcat.php",{cid:$(this).val()},function(d){
                        console.log(d);
                        if(d.length){
                            showsubcat(d);
                        }
                    })
                });


                function showsubcat(d){
                    let html='<option value="-1">Select</option>';
                    d.forEach(e => {
                        html += '<option value="'+e.id+'">'+e.name+'</option>';
                    });
                    $("#subcategory_id").html(html);
                }
            });
        </script>
    </body>
</html>
