<?php
if(isset($_POST['addproduct'])){
    require "../../inc/connection.php";
    $image=null;
    if(isset($_FILES['images'])){
        $image = uniqid().".png";
        move_uploaded_file($_FILES['images']['tmp_name'], "../../assets/products/".$image);        
    }
    $insert = "insert into products values(null,'".$_POST['sku']."','".$_POST['category_id']."','".$_POST['subcategory_id']."','".$_POST['name']."','".$_POST['description']."','".$_POST['price']."','".$_POST['quantity']."','".$image."','".$_POST['discount']."',null)";
    $conn->query($insert);
    if($conn->affected_rows){
        header("location: ../products.php");
    };
    

}