<?php include "connection.php"; ?>
 <?php include 'includes/header.php'; ?>
<?php  
if(!isset($_POST['editid']) && isset($_POST['name'])){
    print_r($_POST);
    
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];  

      $insertquery ="INSERT INTO `customers` (`name`, `phone`, `address` ,`balance`)
      VALUES ('$name', '$phone' ,'$address' ,0 )";
      
        $res = mysqli_query($con,$insertquery);
        if($res) {
          echo "<script>alert('data inserted properly');</script>";
        }else {
          echo "<script>alert('data not inserted properly');</script>";
        }
      }

      if(isset($_POST['editid']) && isset($_POST['name'])){
           $phone = $_POST['phone'];
           $address = $_POST['address']; 
            $id =$_POST['editid'];
      $name = $_POST['name'];
            $insertquery ="UPDATE `customers` SET `name`='$name', `phone`='$phone', `address`='$address' where id=".$id;
              $res = mysqli_query($con,$insertquery);
              if($res) {
                echo "<script>alert('data updated properly');</script>";
              }else {
                echo "<script>alert('data not updated properly');</script>";
              }
            }

      if(isset($_POST['delid'])){
      $id=$_POST['delid'];
      $query="DELETE FROM `customers` WHERE id=$id ";
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
                        <input id="defaultInput" class="btn btn-success" type="submit" name="submit" value="Add New Customer">
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
          <h4 class="card-title">List of Customers</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Balance</th> 
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                       $selectquery= "SELECT `id`, `name`, `phone`, `address` , `balance` FROM `customers` WHERE 1";
                       $query = mysqli_query($con,$selectquery);
                       $num = mysqli_num_rows($query);

                       while($res = mysqli_fetch_array($query)){
                          ?>
                           <tr>
                           <td> <?php echo $res['id']; ?></td>
                           <td id="name<?php echo $res['id']; ?>" ><?php echo $res['name']; ?></td>
                           <td id="phone<?php echo $res['id']; ?>" > <?php echo $res['phone']; ?></td>
                           <td id="address<?php echo $res['id']; ?>" > <?php echo $res['address']; ?></td>
                           <td> <?php echo $res['balance']; ?></td> 
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
        var name =$('#name' + id).html();
        var phone =$('#phone'+id).html();
        var address =$('#address'+id).html();
        $("#prodform").append('<input type="hidden" value="'+id+'" name="editid" />');
        $("input[name='name']").val(name);
        $("input[name='phone']").val(phone);
        $("input[name='address']").val(address);
        $("input[name='submit']").val("Edit Customer");
        
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