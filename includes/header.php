<?php 
session_start();
if(!isset($_SESSION['name']))
{
  header("location: login.php");
}
$query = "Select name from profile where id = 1";
$res = mysqli_query($con,$query);
$name = mysqli_fetch_assoc($res);

?>
<!DOCTYPE html> 
<html class="dark-layout loaded" lang="en" data-layout="dark-layout" data-textdirection="ltr" style="--vh:6px;"><!-- BEGIN: Head--><!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 06:35:02 GMT --><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title><?php echo $title ?> - <?php echo $name['name'];?></title>
    <link rel="apple-touch-icon" href="images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->
    
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/css/forms/select/select2.min.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="css/components.min.css">
    <link rel="stylesheet" type="text/css" href="css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="css/themes/semi-dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="css/core/menu/menu-types/horizontal-menu.min.css">
    <!-- BEGIN: Page CSS-->
    <?php
      if($title == "Index")
      {
        echo '
        <link rel="stylesheet" type="text/css" href="css/pages/dashboard-ecommerce.min.css">
        <link rel="stylesheet" type="text/css" href="css/plugins/charts/chart-apex.min.css">
        <link rel="stylesheet" type="text/css" href="css/plugins/extensions/ext-component-toastr.min.css">';
      }
      else if($title == "POS" || $title == "History" || $title == "Expenses" || $title == "Sales History" || $title == "Product Details")
      {
        echo '<!-- BEGIN: Vendor CSS-->
        
        <link rel="stylesheet" type="text/css" href="vendors/css/pickers/pickadate/pickadate.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/pickers/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/tables/datatable/responsive.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/tables/datatable/buttons.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/pickers/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" type="text/css" href="vendors\css\extensions\sweetalert2.min.css">
        <!-- END: Vendor CSS-->';
        if($title == "POS")
        {
          echo '
          ';
        }
      }
      else if($title == "Customers" || $title == "Suppliers" || $title == "Products")
      {
        echo '<!-- BEGIN: Vendor CSS -->
        <link rel="stylesheet" type="text/css" href="vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/tables/datatable/responsive.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/tables/datatable/buttons.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
        ';
      }
    ?>
  
    
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/plugins/extensions/ext-component-toastr.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- END: Custom CSS-->
    <!-- BEGIN: Vendor JS--> 
    <script src="vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
    
    
    <!-- BEGIN: Page JS-->
 </head>
  <!-- END: Head-->
  <!-- BEGIN: Body-->
  
  <!-- <body class="pace-done vertical-layout navbar-floating footer-static menu-expanded vertical-menu-modern" data-open="click" data-menu="vertical-menu-modern" data-col=""> -->
  <body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
  <div class="navbar-header d-xl-block d-none">
    <ul class="nav navbar-nav">
      <li class="nav-item"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template-dark/index.html"><span class="brand-logo">
            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
              <defs>
                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                  <stop stop-color="#000000" offset="0%"></stop>
                  <stop stop-color="#FFFFFF" offset="100%"></stop>
                </lineargradient>
                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                  <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                  <stop stop-color="#FFFFFF" offset="100%"></stop>
                </lineargradient>
              </defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                  <g id="Group" transform="translate(400.000000, 178.000000)">
                    <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                    <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                    <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                    <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                    <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                  </g>
                </g>
              </g>
            </svg></span>
          <h2 class="brand-text mb-0"><?php echo $name['name'];?></h2></a></li>
    </ul>
  </div>
  <div class="navbar-container d-flex content">
    <div class="bookmark-wrapper d-flex align-items-center">
      <ul class="nav navbar-nav d-xl-none">
        <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
      </ul>
      <ul class="nav navbar-nav bookmark-icons">
        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="products.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Products"><i class="ficon" data-feather="list"></i></a></li>
        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="pos.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="POS"><i class="ficon" data-feather="shopping-cart"></i></a></li>
        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="purchase.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Stock"><i class="ficon" data-feather="shopping-bag"></i></a></li>
        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="transactions.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Transactions"><i class="ficon" data-feather="bar-chart-2"></i></a></li>
      </ul>
      
    </div>
    <ul class="nav navbar-nav align-items-center ms-auto">
      <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a></li>
      <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?php echo $_SESSION['name'];?></span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets//images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span></a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="me-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chats</a>
          <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="auth-login-cover.html"><i class="me-50" data-feather="power"></i> Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-dark navbar-shadow menu-border container-xxl" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item me-auto"><a class="navbar-brand" href="index.php"><span class="brand-logo">
              <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                <defs>
                  <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                    <stop stop-color="#000000" offset="0%"></stop>
                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                  </lineargradient>
                  <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                  </lineargradient>
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                    <g id="Group" transform="translate(400.000000, 178.000000)">
                      <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                      <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                      <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                      <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                      <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                    </g>
                  </g>
                </g>
              </svg></span>
            <h2 class="brand-text mb-0">Awan Dairy Products</h2></a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content" data-menu="menu-container">
      <!-- include ../../../includes/mixins-->
      <ul class="nav navbar-nav justify-content-center" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="nav-item"><a class="nav-link d-flex align-items-center" href="index.php"><i data-feather="home"></i><span data-i18n="Dashboards">Dashboard</span></a></li>
        <li class="nav-item"><a class="nav-link d-flex align-items-center" href="customers.php"><i data-feather='users'></i></i><span data-i18n="Dashboards">Customers</span></a></li>
        <li class="nav-item"><a class="nav-link d-flex align-items-center" href="suppliers.php"><i data-feather='users'></i><span data-i18n="Dashboards">Suppliers</span></a></li>

        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="package"></i><span data-i18n="Apps">Shop</span></a>
          <ul class="dropdown-menu" data-bs-popper="none">
          <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="products.php" data-bs-toggle="" data-i18n="Products"><i data-feather="list"></i><span data-i18n="Products">Products</span></a></li>
            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="expenses.php" data-bs-toggle="" data-i18n="Expenses"><i data-feather='dollar-sign'></i></i><span data-i18n="Expenses">Expenses</span></a></li>
            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="pos.php" data-bs-toggle="" data-i18n="POS"><i data-feather='shopping-cart'></i><span data-i18n="POS">POS</span></a></li>
            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="updatestock.php" data-bs-toggle="" data-i18n="Stock Update"><i data-feather='shopping-bag'></i><span data-i18n="Stock">Stock Update</span></a></li>
            
          </ul>
        </li>
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather='bar-chart'></i></i><span data-i18n="Apps">Transactions</span></a>
          <ul class="dropdown-menu" data-bs-popper="none">
          <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="transactions.php" data-bs-toggle="" data-i18n="Transactions"><i data-feather='bar-chart-2'></i></i><span data-i18n="Email">All Transactions</span></a></li>
            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="sales.php" data-bs-toggle="" data-i18n="Sale"><i data-feather='bar-chart-2'></i></i><span data-i18n="Email">Sale Invoices</span></a></li>
            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="purchases.php" data-bs-toggle="" data-i18n="Purchase"><i data-feather='bar-chart-2'></i></i><span data-i18n="Email">Purchase Invoices</span></a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link d-flex align-items-center" href="settings.php"><i data-feather='settings'></i></i><span data-i18n="Dashboards">Settings</span></a></li>
        <li class="nav-item"><a class="nav-link d-flex align-items-center" href="logout.php"><i data-feather="power"></i><span data-i18n="Dashboards">Logout</span></a></li>
      </ul>
    </div>
  </div>
</div>
<!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->

<!-- Dashboard Ecommerce ends -->
 
