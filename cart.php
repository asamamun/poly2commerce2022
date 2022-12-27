<?php
require "inc/connection.php";
?>
<?php include "inc/header.php"; ?>

</head>

<body>
    <div class="container">
        <!-- navbar begin -->
        <?php include "inc/navbar.php"; ?>
        <!-- navbar end -->
        <main id="cart" style="max-width:960px">
  <div class="back"><a href="index.php">&#11178; shop</a></div>
  <h1>Your Cart</h1>
  <div class="container-fluid">
    <div class="row align-items-start">
      <div id="cartContainer" class="col-12 col-sm-8 items">

      </div>
      <div class="col-12 col-sm-4 p-3 proceed form">
        <div class="row m-0">
          <div class="col-sm-8 p-0">
            <h6>Subtotal</h6>
          </div>
          <div class="col-sm-4 p-0">
            <p id="subtotal"></p>
          </div>
        </div>
        <div class="row m-0">
          <div class="col-sm-8 p-0 ">
            <h6>Tax</h6>
          </div>
          <div class="col-sm-4 p-0">
            <p id="tax"></p>
          </div>
        </div>
        <hr>
        <div class="row mx-0 mb-2">
          <div class="col-sm-8 p-0 d-inline">
            <h5>Total</h5>
          </div>
          <div class="col-sm-4 p-0">
            <p id="total"></p>
          </div>
        </div>
        <a href="#"><button id="btn-checkout" class="shopnow"><span>Checkout</span></button></a>
      </div>
    </div>
  </div>
  </div>
</main>
        

        <!-- footer start -->
        <?php include "inc/footer.php"; ?>
        <!-- footer end -->
    <script>
        $(document).ready(function () {
            const cart = new Cart();
            let subtotal = 0;
            let total =0;
            let tax = 0.05;
            $("#cartLength").html(cart.totalItems());
            //cart.addItem({ name: 'Item 1', price: 10 });
            console.log(cart.items)
            let c = ``;
            cart.items.forEach(e => {
                c += `<div class="cartItem row align-items-start">
          <div class="col-3 mb-2">
            <img class="w-100" src="${e.image}" alt="art image">
          </div>
          <div class="col-3 mb-2">
            <h6 class="">${e.name}</h6>            
          </div>
          <div class="col-2">
            <input type="number" class="form-control" value="1" disabled/>
          </div>
          <div class="col-2">
            <p id="cartItem1Price">${e.price}</p>
          </div>
          <div class="col-2">
            <a class='removeBtn' data-id='${e.id}'><i class="bi bi-trash"></i></a>
          </div>
        </div>
        <hr>`;
        subtotal += Number(e.price);
        
            });
            total = subtotal + subtotal * tax;
            document.getElementById("cartContainer").innerHTML = c;
            $("#subtotal").html(subtotal);
            $("#tax").html(tax);
            $("#total").html(total);

// 
function remove(i){
            cart.removeItem(i);
            location.reload();
        }

        $("#cartContainer").on("click",".removeBtn",function(){
            // alert(5)
            let id = $(this).data('id');
            // alert(id);
            remove(id);
        })
// 

        });

        
    </script>
    
</body>

</html>