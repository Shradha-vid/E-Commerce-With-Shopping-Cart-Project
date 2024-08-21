<?php
// Include dbConn.php for database connection
require_once("dbConn.php");
if(isset($_POST['category_name'])){
    $category_name = $conn->real_escape_string($_POST['category_name']);
    $sql = "INSERT INTO product_categories(category_name) VALUES ('$category_name')";
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        window.alert("new category created");
        </script>';
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}   
echo '<script type="text/javascript">
    window.location.href = "category.php";
</script>';
// Close connection
$conn->close();  
?>
