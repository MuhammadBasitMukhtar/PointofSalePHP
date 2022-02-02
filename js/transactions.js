
function loadProducts(from, to) {
    var div = $(".tableDiv");
    div.html(`<table class="table table-responsive w-100 productsTable" style="width: 100%">
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
</table>`);
    var action = "loadTransaction";
            
    //alert(from);
    //var fromdate = from.toISOString().split('T')[0];
    //var todate = to.toISOString().split('T')[0];
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {
            action: action,
            from: from,
            to: to
        },
        dataType: "json",
        success: function(data) {
            //console.log(from + ", " + to);
            //console.log(data);
            var rows = "";
            saletotal = 0;
            expensetotal = 0;
            for (let index = 0; index < data.length; index++) {
                rows += "<tr>";
                rows += "<td>" + data[index].id + "</td>";
                if(data[index].isdebit == "0")
                {
                    rows += "<td><div class='fw-bolder text-success'>+ Rs. " + parseFloat(data[index].amount) + "</div></td>";
                }
                else
                {
                    rows += "<td><div class='fw-bolder text-danger'>- Rs. " + parseFloat(data[index].amount) + "</div></td>";
                }
                rows += "<td>" + data[index].description + "</td>";
                rows += "<td>" + data[index].datecreated + "</td>";
                if (data[index].isdebit == "1") {
                    expensetotal += parseFloat(data[index].amount);
                    rows += `<td><div class="avatar bg-light-warning m-0">
                                <div class="avatar-content">
                                <i data-feather='arrow-down-circle' class="font-medium-5"></i>
                                </div>
                            </div></td>`;
                } else {
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
            $(".productsTable").DataTable(
                    {
                        order: [
                            [4, 'desc']
                        ],
                        destroy: true,
                        columnDefs: [{
                            type: 'date',
                            'targets': [4]
                        }]
                    }
                );
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
    $("div.head-label").html('<h5 class="mb-0">List of All Transactions</h5>')
}

$("document").ready(function() {
    var date = new Date();
    var today = date.getDate();
    
    from = new Date(date.getFullYear(), date.getMonth(), 2).toISOString().split('T')[0];
    to = new Date(date.getFullYear(), date.getMonth(), date.getDate() + 2).toISOString().split('T')[0];
    
    loadProducts(from, to);
    $("#filterForm").submit(function(e) {
        e.preventDefault();
        
        var from = $("#from-date").val();
        var to = $("#to-date").val();
        var date = new Date(to);
        to = new Date(date.getFullYear(), date.getMonth(), date.getDate() + 2).toISOString().split('T')[0];
        loadProducts(from, to);
        
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
    
    
});