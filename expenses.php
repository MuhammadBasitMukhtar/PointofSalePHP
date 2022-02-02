<?php include "connection.php"; 
$title = "Expenses";
?>
 <?php include 'includes/header.php'; ?>
<section id="input-sizing">
  <div class="row match-height">
    <div class="col-md-3 col-sm-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Expense</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <form action="" method="POST" id="delform">
                <input type="hidden" name="delid" value="" id="delid">
                <input type="hidden" name="action" value="delExpense" />
              </form>
                <form action="" method="POST" id="expenseAdd"> 
                    <input type="hidden" value="addExpense" name="action" id="action" />
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Details</label>
                        <textarea class="form-control" name="details" required></textarea>
                    </div>      
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Amount</label>
                        <input id="defaultInput" class="form-control" type="text"  name="amount" placeholder="Expense Amount in Rs." required>
                    </div>      
                    <div class="mb-1">
                        <input id="defaultInput" class="btn btn-success btn-responsive" type="submit" name="submit" value="Add Expense">
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
                <table class="table table-bordered" id="listExpenses">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Details</th>
                        <th>Amount</th>
                        <th>Date Added</th> 
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