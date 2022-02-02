<?php
$title = "Product Details";
include 'includes/connection.php';
include 'includes/header.php';
$id = $_GET['id'];
?>
<div style="display: none" id="prodid"><?php echo $id?></div>
<div class="content-header row">
   <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
         <div class="col-12">
            <h2 class="content-header-title float-start mb-0">Product Details</h2>
            <div class="breadcrumb-wrapper">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="products.php">Products</a>
                  </li>
                  <li class="breadcrumb-item active prodname">Details
                  </li>
               </ol>
            </div>
         </div>
      </div>
   </div>
</div>
<section id="statistics-card">
  
  <!-- Stats Horizontal Card -->
  <div class="row">
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0 currentstock">Loading..</h2>
            <p class="card-text">Current Stock</p>
          </div>
          <div class="avatar bg-light-primary p-50 m-0">
            <div class="avatar-content">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu font-medium-5"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0 totalsold">Loading..</h2>
            <p class="card-text">Total Sold Qty</p>
          </div>
          <div class="avatar bg-light-success p-50 m-0">
            <div class="avatar-content">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server font-medium-5"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0 totalsale">Loading..</h2>
            <p class="card-text">Total Sale</p>
          </div>
          <div class="avatar bg-light-danger p-50 m-0">
            <div class="avatar-content">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity font-medium-5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0 totalprofit">Loading..</h2>
            <p class="card-text">Total Profit</p>
          </div>
          <div class="avatar bg-light-danger p-50 m-0">
            <div class="avatar-content">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity font-medium-5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form id="filterForm">
   <div class="row">
      <div class="col-md-4 mb-1">
         <div class="form-group">
            <label class="form-label" for="fp-human-friendly">From Date</label>
            <input
               type="text"
               id="from-date"
               class="form-control flatpickr-human-friendly"
               placeholder="October 14, 2020"
               />
         </div>
      </div>
      <div class="col-md-4 mb-1">
         <div class="form-group">
            <label class="form-label" for="fp-human-friendly">To Date</label>
            <input
               type="text"
               id="to-date"
               class="form-control flatpickr-human-friendly"
               placeholder="October 14, 2020"
               />
         </div>
      </div>
      <div class="col-md-4 mb-1">
         <div class="form-group">
            <label class="form-label">By Type</label>
            <select class="form-control form-select type">
                <option value="0">Select Type</option>
                <option value="P">Purchases</option>
                <option value="S">Sales</option>
            </select>
         </div>
      </div>
      <div class="col-md-4 mb-1">
         <div class="form-group">
            <label class="form-label" for="fp-human-friendly">By Customer</label>
            <select class="form-control form-select customer">
                <option value="0">Loading..</option>
            </select>
         </div>
      </div>
      <div class="col-md-4 mb-1">
         <div class="form-group">
            <label class="form-label" for="fp-human-friendly">By Supplier</label>
            <select class="form-control form-select supplier">
                <option value="0">Loading..</option>
            </select>
         </div>
      </div>
      <div class="col-md-2 mb-1">
         <div class="form-group">
         <label style="visibility: hidden; display: block">&nbsp;</label>
            <button type="submit" class="btn btn-primary w-100">Filter</button> 
         </div>
      </div>
      <div class="col-md-2 mb-1">
         <div class="form-group">
         <label style="visibility: hidden; display: block">&nbsp;</label>
            <button type="submit" class="btn btn-primary w-100">Clear</button> 
         </div>
      </div>
   </div>
</form>

<div class="row match-height">
      
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12 tableDiv">
            <table class="table table-responsive w-100 productsTable" style="width: 100%">
                    <thead>
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 20%">Amount</th>
                        <th style="width: 35%">Description</th>
                        <th style="width: 25%">Date Created</th>
                        <th style="width: 15%">Type</th>
                    </tr>
                    </thead>
                    <tbody class="transactionsTable"></tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Total Sale</th>
                            <th class="saletotal"></th>
                            <th>Total Expense</th>
                            <th class="expensetotal"></th>
                        </tr>
                    </tfoot>
                </table>              
            </div>
          </div>
        </div>
      </div>                                                                           
  </div>


</section>
<div class="modal fade modal-info text-start" id="info" tabindex="-1" aria-labelledby="myModalLabel130" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel130">View Invoice</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
                <table class="table table-bordered table-responsive">
                    <tbody>
                    <tr>
                        <th>Invoice ID:</th>
                        <td colspan="4" id="invoiceid">1</td>
                    </tr>
                    <tr>
                        <th>To:</th>
                        <td colspan="4" id="to">Muhammad Basit</td>
                    </tr>
                    <tr>
                        <th>Date Created:</th>
                        <td colspan="4" id="datecreated">Muhammad Basit</td>
                    </tr>
                    <tr>
                        <th>Type:</th>
                        <td colspan="4" id="type">Muhammad Basit</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td colspan="4" id="status">Paid</td>
                    </tr>
                    <tr class="bg-primary">
                            <th class="width: 15%">SNo.</th>
                            <th class="width: 30%">Name</th>
                            <th class="width: 20%">Price</th>
                            <th class="width: 15%">Qty</th>
                            <th class="width: 20%">Total</th>
                        </tr>
                    </tbody>
                    <tbody class="itemrows">

                    </tbody>
                    <tbody>
                    <tr>
                        <th colspan="3" style="text-align:right">Subtotal</th>
                        <td colspan="2" id="subtotal">350.00</td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align:right">Discount</th>
                        <td colspan="2" id="discount">0.00</td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align:right">Previous Balance</th>
                        <td colspan="2" id="prev">0.00</td>
                    </tr>
                    <tr>
                        <th colspan="3" style="text-align:right">Total</th>
                        <td colspan="2" id="total">350.00</td>
                    </tr>
                    <tr>
                        <th colspan="3" id="received-text" style="text-align:right">Received</th>
                        <td colspan="2" id="received">350.00</td>
                    </tr>
                    </tbody>
                    
                    
                    
                </table>
            </div>
			<div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary payBtn" data-bs-toggle="modal" data-bs-target="#inlineForm">Pay</button>
                <button type="button" class="btn btn-info" id="generateBill" invoiceid="">Generate Bill</button>
			</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php'?>

