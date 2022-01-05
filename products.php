<?php include 'includes/header.php'; ?>

<section id="input-sizing">
  <div class="row match-height">
    <div class="col-md-3 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Product</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
                <form>
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Name</label>
                        <input id="defaultInput" class="form-control" type="text" placeholder="Name">
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Cost</label>
                        <input id="defaultInput" class="form-control" type="number" placeholder="Cost">
                    </div>      
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Price</label>
                        <input id="defaultInput" class="form-control" type="number" placeholder="Price">
                    </div>      
                    <div class="mb-1">
                        <input id="defaultInput" class="btn btn-success" type="submit" value="Add New Product">
                    </div>
                </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Product</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Cost</th>
                        <th>Price</th>
                        <th>Available Quantity</th>
                        <th>isActive</th>
                        <th></th>
                    </tr>
                </table>              
            </div>
          </div>
        </div>
      </div>

    
  </div>
</section>

<?php include 'includes/footer.php'?>