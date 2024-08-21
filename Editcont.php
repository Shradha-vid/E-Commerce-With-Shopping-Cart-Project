
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Edit User</title>
    <script src="jquery-3.7.1.min.js"></script>

</head>
<body>
<?php
include("dbConn.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id= $_POST['id'];
        $product_name = $_POST['product_name'];
        $product_category = $_POST['product_category'];
        $product_sku = $_POST['product_sku'];
        $product_description = $_POST['product_description'];
        $actual_price = $_POST['actual_price'];
        $selling_price = $_POST['selling_price'];

if(isset($product_name))
    mysqli_query($conn,"UPDATE products SET product_name='$product_name' WHERE id='$id'");
// if(isset($product_category))
//     mysqli_query($conn,"UPDATE products SET product_category='$product_category' WHERE id='$id'");
if(isset($product_sku))	
    mysqli_query($conn,"UPDATE products SET product_sku='$product_sku' WHERE id='$id'");
if(isset($product_description))
    mysqli_query($conn,"UPDATE products SET product_description='$product_description' WHERE id='$id'");
if(isset($actual_price))
    mysqli_query($conn,"UPDATE products SET actual_price='$actual_price' WHERE id='$id'");
    if(isset($selling_price))
    mysqli_query($conn,"UPDATE products SET selling_price='$selling_price' WHERE id='$id'");
}
?>
<script type="text/javascript">
    alert("Profile Updated Sucessfully");
    window.location.href = "product_display.php";
</script>