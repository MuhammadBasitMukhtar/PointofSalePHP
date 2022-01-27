<?php include 'connection.php'?>
<link rel="stylesheet" type="text/css" href="vendors/css/forms/select/select2.min.css">
<?php $title = "POS";?>
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
<script src="vendors/js/forms/repeater/jquery.repeater.min.js"></script>
<script src="vendors/js/forms/select/select2.full.min.js"></script>
<script src="vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    
<script>
  $("document").ready(function(){
    $("input[name='discount']").TouchSpin({
                min: 0,
                max: 1000000,
                step: 0.5,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Rs.'
            });
    $("input[name='received']").TouchSpin({
                min: 0,
                max: 1000000,
                boostat: 5,
                maxboostedstep: 10,
                prefix: 'Rs.'
            });

    p = $(".customer");
    $('.customer')
    .select2().on("select2:open", (function() {
        $(document).find(".add-new-customer").length || $(document).find(".select2-results__options").before('<div class="add-new-customer btn btn-flat-success cursor-pointer rounded-0 text-start mb-50 p-50 w-100" data-bs-toggle="modal" data-bs-target="#add-new-customer-sidebar"><span class="align-middle">Add New Supplier</span></div>')
    })),
    $(document).on("click", ".add-new-customer", (function() {
        p.select2("close")}));
        loadProducts();
        loadCustomers();  
  });
  
  function loadCustomers()
  {
      var action = "loadSupplier";
      $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {action: action},
        dataType: "json",
        success: function(data){
            console.log(data);
            $(".customer").html(data);
        },
        error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
        }
      });
  }

  $("#customerAdd").submit(function(e){
    e.preventDefault();
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(data)
        {
            console.log(data);
            loadCustomers();
        }
    });
  });

  $("#productAdd").submit(function(e){
    e.preventDefault();
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(data)
        {
            console.log(data);
            $('#modals-slide-in').modal('hide');
            $(".productsTable").DataTable().ajax.reload(null, false);
        }
    });
  });

  function loadProducts()
  {
    var e = $(".productsTable");
  e.DataTable({
            ajax: {url: "includes/data_operation.php?action=loadProduct",dataSrc:""},
            columns: [{
                data: "name"
            },{
                data: "price"
            },{
                data: "qty"
            },{
                data: ''
            }],
            columnDefs: [ { "defaultContent": "-", "targets": "_all" },{
                targets: -1,
                title: "Add",
                orderable: !1,
                render: function(e, t, a, s) {
                    return `<div id="item`+a.id+`" onclick="calcTotal();addToCart(`+a.id+`,'`+a.name+`',`+a.qty+`,`+a.price+`)" class='btnAddCard' prodid="`+a.id+`">` + feather.icons.plus.toSvg({
                        class: "font-small-4"
                    }) + `</div>`
                },
                createdCell: function (td) {
                    $(td).addClass('bg-success text-center p-0');
                    $(td).css('color','#fff');
                }
            }],
            dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            buttons: [{
                extend: "collection",
                className: "btn btn-outline-secondary dropdown-toggle me-2",
                text: feather.icons.share.toSvg({
                    class: "font-small-4 me-50"
                }) + "Export",
                buttons: [{
                    extend: "print",
                    text: feather.icons.printer.toSvg({
                        class: "font-small-4 me-50"
                    }) + "Print",
                    className: "dropdown-item",
                    exportOptions: {
                        columns: [1, 2,3]
                    }
                }, {
                    extend: "csv",
                    text: feather.icons["file-text"].toSvg({
                        class: "font-small-4 me-50"
                    }) + "Csv",
                    className: "dropdown-item",
                    exportOptions: {
                        columns: [3, 4, 5, 6, 7]
                    }
                }, {
                    extend: "excel",
                    text: feather.icons.file.toSvg({
                        class: "font-small-4 me-50"
                    }) + "Excel",
                    className: "dropdown-item",
                    exportOptions: {
                        columns: [3, 4, 5, 6, 7]
                    }
                }, {
                    extend: "pdf",
                    text: feather.icons.clipboard.toSvg({
                        class: "font-small-4 me-50"
                    }) + "Pdf",
                    className: "dropdown-item",
                    exportOptions: {
                        columns: [3, 4, 5, 6, 7]
                    }
                }, {
                    extend: "copy",
                    text: feather.icons.copy.toSvg({
                        class: "font-small-4 me-50"
                    }) + "Copy",
                    className: "dropdown-item",
                    exportOptions: {
                        columns: [3, 4, 5, 6, 7]
                    }
                }],
                init: function(e, t, a) {
                    $(t).removeClass("btn-secondary"), $(t).parent().removeClass("btn-group"), setTimeout((function() {
                        $(t).closest(".dt-buttons").removeClass("btn-group").addClass("d-inline-flex")
                    }), 50)
                }
            }, {
                text: feather.icons.plus.toSvg({
                    class: "me-50 font-small-4"
                }) + "Add New Product",
                className: "create-new btn btn-primary",
                attr: {
                    "data-bs-toggle": "modal",
                    "data-bs-target": "#modals-slide-in"
                },
                init: function(e, t, a) {
                    $(t).removeClass("btn-secondary")
                }
            }],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(e) {
                            return "Details of " + e.data().full_name
                        }
                    }),
                    type: "column",
                    renderer: function(e, t, a) {
                        var s = $.map(a, (function(e, t) {
                            return "" !== e.title ? '<tr data-dt-row="' + e.rowIdx + '" data-dt-column="' + e.columnIndex + '"><td>' + e.title + ":</td> <td>" + e.data + "</td></tr>" : ""
                        })).join("");
                        return !!s && $('<table class="table"/>').append("<tbody>" + s + "</tbody>")
                    }
                }
            },
            language: {
                paginate: {
                    previous: "&nbsp;",
                    next: "&nbsp;"
                }
            }
        });
        $("div.head-label").html('<h5 class="mb-0">List of Products</h5>')
  }

    function addToCart(id,name,qty,price)
    {
            $().closest("tr").remove();
            $("#item"+id).closest("tr").css({ 'display' : 'none'});
            var id = id;
            var name = name;
            var item = `<tr class="item">
                            <td>`+name+`
                                <input class="form-control" readonly name="id[]" type="hidden" value="`+id+`"/>
                            </td>
                            <td style="text-align: center; padding: 0; vertical-align: middle">`+price+`</td>
                            <td class="input-group bootstrap-touchspin input-group-lg w-100 h-100" style="padding: 5px">
                                <input type="number" name="qty[]" class="touchspin itemqty form-control" value="1" onchange="calcTotal()" price="`+price+`" prodid = "`+id+`"/>
                            </td>
                            <td id="prodRow`+id+`" style="text-align: center; padding: 0; vertical-align: middle">0</td>
                            <input type="hidden" name="itemsprice[]" value="`+price+`">
                            <td class="bg-danger" style="cursor: pointer; text-align: center !important; padding: 0" id="prod`+id+`" onclick="delrow(`+id+`)" ><div>`+feather.icons.trash.toSvg({
                    class: "font-small-4"
                })+`</div></td></tr>`;
            $("#cart").append(item);
            $("input[name='qty[]']").TouchSpin({
                min: 1,
                max: 100,
                stepinterval: 1,
                maxboostedstep: 100,
            });    
        calcTotal();
    }
    function delrow(id)
    {
        
        alert(id);
        $("#item"+id).closest("tr").css({ 'display' : ''});
        $("#prod"+id).closest("tr").remove();
        calcTotal();
    }  
    
    

    function calcTotal()
    {
            var subtotal = 0;
            $(".itemqty").each(function(){
                price = parseFloat($(this).attr("price"));
                qty = parseInt($(this).val());    
                var total = qty * price;
                id = $(this).attr('prodid');
                $("#prodRow"+id).html(total) 
                subtotal += price * qty;
            });
            $(".subtotal").html(subtotal);
            $(".subtotal").val(subtotal);
            var discount = parseFloat($("#discount").val());  
            var prev = parseFloat($("#previous").html());
            var total = subtotal - discount + prev;
            var paid = parseFloat($("#paid").val());
            if(paid <= total)
            {
                $(".return").html(0);
                $(".return").val(0);
            }
            else
            {
                $(".return").html((paid-total));
                $(".return").val((paid-total));
            }
            $(".total").html(total);
            $(".total").val(total);

    }

        $("#customerid").change(function(){
            var prev = $(this).find(":selected").attr('prev');
            $("#previous").html(prev);
            calcTotal();
        });
        $("#prodform").on("keypress", function (event) {
            var keyPressed = event.keyCode || event.which;
            console.log("aaya");
            if (keyPressed === 13) {
                console.log("enter pressed");
                event.preventDefault();
                return false;
            }
        });
        $("#prodform").submit(function(e){
            e.preventDefault();
            var prev = $(this).find(":selected").val();
            if(prev == 0)
            {
                Swal.fire(
                'Not Possible',
                'Select Supplier First',
                'error'
                )
            }
            else
            {
                
                $.ajax({
                url: "includes/data_operation.php",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(data)
                {
                    console.log(data);
                    var id = parseInt(data);
                    alert(id);
                    Swal.fire({
                        title: 'Congratulations!',
                        text: "Items have been purchased! Do you want to generate bill?",
                        icon: 'success',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var action = "generateBillS";
                            $.ajax({
                                url: "includes/data_operation.php",
                                method: "POST",
                                data: {action: action, id: data},
                                dataType: "json",
                                success: function(data){
                                    console.log(data);
                                    PrintDiv(data);
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(xhr.status);
                                    alert(thrownError);

                                }
                            });
                        }
                    })
                    $(".productsTable").DataTable().ajax.reload(null, false);
                    clearForm();    
                    }
                });
        
     
            }
        });
    function PrintDiv(html) {    
       var popupWin = window.open('', '_blank', 'width=302,height=auto');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + html + '</html>');
       popupWin.document.close();
    }
    function clearForm()
    {
        $("#prodform")[0].reset();
        $("#customerid").empty();
        loadCustomers();
        $(".total").html(0);
        $(".subtotal").html(0);
        $(".return").html(0);
        $("#previous").html(0);
        $("#cart").html("");
    }
    </script>
