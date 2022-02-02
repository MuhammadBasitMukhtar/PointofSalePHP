<?php
$title = "Sales History";
include 'includes/connection.php';
include 'includes/header.php';
?>

<div class="content-header row">
   <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
         <div class="col-12">
            <h2 class="content-header-title float-start mb-0">Sales History</h2>
            <div class="breadcrumb-wrapper">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Sales History
                  </li>
               </ol>
            </div>
         </div>
      </div>
   </div>
</div>
<section id="input-sizing">
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
<div
                class="modal fade text-start"
                id="inlineForm"
                tabindex="-1"
                aria-labelledby="myModalLabel33"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33">Previous Amount Payment</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" id="prevForm">
                      <div class="modal-body">
                        <label>Paid By: </label>
                        <div class="mb-1">
                            <input type="hidden" name="invoiceid" value="" />
                            <input type="hidden" name="cid" value="" />
                            <input type="hidden" name="type" value="" />
                          <input type="text" readonly id="payer" placeholder="Payer Name" class="form-control" />
                        </div>

                        <div class="form-group">
                        <label>Amount To Be Paid: </label>
                        <div class="mb-1">
                          <input type="number" id="payeeAmount" placeholder="Amount" class="form-control" />
                        </div>
                        </div>
                        

                        <label>Amount Received: </label>
                        <div class="mb-1">
                          <input type="number" value="0" id="payeeReceived" placeholder="Amount" class="form-control" />
                        </div>
                        
                        <label>Return: </label>
                        <div class="mb-1">
                          <input type="number" value="0" readonly id="payeeReturn" placeholder="Amount" class="form-control" />
                        </div>
                      </div>
                      <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Pay</button>  
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>


<?php include 'includes/footer.php'?>
