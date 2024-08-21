<?php
    include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Edit Product</title>
</head>
<body>
<?php
include("dbConn.php");
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
// $row = $result->fetch_assoc();
if ($result === false) {
    die("Error: " . $conn->error);
}

// Fetch the data if the query was successful
if ($row = $result->fetch_assoc()) {
    // Proceed with processing the fetched data

?>
<form action="Editcont.php" method="post">
    <input type="hidden" value="<?php echo $id ?>" name="id">
    Product name: <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>">
    <!-- <span class="error">* <?php echo $nameErr;?></span> -->
    <br><br>
    Product category:
    <input type="text" name="product_category" value="<?php echo $row['product_category'];?>"disabled>
    <!-- <span class="error">* <?php echo $product_categoryErr;?></span> -->
    <br><br>
    Product sku:
    <input type="text" name="product_sku" value="<?php echo $row['product_sku']; ?>">
    <!-- <span class="error">* <?php echo $passErr;?></span> -->
    <br><br>
    Product description:
    <input type="text" name="product_description" value="<?php echo $row['product_description']; ?>">
    <br><br>
    Actual price:
    <input type="number" name="actual_price" value="<?php echo $row['actual_price']; ?>">
    <br><br>
    Selling price:
    <input type="number" name="selling_price" value="<?php echo $row['selling_price']; ?>">
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
<?php
} else {
    echo "No product found with ID $id.";
}

// Close the database connection
$conn->close();
?>
<?php
    include("footer.php");
?>


