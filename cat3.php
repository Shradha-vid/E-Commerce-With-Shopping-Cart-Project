<?php
    include("header.php");
?>
<html>

<form action="submit3.php" method="post" enctype= multipart/form-data>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<div class="main-panel">

    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Kids Products</h4>
              <p class="card-description">Enter the Kids Outfits</p>
              <div class="forms-sample">
                <div class="form-group">
                  <label for="outfit">Name of the outfit:</label>
                  <input type="text" class="form-control" name="outfit" placeholder="Outfit Name">
                </div>
                <div class="form-group">
                  <label for="material">Material:</label>
                  <input type="text" class="form-control" name="material" placeholder="Material">
                </div>
                  <label for="Desc">Short Description:</label> <!-- Changed the label for Desc -->
                  <textarea class="form-control" name="Desc" placeholder="Short description on the costume" rows="4"></textarea>
                </div>
                <div class="form-group">
                 <label>Outfit image upload 1</label>                           
                <div class="input-group col-xs-12">
                    <span class="input-group-append">
                    <input type="file" name="photo" class="form-control" required multiple></td></tr>
                    </span>
                </div>
                <div class="form-group">
                    <div class="card-body">
                      <h4 class="card-title">Add Sizes</h4>
                        <p class="card-description">SIZES: </p>
                        <div class="input-group mb-3">
                          <select name="sizes" class="form-select">
                            <option value="XS">Extra Small</option>
                            <option value="S">Small</option>
                            <option value="M">Medium</option>
                            <option value="L">Large</option>
                            <option value="XL">Extra Large</option>
                            <option value="XXL">Double XL</option>
                            <option value="XXXL">Triple XL</option>
                            <!-- Add more size options as needed -->
                          </select>
                        <button class="btn btn-outline-secondary" type="button" id="addSize">Add</button>
                      </div>
                    <div id="sizePillbox" class="d-flex flex-wrap"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1"> Market Retail Price(MRP) : </label>
                  <textarea class="form-control" name="mrp" placeholder="Short description on the costume"rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1"> Sales Price : </label>
                  <textarea class="form-control" name="salp" placeholder="Short description on the costume"rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form> <!-- Moved the form closing tag inside the body -->
</body> <!-- Added body closing tag -->
</html>

<?php
    include("footer.php");
?>
