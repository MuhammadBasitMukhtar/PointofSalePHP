$("document").ready(function() {
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
            p.select2("close")
        }));
    loadProducts();
    loadCustomers();
});

function loadCustomers() {
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
            $(".customer").html(data);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

$("#customerAdd").submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(data) {
            console.log(data);
            loadCustomers();
        }
    });
});

$("#productAdd").submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(data) {
            console.log(data);
            $('#modals-slide-in').modal('hide');
            $(".productsTable").DataTable().ajax.reload(null, false);
        }
    });
});

function loadProducts() {
    var e = $(".productsTable");
    e.DataTable({
        ajax: {
            url: "includes/data_operation.php?action=loadProduct",
            dataSrc: ""
        },
        columns: [{
            data: "name"
        }, {
            data: "price"
        }, {
            data: "qty"
        }, {
            data: ''
        }],
        columnDefs: [{
            "defaultContent": "-",
            "targets": "_all"
        }, {
            targets: -1,
            title: "Add",
            orderable: !1,
            render: function(e, t, a, s) {
                return `<div id="item` + a.id + `" onclick="calcTotal();addToCart(` + a.id + `,'` + a.name + `',` + a.qty + `,` + a.cost + `)" class='btnAddCard' prodid="` + a.id + `">` + feather.icons.plus.toSvg({
                    class: "font-small-4"
                }) + `</div>`
            },
            createdCell: function(td) {
                $(td).addClass('bg-success text-center p-0');
                $(td).css('color', '#fff');
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
                    columns: [1, 2, 3]
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
                // display: $.fn.dataTable.Responsive.display.modal({
                //     header: function(e) {
                //         return "Details of " + e.data().full_name
                //     }
                // }),
                // type: "column",
                // renderer: function(e, t, a) {
                //     var s = $.map(a, (function(e, t) {
                //         return "" !== e.title ? '<tr data-dt-row="' + e.rowIdx + '" data-dt-column="' + e.columnIndex + '"><td>' + e.title + ":</td> <td>" + e.data + "</td></tr>" : ""
                //     })).join("");
                //     return !!s && $('<table class="table"/>').append("<tbody>" + s + "</tbody>")
                // }
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

function addToCart(id, name, qty, price) {
    $().closest("tr").remove();
    $("#item" + id).closest("tr").css({
        'display': 'none'
    });
    var id = id;
    var name = name;
    var item = `<tr class="item">
                            <td>` + name + `
                                <input class="form-control" readonly name="id[]" type="hidden" value="` + id + `"/>
                            </td>
                            <td style="text-align: center; padding: 0; vertical-align: middle">` + price + `</td>
                            <td class="input-group bootstrap-touchspin input-group-lg w-100 h-100" style="padding: 5px">
                                <input type="number" name="qty[]" class="touchspin itemqty form-control" value="1" onchange="calcTotal()" price="` + price + `" prodid = "` + id + `"/>
                            </td>
                            <td id="prodRow` + id + `" style="text-align: center; padding: 0; vertical-align: middle">0</td>
                            <input type="hidden" name="itemsprice[]" value="` + price + `">
                            <td class="bg-danger" style="cursor: pointer; text-align: center !important; padding: 0" id="prod` + id + `" onclick="delrow(` + id + `)" ><div>` + feather.icons.trash.toSvg({
        class: "font-small-4"
    }) + `</div></td></tr>`;
    $("#cart").append(item);
    $("input[name='qty[]']").TouchSpin({
        min: 1,
        max: 100,
        stepinterval: 1,
        maxboostedstep: 100,
    });
    calcTotal();
}

function delrow(id) {

    alert(id);
    $("#item" + id).closest("tr").css({
        'display': ''
    });
    $("#prod" + id).closest("tr").remove();
    calcTotal();
}



function calcTotal() {
    var subtotal = 0;
    $(".itemqty").each(function() {
        price = parseFloat($(this).attr("price"));
        qty = parseInt($(this).val());
        var total = qty * price;
        id = $(this).attr('prodid');
        $("#prodRow" + id).html(total)
        subtotal += price * qty;
    });
    $(".subtotal").html(subtotal);
    $(".subtotal").val(subtotal);
    var discount = parseFloat($("#discount").val());
    var prev = parseFloat($("#previous").html());
    var total = subtotal - discount + prev;
    var paid = parseFloat($("#paid").val());
    if (paid <= total) {
        $(".return").html(0);
        $(".return").val(0);
    } else {
        $(".return").html((paid - total));
        $(".return").val((paid - total));
    }
    $(".total").html(total);
    $(".total").val(total);

}

$("#customerid").change(function() {
    var prev = $(this).find(":selected").attr('prev');
    $("#previous").html(prev);
    calcTotal();
});
$("#prodform").on("keypress", function(event) {
    var keyPressed = event.keyCode || event.which;
    console.log("aaya");
    if (keyPressed === 13) {
        console.log("enter pressed");
        event.preventDefault();
        return false;
    }
});
$("#prodform").submit(function(e) {
    e.preventDefault();
    var prev = $(this).find(":selected").val();
    if (prev == 0) {
        Swal.fire(
            'Not Possible',
            'Select Supplier First',
            'error'
        )
    } else {

        $.ajax({
            url: "includes/data_operation.php",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data) {
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
                            data: {
                                action: action,
                                id: data
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

function clearForm() {
    $("#prodform")[0].reset();
    $("#customerid").empty();
    loadCustomers();
    $(".total").html(0);
    $(".subtotal").html(0);
    $(".return").html(0);
    $("#previous").html(0);
    $("#cart").html("");
}