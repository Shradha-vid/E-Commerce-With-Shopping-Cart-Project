<?php
// Include dbConn.php for database connection
require_once("dbConn.php");
if(isset($_POST['product_name']) && isset($_POST['product_category'])  && isset($_POST['selling_price'])) {

    $product_name = $conn->real_escape_string($_POST['product_name']);
    $product_category = $conn->real_escape_string($_POST['product_category']);
    $product_sku = $conn->real_escape_string($_POST['product_sku']);
    $product_description = $conn->real_escape_string($_POST['product_description']);
    $actual_price = $conn->real_escape_string($_POST['actual_price']);
    $selling_price = $conn->real_escape_string($_POST['selling_price']);
    $product_sizes = $_POST['product_sizes'];
    $product_images = $_FILES['images'];

    $sql = "INSERT INTO products(product_name, product_category, product_sku, product_description, actual_price, selling_price) VALUES ('$product_name', '$product_category', '$product_sku', '$product_description', '$actual_price', '$selling_price')";
           
           if ($conn->query($sql) === TRUE) {
            $last_id = mysqli_insert_id($conn);
            if($last_id && $product_sizes){
                foreach($product_sizes as $size){
                    $sql = "INSERT INTO product_sizes(product_id, size_id) VALUES ('$last_id','$size')";
                    $conn->query($sql);
                }
                
            }

            if($last_id && $product_images){
                    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                        $image_name = $_FILES['images']['name'][$key];
                        $image_size = $_FILES['images']['size'][$key];
                        $image_type = $_FILES['images']['type'][$key];
                        $image_tmp_name = $_FILES['images']['tmp_name'][$key];
                        
                    
                        $upload_dir = "uploads/product_images/";
                        $target_path = $upload_dir . basename($image_name);
                        if (move_uploaded_file($image_tmp_name, $target_path)) {
                          $sql = "INSERT INTO product_images(product_id, image_name) VALUES ('$last_id','$target_path')";
                          $conn->query($sql);
                        } 
                    }
                   
                     
                }
                
     
            



               echo "New record created successfully";
           } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
           }
       //}   
}

// echo '<script type="text/javascript">
//     window.location.href = "displayladies.php";
// </script>';
// Close connection
$conn->close(); 
?>
