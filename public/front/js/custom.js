$(document).ready(function () {

    //forgot password form validation
    $("#forgotForm").submit(function () {
        var formData = $(this).serialize();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/user/forgot-password",
            type: 'post',
            data: formData,
            success: function (resp) {
                if (resp.type == "error") {
                    $.each(resp.errors, function (i, error) {
                        $('.forgot-' + i).attr('style', 'color:red');
                        $('.forgot-' + i).html(error);
                        setTimeout(function () {
                            $('.forgot-' + i).css({
                                'display': 'none'
                            })
                        }, 4000);
                    });
                } else if (resp.type == "success") {
                    $("#forgot-success").attr('style', 'color:green');
                    $("#forgot-success").html(resp.message);
                }
            }, error: function () {
                alert("Error");
            }
        })
    })

    //reset password form validation
    //reset password form validation
    $("#resetPasswordForm").submit(function () {
        var formData = $(this).serialize();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/user/reset-password",
            type: 'post',
            data: formData,
            success: function (resp) {
                if (resp.type == "error") {
                    $.each(resp.errors, function (i, error) {
                        $('.reset-' + i).attr('style', 'color:red');
                        $('.reset-' + i).html(error);
                        setTimeout(function () {
                            $('.reset-' + i).css({
                                'display': 'none'
                            })
                        }, 4000);
                    });
                } else if (resp.type == "success") {
                    $("#reset-success").attr('style', 'color:green');
                    $("#reset-success").html(resp.message);
                }
            }, error: function () {
                alert("Error");
            }
        })
    });
});