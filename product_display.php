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
            color: #c61212;
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

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id='jquery-datatable'>";
    echo "<thead><tr><th>Product Number</th><th>Name of the Product</th><th>Product categories</th><th>Product sku</th><th>Product description</th><th>Actual price</th><th>Selling price</th><th>Delete</th><th>Update</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["id"]. "</td><td>". $row["product_name"]. "</td><td>" . $row["product_category"] . "</td><td>".  $row["product_sku"]."</td><td>". $row["product_description"]. "</td><td>". $row["actual_price"]."</td><td>". $row["selling_price"];
        // Uncomment the following lines if you have delete and update functionality
         echo "</td><td><a href='deletecont.php?id=" . $row['id'] ."'>Delete</a></td><td><a href='updatecont.php?id=" . $row['id'] . "'>Update</a></td></tr>";
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