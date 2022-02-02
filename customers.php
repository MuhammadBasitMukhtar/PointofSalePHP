<?php include "connection.php"; 
$title = "Customers";
?>
 <?php include 'includes/header.php'; ?>
<section id="input-sizing">
  <div class="row match-height">
    <div class="col-md-3 col-sm-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Customer</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <form action="" method="POST" id="delform">
                <input type="hidden" name="delid" value="" id="delid">
                <input type="hidden" name="action" value="delCustomer" />
              </form>
                <form action="" method="POST" id="customerAdd"> 
                    <input type="hidden" value="addCustomer" name="action" id="action" />
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Name</label>
                        <input id="defaultInput" class="form-control" type="text"  name="name" placeholder="Name" required>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Phone</label>
                        <input id="defaultInput" class="form-control" type="tel" name="phone" placeholder="phone"required>
                    </div>      
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Address</label>
                        <input id="defaultInput" class="form-control" type="text"  name="address" placeholder="address" required>
                    </div>      
                    <div class="mb-1">
                        <input id="defaultInput" class="btn btn-success btn-responsive" type="submit" name="submit" value="Add New Customer">
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
                <table class="table table-bordered" id="listCustomers">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Balance</th> 
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