<?php
// Include dbConn.php for database connection
require_once("dbConn.php");
if(isset($_POST['product_id'])&& isset($_POST['size_id'])){
    $product_id = $conn->real_escape_string($_POST['product_id']);
    $size_id = $conn->real_escape_string($_POST['size_id']);
    $sql = "INSERT INTO product_sizes(product_id,size_id) VALUES ('$product_id','$size_id')";
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        window.alert("new category created");
        </script>';
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}   
// echo '<script type="text/javascript">
//     window.location.href = "category.php";
// </script>';
// Close connection
$conn->close();  
?>
