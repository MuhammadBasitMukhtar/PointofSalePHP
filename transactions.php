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
      <div class="col-md-2 mb-1">
         <div class="form-group">
            <label class="form-label" for="fp-human-friendly"><span style="visibility: hidden">SBTech</span></label>
            <button type="submit" class="btn btn-primary">Filter</button>    
         </div>
      </div>
   </div>
</form>
<div class="row match-height">
      
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12">
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
<script src="vendors/js/forms/repeater/jquery.repeater.min.js"></script>
<script src="vendors/js/forms/select/select2.full.min.js"></script>
<script src="vendors/js/pickers/flatpickr/flatpickr.min.js"></script>

<script>
    function loadProducts(from,to)
  {
    var action = "loadTransaction";
    //alert(from);
    //var fromdate = from.toISOString().split('T')[0];
    //var todate = to.toISOString().split('T')[0];
      $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {action: action, from: from, to: to},
        dataType: "json",
        success: function(data){
            console.log(from + ", " + to);
            console.log(data);
            var rows = "";
            saletotal = 0;
            expensetotal = 0;
            for (let index = 0; index < data.length; index++) {
                rows += "<tr>";
                rows += "<td>"+data[index].id+"</td>";
                rows += "<td>Rs. "+parseFloat(data[index].amount)+"</td>";
                rows += "<td>"+data[index].description+"</td>";
                rows += "<td>"+data[index].datecreated+"</td>";
                if(data[index].isdebit == "1")
                {
                    expensetotal += parseFloat(data[index].amount);
                    rows += `<td><div class="avatar bg-light-warning m-0">
                                <div class="avatar-content">
                                <i data-feather='arrow-down-circle' class="font-medium-5"></i>
                                </div>
                            </div></td>`;
                }
                else
                {
                    saletotal += parseFloat(data[index].amount);
                    rows += `<td><div class="avatar bg-light-success m-0">
                                <div class="avatar-content">
                                <i data-feather='arrow-up-circle' class="font-medium-5"></i>
                                </div>
                            </div></td>`;
                }
                rows += "</tr>"; 
                
            }
            $(".transactionsTable").html(rows);
            $(".saletotal").html("Rs. " + saletotal);
            $(".expensetotal").html("Rs. " + expensetotal);
            var e = $(".productsTable").DataTable({
                order: [[ 4, 'desc' ]],
                columnDefs: [{ type: 'date', 'targets': [4] }]
            });  
            if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
            
        },
        error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
        }
      });

    
