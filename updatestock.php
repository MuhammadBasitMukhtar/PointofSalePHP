<?php include 'connection.php'?>
<?php $title = "Stock Update";?>
<?php include('includes/header.php')?>

<section id="input-sizing">
  <div class="row match-height">
    <div class="col-md-7 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bill</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
                <form action="" method="POST" id="prodform"> 
                
                    <div class="mb-1">
                    <h6 class="invoice-to-title">Invoice To:</h6>
              <div class="invoice-customer">
                <select class="customer form-select" id="customerid" required name="supplierid">
                  <option value="0">Select Customer</option>
                  <option value="shelby">Shelby Company Limited</option>
                  <option value="hunters">Hunters Corp</option>
                </select>
              </div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Items</label>
                        <table class="table table-fixed table-bordered" style="table-layout: fixed">
                            <thead>
                                <tr class="form-label">
                                    <td style="width: 35%; padding:10; text-align: center; vertical-align: middle;">Name</td>
                                    <td style="width: 15%; padding:10; text-align: center; vertical-align: middle;">Price</td>
                                    <td style="width: 25%; padding:10; text-align: center; vertical-align: middle;">Qty</td>
                                    <td style="width: 15%; padding:10; text-align: center; vertical-align: middle;">Total</td> 
                                    <td style="width: 10%; padding:10; text-align: center; vertical-align: middle;"></td>
                                </tr>
                            </thead>
                            <tbody id="cart">

                            </tbody>                    
                            <tbody style="font-size: 1.2rem">
                                <tr>
                                    <td colspan = "2">Subtotal:</td>
                                    <td colspan="3" class="subtotal">0</td>
                                    <input type="hidden" name="subtotal" class="subtotal" value="0.0">
                                </tr>
                                <tr>
                                    <td colspan = "2">Discount</td>
                                    <td class="input-group input-group-md" style="width:201%" colspan="3"><input id="discount" onchange="calcTotal()" type="number" class="form-control" name="discount" value="0"></td>
                                </tr>
                                <tr>
                                    <td colspan = "2">Previous Balance</td>
                                    <td colspan="3" id="previous">0</td>
                                </tr>
                                <tr>
                                    <td colspan = "2">Total Payable</td>
                                    <td colspan="3" class="total">0.0</td>
                                    <input type="hidden" name="total" class="total" value="0.0">
                                </tr>
                                <tr>
                                    <td colspan = "2">Paid</td>
                                    <td colspan="3" class="input-group input-group-md" style="width:201%"><input id="paid" onchange="calcTotal()" type="number" class="form-control" name="received" value="0"></td>
                                </tr>
                                <tr>
                                    <td colspan = "2">Return</td>
                                    <td colspan="3" class="return">0.0</td>
                                    <input type="hidden" name="return" class="return" value="0.0">
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-1">
                        <input type="hidden" name="action" value="purchaseItem">
                        <input id="defaultInput" class="btn btn-success" type="submit" name="submit" value="Sale!">
                    </div>
                </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12">
                <table class="table-responsive table table-bordered productsTable" style="table-layout: fixed">
                    <thead>
                    <tr>
                        <th style="width: 50%">Name</th>
                        
                        <th style="width: 20%">Price</th>
                        <th style="width: 20%">Qty</th>
                        <th style="width: 10%"></th>
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

<!-- Add New Customer Sidebar -->
<div class="modal modal-slide-in fade" id="add-new-customer-sidebar" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
      <div class="modal-content p-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title">
            <span class="align-middle">Add New Supplier</span>
          </h5>
        </div>
        <div class="modal-body flex-grow-1">
          <form action="includes/data_operation.php" method="POST" id="customerAdd">
            <div class="mb-1">
              <label for="customer-name" class="form-label">Supplier Name</label>
              <input type="hidden" name="action" value="addSupplier"/>
              <input type="text" class="form-control" name="name" id="customer-name" placeholder="John Doe" />
            </div>
            <div class="mb-1">
              <label for="customer-email" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" name="phone" placeholder="03001234567" />
            </div>
            <div class="mb-1">
              <label for="customer-address" class="form-label">Customer Address</label>
              <textarea name="address"
                class="form-control"
                id="customer-address"
                cols="2"
                rows="2"
                placeholder="Muhalla Shumali, Chakwal"
              ></textarea>
            </div>
            <div class="mb-1 d-flex flex-wrap mt-2">
              <button type="submit" name="submit" class="btn btn-primary me-1" data-bs-dismiss="modal">Add</button>
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add New Customer Sidebar -->
  <!-- Modal to add new record -->
  <div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-sm">
      <form class="add-new-record modal-content pt-0" id="productAdd" action="">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
        </div>
        <div class="modal-body flex-grow-1">
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">Name</label>
            <input type="hidden" name="action" value="addProduct"/>
            <input
              type="text"
              name="name"
              class="form-control dt-full-name"
              id="basic-icon-default-fullname"
              placeholder="Pepsi 500ml"
              aria-label="John Doe"
            />
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-post">Cost</label>
            <input
              type="number"
              name="cost"
              id="basic-icon-default-post"
              class="form-control dt-post"
              placeholder="50"
              aria-label="Web Developer"
            />
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-email">Price</label>
            <input
              type="text"
              name="price"
              id="basic-icon-default-email"
              class="form-control dt-email"
              placeholder="70"
              aria-label="john.doe@example.com"
            />            
          </div>
          <button type="submit" class="btn btn-primary data-submit me-1">Add</button>
          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>

</section>
<?php include 'includes/footer.php'?>
