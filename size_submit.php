<?php
// Include dbConn.php for database connection
require_once("dbConn.php");
if(isset($_POST['size'])){
    $size = $conn->real_escape_string($_POST['size']);
    $sql = "INSERT INTO sizes(size_name) VALUES ('$size')";
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        window.alert("new size created");
        </script>';
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}   
$conn->close(); 
?>
