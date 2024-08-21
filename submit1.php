<?php
// Include dbConn.php for database connection
require_once("dbConn.php");

if(isset($_POST['outfit']) && isset($_POST['material']) && isset($_POST['occasion']) && isset($_POST['length']) && isset($_POST['Desc'])) {

    $outfit = $conn->real_escape_string($_POST['outfit']);
    $material = $conn->real_escape_string($_POST['material']);
    $occasion = $conn->real_escape_string($_POST['occasion']);
    $length = $conn->real_escape_string($_POST['length']);
    $Desc = $conn->real_escape_string($_POST['Desc']);
    $mrp = $conn->real_escape_string($_POST['mrp']);
    $salp = $conn->real_escape_string($_POST['salp']);
   
    $filename = rand('10', '999') . $_FILES["photo"]["name"];
    $filetype = $_FILES["photo"]["type"];
    $filepath = "uploads/" . $filename;

    

       if (move_uploaded_file($filetmp, $filepath)) {
        // Prepare SQL statement
        $sql = "INSERT INTO ladies_coll (outfit_name, material_type, expect_occasion, length_cost, describe_cost, photo, sizes, mrp, salp) VALUES ('$outfit', '$material', '$occasion', '$length', '$Desc', '$filepath', '$var', '$mrp', '$salp')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }   
}

echo '<script type="text/javascript">
    window.location.href = "displayladies.php";
</script>';
// Close connection
$conn->close(); 
?>
