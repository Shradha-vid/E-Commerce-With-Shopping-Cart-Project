<?php
include("header.php");
require_once("dbConn.php");
?>
<html>

<head>
  <style>

  </style>

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<form action="product_submit.php" method="post" enctype="multipart/form-data">
  <div class="main-panel">

    <div class="content-wrapper">
      <div class="row">

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add New Products: </h4>
              <p class="card-description"> Enter the Products: </p>
              <div class="forms-sample">
                <div class="form-group">
                  <label for="outfit">Name of the product: </label>
                  <input type="text" class="form-control" name="product_name" placeholder="Outfit Name">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1"> Category : </label>
                  <select id="product_categories" name="product_category" class="form-select" required>
                    <?php
                    $sql = "Select * from product_categories";
                    $result = $conn->query($sql);
                    while ($res = mysqli_fetch_row($result)) {
                    ?>
                      <option value="<?php echo $res[0] ?>"><?php echo $res[1] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>


                <div class="form-group">
                  <label for="exampleTextarea1"> Size : </label>
                  <select id="product_sizes" class="form-select product_sizes-multiple" name="product_sizes[]" multiple="multiple">
                    <?php
                    $sql = "Select * from sizes";
                    $result = $conn->query($sql);
                    while ($res = mysqli_fetch_row($result)) {
                    ?>
                      <option value="<?php echo $res[0] ?>"><?php echo $res[1] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword4">Product SKU: </label>
                  <input type="text" class="form-control" name="product_sku" placeholder="SKU of Product ">
                </div>

                <div class="form-group">
                  <label for="exampleTextarea1">Product Description</label>
                  <textarea class="form-control" name="product_description" placeholder="Short description on the costume" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1"> Market Retail Price(MRP) : </label>
                  <input type="number" class="form-control" name="actual_price" placeholder="MRP:" >
                </div>


                <div class="form-group">
                  <label for="exampleTextarea1"> Sales Price : </label>
                  <input type="number"  class="form-control" name="selling_price" placeholder="Sales Price: ">
                </div>

                <div class="form-group">
                  <label for="exampleTextarea1"> Product Images : </label>
                  <input type="file" name="images[]" class="form-control" multiple></td></tr>
                          
                </div>




                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </div>
            </div>
          </div>
        </div>
</form>

<script>
  // document.getElementById('sizeForm').addEventListener('submit', function(event) {
  //     var select = document.getElementById('sizeSelect'); // Get the <select> element
  //     for (var i = 0; i < select.options.length; i++) {
  //         select.options[i].selected = true; // Mark all options as selected
  //     }
  // });
</script>

</html>
<?php
// include("sizes.php");
include("footer.php");
?>