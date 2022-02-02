function changeStatus(id)
{
    var action = "updateProductStatus";
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {action: action, id: id},
        success: function(data) {
            toastr.success("Product Status Updated Successfully!", "Success!", {
                closeButton: !0,
                tapToDismiss: !1
            })
            $("#listProducts").DataTable().ajax.reload(null, false);
            //$("#productAdd")[0].reset();
        }
    });
}
function listProducts() {
    var e = $("#listProducts");
    e.DataTable({
        ajax: {
            url: "includes/data_operation.php?action=listProduct",
            dataSrc: ""
        },
        columns: [{
            data: "id"
        }, {
            data: "name"
        }, {
            data: "cost"
        }, {
            data: "price"
        },{
            data: "qty"
        }, {
            data: "isActive"
        }, {
            data: ""
        }],
        columnDefs: [{
                "defaultContent": "-",
                "targets": "_all"
            },
            {
                targets: 1,
                render: function(e, t, a, s) {
                    return '<span id="name' + a.id + '">' + a.name + '</span>';
                }
            }, {
                targets: 2,
                render: function(e, t, a, s) {
                    return '<span id="cost' + a.id + '">' + a.cost + '</span>';
                }
            }, {
                targets: 3,
                render: function(e, t, a, s) {
                    return '<span id="price' + a.id + '">' + a.price + '</span>';
                }
            },{
                targets: 5,
                render: function(e, t, a, s) {
                    var check = "";
                    if(a.isActive == 1)
                    {
                        check = "checked";
                    }
                    return `<div class="form-check form-check-success form-switch">
                    <input type="checkbox" `+check+` onchange="changeStatus(`+a.id+`)" class="form-check-input" id="customSwitch4" />
                  </div>`;
                }
            }, {
                targets: -1,
                //title: "Add",
                orderable: !1,
                render: function(e, t, a, s) {
                    return `<a href="viewproduct.php?id=`+a.id+`" data-toggle="tooltip" data-placement="top" title="Update!">
                    ` + feather.icons.eye.toSvg({
                        class: "font-small-4"
                    }) + ` </a><a href="#" data-toggle="tooltip" onclick="delprod(` + a.id + `)" data-placement="top" title="Update!"><i data-feather='trash-2'></i></a>
                    <a href="#" data-toggle="tooltip" onclick="editprod(` + a.id + `)" data-placement="top" title="Update!">
                    ` + feather.icons.edit.toSvg({
                        class: "font-small-4"
                    }) + ` </a>`;
                }

            }
        ],
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
                    columns: [1, 2, 3, 4]
                }
            }, {
                extend: "csv",
                text: feather.icons["file-text"].toSvg({
                    class: "font-small-4 me-50"
                }) + "Csv",
                className: "dropdown-item",
                exportOptions: {
                    columns: [1, 2, 3, 4]
                }
            }, {
                extend: "pdf",
                text: feather.icons.clipboard.toSvg({
                    class: "font-small-4 me-50"
                }) + "Pdf",
                className: "dropdown-item",
                exportOptions: {
                    columns: [1, 2, 3, 4]
                }
            }],

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
                //         return "" !== e.title ? '<tr data-dt-row="' + e.rowIdx + '" data-dt-column="' + e.columnIndex + '"><td>' + e.title + ":</td> <td>" + e.data + "</td><td></td><td></td><td></td></tr>" : ""
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
    $("div.head-label").html('<h3 class="mb-0">List of Products</h3>')
}

function editprod(id) {
    nameid = "#name" + id;
    var name = $('#name' + id).html();
    var cost = $('#cost' + id).html();
    var price = $('#price' + id).html();
    $("#action").val("editProduct");
    $("#productAdd").append('<input type="hidden" value="' + id + '" name="editid" />');
    $("input[name='name']").val(name);
    $("input[name='cost']").val(cost);
    $("input[name='price']").val(price);
    $("input[name='submit']").val("Edit Product");

}

function delprod(id) {
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
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    listProducts();

    $("#delform").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "includes/data_operation.php",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data) {
                console.log(data);
                toastr.success("Product Deleted Successfully!", "Success!", {
                    closeButton: !0,
                    tapToDismiss: !1
                })
                $("#listProducts").DataTable().ajax.reload(null, false);
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
                var action = $("#action").val();
                if (action == "editProduct") {
                    toastr.success("Product Updated Successfully!", "Success!", {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                    $("#action").val("addProduct");
                    $("input[name='submit']").val("Add Product");
                } else {
                    toastr.success("Product Added Successfully!", "Success!", {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                }
                $("#listProducts").DataTable().ajax.reload(null, false);
                $("#productAdd")[0].reset();
            }
        });
    });
});