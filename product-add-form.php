<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

<body>
    <!-- container start -->
    <div class="container">
        <!-- frame start -->
        <div class="frame p-2">
            <!-- nav start -->
            <div class="nav mt-1">
                <h3 class="title-name">Add Product</h3>
            </div>
            <!-- nav end -->

            <!-- form start -->
            <form action="" method="post">

                <div class="form-group">
                    <label for="Sku" class="form-label">Sku</label>
                    <input type="text" class="form-control" name="Sku" id="Sku" placeholder="Sku">
                </div>

                <div class="form-group">
                    <label for="category_id" class="form-label">Category ID</label>
                    <select id="category_id" name="category_id" class="form-control form-select" aria-label="">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="subcategory_id" class="form-label">Sub Category ID</label>
                    <select id="subcategory_id" name="subcategory_id" class="form-control form-select" aria-label="">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="Sku" placeholder="Name">
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control description" id="description" rows="2"></textarea>
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
                    <button type="submit" id="addproduct" class="btn btn-primary mt-3">Add Product</button>
                </div>

            </form><!-- form end -->
        </div> <!-- frame end -->
    </div><!-- container end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>