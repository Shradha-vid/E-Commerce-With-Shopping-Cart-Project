<?php
    include("header.php");
?>
<head>
<style>

</style>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<form action="submit_cat.php" method="post" >
<div class="main-panel">

          <div class="content-wrapper">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add new category: </h4>
                    <p class="card-description">New category: </p>
                    <div class="forms-sample">
                      <div class="form-group" >
                        <label for="outfit">Enter the category: </label>
                        <input type="text" class="form-control" name="category_name" placeholder="Enter the category: ">
                      </div>
                      <button type="submit" class="btn btn-primary me-"2>Submit</button>
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
