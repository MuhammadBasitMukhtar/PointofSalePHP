<?php
$title = "History";
include 'includes/connection.php';
include 'includes/header.php';
?>
<div class="content-header row">
   <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
         <div class="col-12">
            <h2 class="content-header-title float-start mb-0">History</h2>
            <div class="breadcrumb-wrapper">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Transactions
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
      <div class="col-md-5 mb-1">
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
      <div class="col-md-5 mb-1">
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
      <div class="col-md-2">
        <div class="d-inline-block">
        <div class="form-group">
            <label class="form-label" for="fp-human-friendly"><span style="visibility: hidden">SBTech</span></label>
            <button type="submit" class="btn btn-primary">Filter</button>    
         </div>
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

<!-- Add New Customer Sidebar -->
  <!-- Modal to add new record -->
  <div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-sm">
      <form class="add-new-record modal-content pt-0" id="productAdd" action="">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title" id="exampleModalLabel">Update Customer Balance</h5>
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

