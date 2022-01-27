<?php include "connection.php"; 
$title = "Expenses";
?>
 <?php include 'includes/header.php'; ?>
<?php  
if(!isset($_POST['editid']) && isset($_POST['amount'])){
     
      $details = $_POST['details'];
      $amount = $_POST['amount'];
      
      $insertquery ="INSERT INTO `expenses` (`details`, `amount`,`isDeleted`)
      VALUES ('$details', $amount ,0 )";
      
        $res = mysqli_query($con,$insertquery);
        if($res) {
          $id = mysqli_insert_id($con);
          $query = "INSERT INTO `transactions`(`amount`, `expenseid`, `description`, `isdebit`) 
          VALUES ($amount,$id,'Expense Debited',1)";
          $ans = mysqli_query($con,$query);
          echo "<script>alert('data inserted properly');</script>";
        }else {
          echo "<script>alert('data not inserted properly');</script>";
        }
      }

      if(isset($_POST['editid']) && isset($_POST['amount'])){
           $details = $_POST['details'];
           $amount = $_POST['amount']; 
            $id =$_POST['editid'];
       
            $insertquery ="UPDATE `expenses` SET `details`='$details', `amount`='$amount' where id=".$id;
              $res = mysqli_query($con,$insertquery);
              if($res) {
                echo "<script>alert('data updated properly');</script>";
              }else {
                echo "<script>alert('data not updated properly');</script>";
              }
            }

      if(isset($_POST['delid'])){
      $id=$_POST['delid'];
      $query ="UPDATE `expenses` SET `isDeleted`=1 where id=".$id;
       $res = mysqli_query($con,$query);
        if($res) {
          echo "<script>alert('data  deleted properly');</script>";
        }else {
          echo "<script>alert('data not  deleted properly');</script>";
        }
      }
   
 ?>




<section id="input-sizing">
  <div class="row match-height">
    <div class="col-md-3 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Customer</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <form action="" method="POST" id="delform">
                <input type="hidden" name="delid" value="" id="delid">
              </form>
                <form action="" method="POST" id="prodform"> 
               
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Details</label>
                        <input id="defaultInput" class="form-control" type="text"  name="details" placeholder="details" required>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="defaultInput">Amount</label>
                        <input id="defaultInput" class="form-control" type="number" name="amount" placeholder="amount"required>
                    </div>      
                      <div class="mb-1">
                        <input id="defaultInput" class="btn btn-success" type="submit" name="submit" value="Add New Expense">
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
          <h4 class="card-title">List of Expenses</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Details</th>
                        <th>Amount</th>
                        <th>Datecreated</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                       $selectquery= "SELECT  *  FROM `expenses` WHERE isDeleted = 0";
                       $query = mysqli_query($con,$selectquery);
                       
                       while($res = mysqli_fetch_array($query)){
                          ?>
                           <tr>
                           <td> <?php echo $res['id']; ?></td>
                           <td id="details<?php echo $res['id']; ?>" ><?php echo $res['details']; ?></td>
                           <td id="amount<?php echo $res['id']; ?>" > <?php echo $res['amount']; ?></td>
                           <td id="date<?php echo $res['id']; ?>" > <?php echo $res['datecreated']; ?></td>
                           <td> <a href="#" data-toggle="tooltip" onclick="editprod(<?php echo $res['id']; ?>)" data-placement="top" title="Update!">
                             <i data-feather="edit" aria-hidden="true"></i> </a> </td>
                           <td><a href="#" data-toggle="tooltip" onclick="delprod(<?php echo $res['id']; ?>) " data-placement="top" title="Delete!">
                             <i data-feather="trash-2" aria-hidden="true"></i> </a></td> 
                          </tr>

                        <?php
                       } 
                       ?>     
                  </tbody>
                </table>              
            </div>
          </div>
        </div>
      </div>

                                                                           
  </div>
</section>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script> 
      function editprod(id){
        nameid = "#name"+id;
        var details =$('#details' + id).html();
        var amount =parseInt($('#amount'+id).html()); 
        $("#prodform").append('<input type="hidden" value="'+id+'" name="editid" />');
        $("input[name='details']").val(details);
        $("input[name='amount']").val(amount);
        $("input[name='submit']").val("Edit Expense");
        
      }
      function delprod(id){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
            $("#delid").val(id);
           $("#delform").submit();
  }
})
      }
      
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<?php include 'includes/footer.php'?>