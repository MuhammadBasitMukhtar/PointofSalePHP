$("document").ready(function() {
    var date = new Date();
    var today = date.getDate();
    from = new Date(date.getFullYear(), date.getMonth(), 2).toISOString().split('T')[0];
    to = new Date(date.getFullYear(), date.getMonth(), date.getDate() + 2).toISOString().split('T')[0];
    
    loadProducts(from, to,0,0,0);
    loadStats();
    loadCustomers();
    $('.customer').select2();
    loadSuppliers();
    $('.supplier').select2();
    $('.customer').on('change',function(){
        if($('.customer').val() != 0)
        {
            $(".supplier").val("0");
            $(".supplier").trigger('change');
            $(".type").val('0');
        }
    });
    $('.supplier').on('change',function(){
        if($('.supplier').val() != 0)
        {
            $(".type").val('0');
            $(".customer").val("0");
            $(".customer").trigger('change');
        }
    });
    $('.type').on('change',function(){
            $(".customer").val("0");
            $(".customer").trigger('change');
            $(".supplier").val("0");
            $(".supplier").trigger('change');
    });
    
    $("#filterForm").submit(function(e) {
        e.preventDefault();
        var sid =$('.supplier').val(); 
        var cid = $('.customer').val();
        var type = $(".type").val();
        var from = $("#from-date").val();
        var to = $("#to-date").val();
        var date = new Date(to);
        to = new Date(date.getFullYear(), date.getMonth(), date.getDate() + 2).toISOString().split('T')[0];
        loadProducts(from, to,sid,cid,type);
        
    });
    $("#to-date").flatpickr({
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
    $("#from-date").flatpickr({
        altInput: true,
        altFormat: "j F, Y",
        dateFormat: "Y-m-d",
        disableMobile: "true",
        maxDate: "today",
        //maxDate: new Date().fp_incr(365),
        defaultDate: new Date(date.getFullYear(), date.getMonth(), 1),
        /* setting initial date of return picker to the one selected in 
        outbound*/

    });

    $("#generateBill").click(function(){
        var id = $(this).attr('invoiceid');
        var type = $(this).attr('type');
        var action = "generateBill";
        if(type == "P")
        {
            action = "generateBillS";
        }
                        $.ajax({
                            url: "includes/data_operation.php",
                            method: "POST",
                            data: {
                                action: action,
                                id: id
                            },
                            dataType: "json",
                            success: function(data) {
                                console.log(data);
                                PrintDiv(data);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(xhr.status);
                                alert(thrownError);
                            }
                        });
    });
    
});

function loadStats()
{
    var action = "loadProductStats";
    var id = $("#prodid").html();
    //alert(from);
    //var fromdate = from.toISOString().split('T')[0];
    //var todate = to.toISOString().split('T')[0];
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {
            action: action,
            id: id
        },
        dataType: "json",
        success: function(data) {
            //console.log(from + ", " + to);
            console.log(data);
            $(".content-header-title").html(data[0].name);
            $(".prodname").html(data[0].name);
            $(".currentstock").html(data[0].qty);
            $(".totalsold").html(data[0].sold_qty);
            $(".totalprofit").html("Rs. " + data[0].earning);
            $(".totalsale").html("Rs. " + data[0].sale);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

function loadProducts(from, to,sid,cid,type) {
    var div = $(".tableDiv");
    div.html(`<table class="table table-responsive w-100 productsTable" style="width: 100%">
    <thead>
    <tr>
        <th style="width: 5%">ID</th>
        <th style="width: 15%">Name</th>
        <th style="width: 15%">Buyer/Payer</th>
        <th style="width: 10%">Qty</th>
        <th style="width: 10%">Price</th>
        <th style="width: 10%">Total</th>
        <th style="width: 15%">Date Sold</th>
        <th style="width: 10%">Type</th>
        <th style="width: 10%">View</th>
    </tr>
    </thead>
    <tbody class="transactionsTable"></tbody>
    <tfoot>
        <tr>
            <th>Total Sale</th>
            <th colspan="2" class="saletotal"></th>
            <th>Total Purchase</th>
            <th colspan="2" class="expensetotal"></th>
            <th>Total Profit</th>
            <th colspan="2" class="profit"></th>
        </tr>
    </tfoot>
</table>`);
    var action = "loadProductSales";
    var id = $("#prodid").html();
    //alert(from);
    //var fromdate = from.toISOString().split('T')[0];
    //var todate = to.toISOString().split('T')[0];
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {
            action: action,
            from: from,
            to: to,
            id: id,
            customerid: cid,
            supplierid: sid,
            type: type
        },
        dataType: "json",
        success: function(data) {
            //console.log(from + ", " + to);
            console.log(data);
            var rows = "";
            saletotal = 0;
            purchasetotal = 0;
            profit = 0;
            for (let index = 0; index < data.length; index++) {
                rows += "<tr>";
                rows += "<td>" + data[index].id + "</td>";
                rows += "<td>" + data[index].productname + "</td>";
                if(data[index].type == 'S')
                {
                    profit += parseFloat(data[index].total) - (parseFloat(data[index].qty) * parseFloat(data[index].cost))
                    saletotal += parseFloat(data[index].total);
                    rows += "<td>" + data[index].customername + "</td>";
                }
                else
                {
                    purchasetotal += parseFloat(data[index].total);
                    rows += "<td>" + data[index].suppliername + "</td>";
                }
                rows += "<td>" + parseFloat(data[index].qty) + "</td>";
                rows += "<td>Rs. " + parseFloat(data[index].price) + "</td>";
                rows += "<td>Rs. " + parseFloat(data[index].total) + "</td>";
                rows += "<td>" + data[index].datesold + "</td>";
                if (data[index].type == "S") {
                    //expensetotal += parseFloat(data[index].amount);
                    rows += `<td> <span class="badge badge-glow bg-success">Sale</span></td>`;
                } else {
                    //saletotal += parseFloat(data[index].amount);
                    rows += `<td><span class="badge badge-glow bg-warning">Purchase</span></td>`;
                }
                rows += `<td><button type="button" onclick="viewInvoice(`+data[index].invoiceid+`)" class="btn btn-outline-info viewInvoice"><!--data-bs-toggle="modal" data-bs-target="#info"-->
                View
              </button></td>`;
                rows += "</tr>";

            }
            $(".transactionsTable").html(rows);
            $(".saletotal").html("Rs. " + saletotal);
            $(".expensetotal").html("Rs. " + purchasetotal);
            $(".profit").html("Rs. " + profit);
            $(".productsTable").DataTable(
                    {
                        order: [
                            [6, 'desc']
                        ],
                        destroy: true,
                        columnDefs: [{
                            type: 'date',
                            'targets': [6]
                        }]
                    }
                );
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
    $("div.head-label").html('<h5 class="mb-0">List of All Product Sales</h5>')
}
function viewInvoice(id)
{
    //alert(id);
    var action = "loadInvoiceID";
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {
            action: action,
            id: id
        },
        dataType: "json",
        success: function(data) {
            console.log(data);
            $("#generateBill").attr('invoiceid',data[0].id);
            $("#generateBill").attr('type',data[0].type);
            $("#invoiceid").html(data[0].id);
            if(data[0].type == "S")
            {
                $("#received-text").html("Received");
                $("#type").html(' <span class="badge badge-light-success">Sale</span>');
                $("#to").html(data[0].customername)
                $("#payer").val(data[0].customername)
                $("input[name='cid']").val(data[0].customerid);
            }
            else
            {
                $("#received-text").html("Paid");
                $("#type").html(' <span class="badge badge-light-warning">Purchase</span>');
                $("#to").html(data[0].suppliername);
                $("#payer").val(data[0].suppliername);
                $("input[name='cid']").val(data[0].supplierid);
            }
            if(data[0].status == "Paid")
            {
                $(".payBtn").css('display','none');
                $("#status").html('<span class="badge badge-light-success">Paid</span>')
            }
            else
            {
                $(".payBtn").css('display','');
                var rem = parseFloat(data[0].total) - parseFloat(data[0].received);
                $("#payeeAmount").val(rem);
                $("input[name='type']").val(data[0].type);
                $("input[name='invoiceid']").val(data[0].id);
                $("#status").html('<span class="badge badge-light-danger">Due</span>')
            }
            $("#datecreated").html(data[0].datecreated);
            var items = "";
            for (let index = 0; index < data[0].items.length; index++) {
                items += "<tr>";
                items += "<td>"+(index+1)+"</td>";
                items += "<td>"+data[0].items[index][0].name+"</td>";
                items += "<td>"+data[0].items[index][0].price+"</td>";
                items += "<td>"+data[0].items[index][0].qty+"</td>";
                items += "<td>"+data[0].items[index][0].total+"</td>";
                items += "</tr>";
            }
            $(".itemrows").html(items);
            var prev = parseFloat(data[0].total) - (parseFloat(data[0].subtotal) - parseFloat(data[0].discount));
            $("#subtotal").html("Rs. "+data[0].subtotal);
            $("#prev").html("Rs. "+prev);
            $("#discount").html("Rs. "+data[0].discount);
            $("#total").html("Rs. "+data[0].total);
            $("#received").html("Rs. "+data[0].received);

            
            $('#info').modal('show');
            //$(".supplier").html(data);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}
function PrintDiv(html) {
    var popupWin = window.open('', '_blank', 'width=302,height=auto');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()">' + html + '</html>');
    popupWin.document.close();
}

function loadCustomers() {
    var action = "loadCustomers";
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {
            action: action
        },
        dataType: "json",
        success: function(data) {
            console.log(data);
            $(".customer").html(data);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}
function loadSuppliers() {
    var action = "loadSupplier";
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {
            action: action
        },
        dataType: "json",
        success: function(data) {
            console.log(data);
            $(".supplier").html(data);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}
