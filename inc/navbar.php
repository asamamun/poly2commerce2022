<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="assets/images/logo.svg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="all-products.php">All</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Men</a></li>
            <li><a class="dropdown-item" href="#">Women</a></li>
            <li><a class="dropdown-item" href="#">Kids</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Electronics</a></li>
            <li><a class="dropdown-item" href="#">Laptop</a></li>
            <li><a class="dropdown-item" href="#">Foods</a></li>
          </ul>
        </li>
        <?php if(isset($_SESSION['loggedin'])  && $_SESSION['loggedin'] && $_SESSION['role'] == "2" ) { ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin-dashboard/index.php">Dashboard</a></li>
            <li><a class="dropdown-item" href="admin-dashboard/category.php">Category</a></li>
            <li><a class="dropdown-item" href="admin-dashboard/products.php">Product</a></li>
            <li><a class="dropdown-item" href="admin-dashboard/order.php">Orders</a></li>
          </ul>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a href="cart.php" class="nav-link position-relative">Cart
            <span id="cartLength" class="position-absolute top-5 start-100 translate-middle badge rounded-pill bg-danger">
    </span></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        ?>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <?= $_SESSION['username']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Account</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
 
          </ul>
        </li> 
        <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="registration.php">Registration</a>
        </li>        
       <?php } ?>
      </ul>
    </div>
  </div>
</nav>