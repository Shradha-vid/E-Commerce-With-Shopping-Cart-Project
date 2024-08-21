<?php
// Include dbConn.php for database connection
require_once("dbConn.php");
if(isset($_POST['product_id'])&& isset($_POST['image_name'])){
    $product_id = $conn->real_escape_string($_POST['product_id']);
    // $image_name = $conn->real_escape_string($_POST['image_name']);


    $filename = rand('10', '999') . $_FILES["image_name"]["name"];
    $filetype = $_FILES["image_name"]["type"];
    $filepath = "uploads/" . $filename;

    if (move_uploaded_file($filetmp, $filepath)) {
    $sql = "INSERT INTO product_images(product_id,image_name) VALUES ('$product_id','$filepath')";
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        window.alert("new category created");
        </script>';
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}   
}
// echo '<script type="text/javascript">
//     window.location.href = "category.php";
// </script>';
// Close connection
$conn->close();  
?>
