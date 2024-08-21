<?php
// Include dbConn.php for database connection
require_once("dbConn.php");

// Check if all required fields are set
if(isset($_POST['outfit'], $_POST['material'], $_POST['Desc'], $_POST['mrp'], $_POST['salp'], $_FILES["photo"])) {

    // Escape user inputs for security
    $outfit = $conn->real_escape_string($_POST['outfit']);
    $material = $conn->real_escape_string($_POST['material']);
    $Desc = $conn->real_escape_string($_POST['Desc']);
    $mrp = $conn->real_escape_string($_POST['mrp']);
    $salp = $conn->real_escape_string($_POST['salp']);

    // File upload handling
    $filetmp = $_FILES["photo"]["tmp_name"];
    $filename = uniqid(rand(), true) . '_' . basename($_FILES["photo"]["name"]); // Using uniqid() for unique filenames
    $filetype = $_FILES["photo"]["type"];
    $filepath = "uploads/" . $filename;

    // Move uploaded file to desired location
    if (move_uploaded_file($filetmp, $filepath)) {
        // Prepare SQL statement
        $sql = "INSERT INTO mens_coll (outfit_name, material_type, describe_cost, photo, mrp, salp) VALUES ('$outfit','$material','$Desc','$filepath','$mrp','$salp')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }   
}
    // Redirect to display page
    echo '<script type="text/javascript">
        window.location.href = "gentsdisplay.php";
    </script>';
 


// Close connection
$conn->close(); 
?>
