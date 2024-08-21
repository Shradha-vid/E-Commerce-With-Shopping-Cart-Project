

<!-- <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Sizes</h4>
                    <p class="card-description">SIZES: </p>
                    <div class="input-group mb-3">

                       <select id="sizeSelect" name="sizein" class="form-select">
                        <option value="XS">Extra Small</option>
                        <option value="S">Small</option>
                        <option value="M">Medium</option>
                        <option value="L">Large</option>
                        <option value="XL">Extra Large</option>
                        <option value="XXL">Double XL</option>
                        <option value="XXXL">Triple XL</option>
                        Add more size options as needed
                      </select>
                    <button class="btn btn-outline-secondary" type="button" id="addSize">Add</button>
                  </div>

                  <div id="sizePillbox" class="d-flex flex-wrap"></div> -->
              <!-- </div> -->
                <!-- <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button> 
              </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div> 
  </form>
</html>-->
<?php
    include("header.php");
?>
<head>
<style>

</style>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<form action="size_submit.php" method="post" >
<div class="main-panel">

          <div class="content-wrapper">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add new size: </h4>
                    <p class="card-description">New Size: </p>
                    <div class="forms-sample">
                      <div class="form-group" >
                        <label for="outfit">Enter the size: </label>
                        <input type="text" class="form-control" name="size" placeholder="Enter the Size: ">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                  </div>
                </div>
              </div>
          </div>

          </div>
</div>
</form>
</html>
<?php
    include("footer.php");
?>
