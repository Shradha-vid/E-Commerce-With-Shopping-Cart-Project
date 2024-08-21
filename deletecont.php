<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Edit User</title>

</head>
<body>
<?php
include("dbConn.php");
$id = $_GET['id'];
$sql = "DELETE from products where id=$id";
$result = $conn->query($sql);
// $row = $result->fetch_assoc();
// ob_start();
if($result)
{
$sql="DELETE from products where id=$id";

$res= mysqli_query($conn, $sql);

if($res){ 
    echo "<script>alert('User Details Removed Successfully');window.location.href='product_display.php';</script>";
}}
ob_end_flush();
?>