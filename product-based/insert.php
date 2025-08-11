<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] =='POST'){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products (name,price,description) VALUES('$name','$price','$description')";

    if(mysqli_query($conn,$sql)) {
        echo "added success";
    }
    else {
        echo "error: mysqli_error($conn)";
    }
}
?>