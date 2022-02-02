<?php include "connection.php"; 
$title = "Products";
?>
 <?php include 'includes/header.php'; ?>
<section id="input-sizing">
  <div class="row match-height">
    <div class="col-md-3 col-sm-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Product</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <form action="" method="POST" id="delform">
                <input type="hidden" name="delid" value="" id="delid">
                <input type="hidden" name="action" value="delProduct" />
              </form>
                <form action="" method="POST" id="productAdd"> 
                    <input type="hidden" value="addProduct" name="action" id="action" />
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Name</label>
                        <input id="defaultInput" class="form-control" type="text"  name="name" placeholder="Name" required>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Cost</label>
                        <input id="defaultInput" class="form-control" type="number" name="cost" placeholder="Cost in Rs." required>
                    </div>      
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Price</label>
                        <input id="defaultInput" class="form-control" type="number"  name="price" placeholder="Price in Rs." required>
                    </div>      
                    <div class="mb-1">
                        <input id="defaultInput" class="btn btn-success btn-responsive" type="submit" name="submit" value="Add Product">
                    </div>
                </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9 col-sm-12 col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-bordered" id="listProducts">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Cost</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Status</th> 
                        <th colspan="1"><center>Action</center></th>
                    </tr>
                    </thead>
                    <tbody>
                         
                  </tbody>
                </table>              
            </div>
          </div>
        </div>
      </div>

                                                                           
  </div>
</section>
<?php include 'includes/footer.php'?>