//   e.DataTable({
//             ajax: {url: "includes/data_operation.php?action=loadTransaction",dataSrc:""},
//             order: [[ 4, 'desc' ]],
//             responsive: true,
//             columns: [{
//                 data: "id"
//             },{
//                 data: "amount"
//             },{
//                 data: "description"
//             },{
//                 data: "isdebit"
//             },{
//                 data: "datecreated"
//             },{
//                 data: ''
//             }],
//             columnDefs: [{ type: 'date', 'targets': [4] }, { "defaultContent": "-", "targets": "_all" },{
//                 targets: -1,
//                 title: "Add",
//                 orderable: !1,
//                 render: function(e, t, a, s) {
//                     return `<div id="item`+a.id+`" onclick="calcTotal();addToCart(`+a.id+`,'`+a.name+`',`+a.qty+`,`+a.price+`)" class='btnAddCard' prodid="`+a.id+`">` + feather.icons.plus.toSvg({
//                         class: "font-small-4"
//                     }) + `</div>`
//                 },
//                 createdCell: function (td) {
//                     $(td).addClass('bg-success text-center p-0');
//                     $(td).css('color','#fff');
//                 }
//             }],
//             dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
//             displayLength: 7,
//             lengthMenu: [7, 10, 25, 50, 75, 100],
//             buttons: [{
//                 extend: "collection",
//                 className: "btn btn-outline-secondary dropdown-toggle me-2",
//                 text: feather.icons.share.toSvg({
//                     class: "font-small-4 me-50"
//                 }) + "Export",
//                 buttons: [{
//                     extend: "print",
//                     text: feather.icons.printer.toSvg({
//                         class: "font-small-4 me-50"
//                     }) + "Print",
//                     className: "dropdown-item",
//                     exportOptions: {
//                         columns: [1, 2,3]
//                     }
//                 }, {
//                     extend: "csv",
//                     text: feather.icons["file-text"].toSvg({
//                         class: "font-small-4 me-50"
//                     }) + "Csv",
//                     className: "dropdown-item",
//                     exportOptions: {
//                         columns: [3, 4, 5, 6, 7]
//                     }
//                 }, {
//                     extend: "excel",
//                     text: feather.icons.file.toSvg({
//                         class: "font-small-4 me-50"
//                     }) + "Excel",
//                     className: "dropdown-item",
//                     exportOptions: {
//                         columns: [3, 4, 5, 6, 7]
//                     }
//                 }, {
//                     extend: "pdf",
//                     text: feather.icons.clipboard.toSvg({
//                         class: "font-small-4 me-50"
//                     }) + "Pdf",
//                     className: "dropdown-item",
//                     exportOptions: {
//                         columns: [3, 4, 5, 6, 7]
//                     }
//                 }, {
//                     extend: "copy",
//                     text: feather.icons.copy.toSvg({
//                         class: "font-small-4 me-50"
//                     }) + "Copy",
//                     className: "dropdown-item",
//                     exportOptions: {
//                         columns: [3, 4, 5, 6, 7]
//                     }
//                 }],
//                 init: function(e, t, a) {
//                     $(t).removeClass("btn-secondary"), $(t).parent().removeClass("btn-group"), setTimeout((function() {
//                         $(t).closest(".dt-buttons").removeClass("btn-group").addClass("d-inline-flex")
//                     }), 50)
//                 }
//             }, {
//                 text: feather.icons.plus.toSvg({
//                     class: "me-50 font-small-4"
//                 }) + "Update Customer Balance",
//                 className: "create-new btn btn-primary",
//                 attr: {
//                     "data-bs-toggle": "modal",
//                     "data-bs-target": "#modals-slide-in"
//                 },
//                 init: function(e, t, a) {
//                     $(t).removeClass("btn-secondary")
//                 }
//             }],
//             responsive: {
//                 details: {
//                     display: $.fn.dataTable.Responsive.display.modal({
//                         header: function(e) {
//                             return "Details of " + e.data().full_name
//                         }
//                     }),
//                     type: "column",
//                     renderer: function(e, t, a) {
//                         var s = $.map(a, (function(e, t) {
//                             return "" !== e.title ? '<tr data-dt-row="' + e.rowIdx + '" data-dt-column="' + e.columnIndex + '"><td>' + e.title + ":</td> <td>" + e.data + "</td></tr>" : ""
//                         })).join("");
//                         return !!s && $('<table class="table table-responsive w-100"/>').append("<tbody>" + s + "</tbody>")
//                     }
//                 }
//             },
//             language: {
//                 paginate: {
//                     previous: "&nbsp;",
//                     next: "&nbsp;"
//                 }
//             }
//         });
        $("div.head-label").html('<h5 class="mb-0">List of All Transactions</h5>')
  }

  $("document").ready(function(){
      $("#filterForm").submit(function(e){
          e.preventDefault();
          var from =$("#from-date").val(); 
          var to = $("#to-date").val();
          loadProducts(from,to);
      });
    $("#to-date").flatpickr(
      {
        altInput: true,
        altFormat: "j F, Y",
        dateFormat: "Y-m-d",
        disableMobile: "true",
        maxDate: "today",
        //maxDate: new Date().fp_incr(365),
        defaultDate: "today",
        /* setting initial date of return picker to the one selected in 
        outbound*/
        
      });
      var date = new Date();
      var today = date.getDate();
      $("#from-date").flatpickr(
      {
        altInput: true,
        altFormat: "j F, Y",
        dateFormat: "Y-m-d",
        disableMobile: "true",
        maxDate: "today",
        //maxDate: new Date().fp_incr(365),
        defaultDate: new Date(date.getFullYear(),date.getMonth(),1),
        /* setting initial date of return picker to the one selected in 
        outbound*/
        
      });
    from = new Date(date.getFullYear(),date.getMonth(),2).toISOString().split('T')[0];
    to = new Date(date.getFullYear(),date.getMonth(),date.getDate()+2).toISOString().split('T')[0];
    loadProducts(from,to);
    
  });
  
</script>