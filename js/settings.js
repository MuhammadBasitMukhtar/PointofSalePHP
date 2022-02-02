$("document").ready(function() {
    $("#btnProfile").click(function() {
        $(this).addClass("active");
        $(".profilecard").css('display', '');
        $(".shopcard").css('display', 'none');
        $("#btnShop").removeClass('active');
    });
    $("#btnShop").click(function() {
        $(this).addClass("active");
        $(".shopcard").css('display', '');
        $(".profilecard").css('display', 'none');
        $("#btnProfile").removeClass('active');
    });
    getProfile();
    getShopInfo();

    $("#formProfile").submit(function(e) {
        e.preventDefault();
        var oldPass = $('input[name="oldPassword"]').val();
        var newPass = $('input[name="newPassword"]').val();
        var conPass = $('input[name="confirmPassword"]').val();
        let validate = 0;
        if (oldPass == "") {
            console.log("validated");
            $.ajax({
                url: "includes/data_operation.php",
                method: "POST",
                data: new FormData(document.getElementById("formProfile")),
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    toastr.success("Profile Updated Successfully!", "Success!", {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                    getProfile();
                }
            });
        } else {
            var action = "checkPass";
            $.ajax({
                url: "includes/data_operation.php",
                method: "POST",
                data: {
                    action: action,
                    oldPassword: oldPass
                },
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    if (data.error == 1) {
                        console.log("invalidated");
                        validate = 0;
                        toastr.error("Enter Correct Old Password!", "Password Not Matched!", {
                            closeButton: !0,
                            tapToDismiss: !1
                        })

                    } else if (data.success == 1) {
                        if (newPass == "") {
                            console.log("validated");
                            $.ajax({
                                url: "includes/data_operation.php",
                                method: "POST",
                                data: new FormData(document.getElementById("formProfile")),
                                contentType: false,
                                processData: false,
                                success: function(data) {
                                    console.log(data);
                                    toastr.success("Profile Updated Successfully!", "Success!", {
                                        closeButton: !0,
                                        tapToDismiss: !1
                                    })
                                    getProfile();
                                }
                            });
                        } else {
                            if (conPass == "") {
                                toastr.error("Please Confirm New Password!", "Error!", {
                                    closeButton: !0,
                                    tapToDismiss: !1
                                })
                                console.log("invalidated");
                                validate = 0;
                            } else {
                                $("input[name='updatePass']").val(1);
                                if (newPass == conPass) {
                                    console.log("validated");
                                    $.ajax({
                                        url: "includes/data_operation.php",
                                        method: "POST",
                                        data: new FormData(document.getElementById("formProfile")),
                                        contentType: false,
                                        processData: false,
                                        success: function(data) {
                                            console.log(data);
                                            toastr.success("Profile Updated Successfully!", "Success!", {
                                                closeButton: !0,
                                                tapToDismiss: !1
                                            })
                                            getProfile();
                                            $("input[name='newPassword']").val("");
                                            $("input[name='oldPassword']").val("");
                                            $("input[name='confirmPassword']").val("");
                                        }
                                    });
                                } else {
                                    toastr.error("New Password and Confirm Password is not matched!", "Password Not Matched!", {
                                        closeButton: !0,
                                        tapToDismiss: !1
                                    })
                                }
                            }
                        }
                    }
                },
                error: function(data) {
                    toastr.error(data, "Error!", {
                        closeButton: !0,
                        tapToDismiss: !1
                    })
                }
            });
        }
        console.log("reached");
        //alert(validate);
        // if(validate == 1)
        // {
        //     $.ajax({
        //         url: "includes/data_operation.php",
        //         method: "POST",
        //         data: new FormData(this),
        //         contentType: false,
        //         processData: false,
        //         success: function(data) {
        //             console.log(data);
        //             toastr.success("Profile Updated Successfully!", "Success!", {
        //                 closeButton: !0,
        //                 tapToDismiss: !1
        //             })
        //             getProfile();
        //         }
        //     });
        // }


    });
    $("#formShop").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "includes/data_operation.php",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data) {
                console.log(data);
                toastr.success("Shop Info Updated Successfully!", "Success!", {
                    closeButton: !0,
                    tapToDismiss: !1
                })
                getShopInfo();
            }
        });
    });

});

function getProfile() {
    var action = "loadProfile";
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {
            action: action
        },
        dataType: "json",
        success: function(data) {
            $('.name').html(data[0].name);
            $('.username').html(data[0].username);
            $('input[name="username"]').val(data[0].username);
            $('input[name="name"]').val(data[0].name);
        },
        error: function(data) {
            toastr.error(data, "Error!", {
                closeButton: !0,
                tapToDismiss: !1
            })
        }
    });
}

function getShopInfo() {
    var action = "loadShop";
    $.ajax({
        url: "includes/data_operation.php",
        method: "POST",
        data: {
            action: action
        },
        dataType: "json",
        success: function(data) {
            $('input[name="shopname"]').val(data[0].name);
            $('input[name="slogan"]').val(data[0].slogan);
            $('input[name="address"]').val(data[0].address);
            $('input[name="contact"]').val(data[0].contact);
            $('input[name="message"]').val(data[0].message);
            $('input[name="messagepurchase"]').val(data[0].messagepurchase);
        },
        error: function(data) {
            toastr.error(data, "Error!", {
                closeButton: !0,
                tapToDismiss: !1
            })
        }
    });
}