<?php
    include("header.php");
    require_once("dbConn.php");
?>
<html>

<head>
<style>

</style>
<form action="submit1.php" method="post" enctype= multipart/form-data>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<div class="main-panel">

          <div class="content-wrapper">
            <div class="row">

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Ladies Outfits</h4>
                    <p class="card-description"> Enter the Ladies Outfits</p>
                    <div class="forms-sample">
                      <div class="form-group">
                        <label for="outfit">Name of the outfit: </label>
                        <input type="text" class="form-control" name="outfit" placeholder="Outfit Name">
                      </div>
                      <div class="form-group">
                        <label for="material">Material: </label>
                        <input type="text" class="form-control" name="material" placeholder="Material:">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Anticipated occasion: </label>
                        <input type="text" class="form-control" name="occasion" placeholder="Anticipated occasion">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Length of the outfit</label>
                        <input type="text" class="form-control" name="length" placeholder="Length ">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Short Description </label>
                        <textarea class="form-control" name="Desc" placeholder="Short description on the costume"rows="4"></textarea>
                      </div>
                      <div class="form-group">
                            <label>Outfit image upload 1</label>
                            
                            <div class="input-group col-xs-12">
                                <span class="input-group-append">
                                <input type="file" name="photo" class="form-control" required multiple>
                                </span>
                            </div>
                        </div>
                  <div class="form-group">
                    <div class="card-body">
                      <h4 class="card-title">Add Sizes</h4>
                        <p class="card-description">SIZES: </p>
                        <div class="input-group mb-3">
                        
                          <select id="sizeSelect" name="sizes[]"class="form-select" required multiple>    
                          <?php                   
                             $sql= "Select * from sizes";
                             $result = $conn->query($sql);
                             while($res=mysqli_fetch_row($result)){
                              ?>
                              <option value="<?php echo $res[1] ?>"><?php echo $res[1] ?></option>
                            <!-- <option value="S">Small</option>
                            <option value="M">Medium</option>
                            <option value="L">Large</option>
                            <option value="XL">Extra Large</option>
                            <option value="XXL">Double XL</option>
                            <option value="XXXL">Triple XL</option> -->
                            <?php
                            }
                          ?>

                            
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
  </form>

<script>
document.getElementById('sizeForm').addEventListener('submit', function(event) {
    var select = document.getElementById('sizeSelect'); // Get the <select> element
    for (var i = 0; i < select.options.length; i++) {
        select.options[i].selected = true; // Mark all options as selected
    }
});
</script>
</html>
<?php
    // include("sizes.php");
    include("footer.php");
?>
