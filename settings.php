<?php
$title = "Settings";
include 'includes/connection.php';
include 'includes/header.php';
?>
<div class="content-header row">
   <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
         <div class="col-12">
            <h2 class="content-header-title float-start mb-0">Profile Settings</h2>
            <div class="breadcrumb-wrapper">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Settings
                  </li>
               </ol>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="app-user-view-connections">
  <div class="row match-height">
    <!-- User Sidebar -->
    <div class="col-xl-12 col-lg-12 col-md-12 order-0 order-md-1">

 <!-- User Pills -->
 <ul class="nav nav-pills mb-2">
        <li class="nav-item">
          <button class="nav-link active" href="#" id="btnProfile">
            <i data-feather="lock" class="font-medium-3 me-50"></i>
            <span class="fw-bold">Profile</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" href="#" id="btnShop">
            <i data-feather="bookmark" class="font-medium-3 me-50"></i>
            <span class="fw-bold">Shop Details</span>
          </button>
        </li>
        
      </ul>
      <!--/ User Pills -->

    <div class="card profilecard">
        <h4 class="card-header">Update Profile</h4>
        <div class="card-body">
          <form id="formProfile" method="POST">
            <div class="row">
              <div class="form-group col-md-12 mb-2">
                    <label class="form-label" for="defaultInput">Name</label>
                    <input type="hidden" value="updateProfile" name="action"/>
                    <input type="hidden" value="0" name="updatePass"/>
                    <input id="defaultInput" class="form-control" type="text"  name="name" placeholder="Name" required>
              </div>
              <div class="form-group col-md-12 mb-2">
                    <label class="form-label" for="defaultInput">Username</label>
                    <input id="defaultInput" class="form-control" type="text"  name="username" placeholder="Name" required>
              </div>  
              
              <div class="mb-2 col-md-12 form-password-toggle">
                <label class="" for="newPassword">Old Password</label>
                <div class="input-group input-group-merge form-password-toggle">
                  <input
                    class="form-control"
                    type="password"
                    id="newPassword"
                    name="oldPassword"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  />
                  <span class="input-group-text cursor-pointer">
                    <i data-feather="eye"></i>
                  </span>
                </div>
              </div>

              <div class="mb-2 col-md-12 form-password-toggle">
                <label class="" for="newPassword">New Password</label>
                <div class="input-group input-group-merge form-password-toggle">
                  <input
                    class="form-control"
                    type="password"
                    id="newPassword"
                    name="newPassword"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  />
                  <span class="input-group-text cursor-pointer">
                    <i data-feather="eye"></i>
                  </span>
                </div>
              </div>

              <div class="mb-2 col-md-12 form-password-toggle">
                <label class="" for="confirmPassword">Confirm New Password</label>
                <div class="input-group input-group-merge">
                  <input
                    class="form-control"
                    type="password"
                    name="confirmPassword"
                    id="confirmPassword"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  />
                  <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                </div>
              </div>
              <div>
                <button type="submit" class="btn btn-primary me-2">Update Profile</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card shopcard" style="display: none">
        <h4 class="card-header">Update Shop Info</h4>
        <div class="card-body">
          <form id="formShop" method="POST">
            <div class="row">
              <div class="form-group col-md-12 mb-2">
                    <label class="form-label" for="defaultInput">Name</label>
                    <input type="hidden" value="updateShop" name="action"/>
                    
                    <input id="defaultInput" class="form-control" type="text"  name="shopname" placeholder="Name" required>
              </div>
              <div class="form-group col-md-12 mb-2">
                    <label class="form-label" for="defaultInput">Top Message</label>
                    <input id="defaultInput" class="form-control" type="text"  name="slogan" placeholder="Name" required>
              </div>
              <div class="form-group col-md-12 mb-2">
                    <label class="form-label" for="defaultInput">Address</label>
                    <input id="defaultInput" class="form-control" type="text"  name="address" placeholder="Name" required>
              </div> 
              <div class="form-group col-md-12 mb-2">
                    <label class="form-label" for="defaultInput">Phone Number</label>
                    <input id="defaultInput" class="form-control" type="text"  name="contact" placeholder="Name" required>
              </div>   
              <div class="form-group col-md-12 mb-2">
                    <label class="form-label" for="defaultInput">End Message Sale</label>
                    <input id="defaultInput" class="form-control" type="text"  name="message" placeholder="Name" required>
              </div>
              <div class="form-group col-md-12 mb-2">
                    <label class="form-label" for="defaultInput">End Message Purchase</label>
                    <input id="defaultInput" class="form-control" type="text"  name="messagepurchase" placeholder="Name" required>
              </div>    
              <div>
                <button type="submit" class="btn btn-primary me-2">Update Info</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

</section>
<?php include 'includes/footer.php'?>
