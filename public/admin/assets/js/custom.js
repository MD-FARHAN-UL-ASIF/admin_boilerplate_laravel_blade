$(document).ready(function () {
    $("#current_password").keyup(function () {
        var current_password = $("#current_password").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/check_current_password',
            data: { current_password: current_password },
            beforeSend: function () {
                // Show loading spinner or other indication of processing
                $("#verifyCurrentPassword").html("Checking...");
            },
            success: function (resp) {
                if (resp == "false") {
                    $("#verifyCurrentPassword").html("Current Password is Incorrect!");
                } else if (resp == "true") {
                    $("#verifyCurrentPassword").html("Current Password is Correct!");
                }
            },
            error: function () {
                // Handle errors gracefully
                $("#verifyCurrentPassword").html("Error: Could not check password.");
            },
            complete: function () {
                // Hide loading spinner or other indication
            }
        });
    });

    $(document).ready(function () {
        var newPasswordInput = $("#new_password");
        var confirmPasswordInput = $("#confirm_password");
        var verifyConfirmPassword = $("#verifyConfirmPassword");

        $("#confirm_password").keyup(function () {
            var new_password = newPasswordInput.val();
            var confirm_password = confirmPasswordInput.val();

            if (new_password !== confirm_password) {
                verifyConfirmPassword.html("Passwords do not match!");
            } else {
                verifyConfirmPassword.html("Passwords match!");
            }
        });
    });


    //Update CMS Page Status
    $(document).on("click", ".updateCmsPageStatus", function () {
        var status = $(this).children("i").attr("status");
        var page_id = $(this).attr("page_id");
        //    alert(page_id);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-cms-page-status',
            data: { status: status, page_id: page_id },
            success: function (resp) {
                if (resp['status'] == 0) {
                    $("#page-" + page_id).html("<i class= 'fa fa-toggle-off' status = 'Inactive'></i>")
                } else if (resp['status'] == 1) {
                    $("#page-" + page_id).html("<i class= 'fa fa-toggle-on' status = 'Active'></i>")
                }
            }, error: function () {
                alert("Error");
            }
        })
    });


    //Update Subadmin Status
    $(document).on("click", ".updateSubadminStatus", function () {
        var status = $(this).children("i").attr("status");
        var subadmin_id = $(this).attr("subadmin_id");
        //    alert(page_id);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-subadmin-status',
            data: { status: status, subadmin_id: subadmin_id },
            success: function (resp) {
                if (resp['status'] == 0) {
                    $("#subadmin-" + subadmin_id).html("<i class= 'fa fa-toggle-off' status = 'Inactive'></i>")
                } else if (resp['status'] == 1) {
                    $("#subadmin-" + subadmin_id).html("<i class= 'fa fa-toggle-on' status = 'Active'></i>")
                }
            }, error: function () {
                alert("Error");
            }
        })
    });
});
