
<?php
    include("header.php");
?>
 <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.6/css/dataTables.dataTables.min.css">
    <style>
        a {
            text-decoration: none;
        }
    </style>

</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ladies_coll";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id='jquery-datatable'>";
    echo "<thead><tr><th>Product Number</th><th>Name of the Outfit</th><th>Material Type</th><th>Expected Occasion to Wear</th><th>Length</th><th>Description</th><th>Sizes</th><th>Delete</th><th>Update</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["Product_No"]. "</td><td>". $row["outfit_name"]. "</td><td>" . $row["material_type"] . "</td><td>". $row["expect_occasion"] . "</td><td>" . $row["length_cost"]."</td><td>".  $row["describe_cost"]. "</td><td>".$row["sizes"];
        // Uncomment the following lines if you have delete and update functionality
        // echo "</td><td><a href='deletecont.php?id=" . $row['user_id'] ."'>Delete</a></td><td><a href='updateUser.php?id=" . $row['user_id'] . "'>Update</a></td></tr>";
    }

    echo "</tbody></table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<br><br><br>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.0.6/js/dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#jquery-datatable').DataTable();
    });
</script>

</body>
</html>
<?php
    include("footer.php");
?> 

