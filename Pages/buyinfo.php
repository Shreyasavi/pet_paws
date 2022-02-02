<?php
$db = mysqli_connect("localhost", "root", "", "pet_store_db");


if($_POST['selectowner'] and $_POST['selectproduct'] and $_POST['quant'] and $_POST['date']){
    $owner_id = $_POST['selectowner'];
    $product_id = $_POST['selectproduct'];
    $employee_id = $_POST['selectemployee'];
    $quantity =$_POST['quant'];
    $date =$_POST['date'];

    $query = "INSERT INTO `buys`(`o_id`, `pr_id`, `date`, `quantity`) VALUES ('$owner_id','$product_id','$date','$quantity')";
    $add = "UPDATE owner SET e_id = $employee_id WHERE o_id = $owner_id";
    mysqli_query($db, $query);
    mysqli_query($db, $add);
    echo '<script language="javascript">';
    echo 'alert("Product added to cart!");';
    echo 'window.location.href="buy.php";';
    echo '</script>';
}

?>
