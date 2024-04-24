$(document).ready(function(){
    $("#current_password").keyup(function(){
        var current_password = $("#current_password").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/check_current_password',
            data: { current_password: current_password },
            beforeSend: function() {
                // Show loading spinner or other indication of processing
                $("#verifyCurrentPassword").html("Checking...");
            },
            success: function(resp){
                if(resp == "false"){
                    $("#verifyCurrentPassword").html("Current Password is Incorrect!");
                } else if(resp == "true"){
                    $("#verifyCurrentPassword").html("Current Password is Correct!");
                }
            },
            error: function(){
                // Handle errors gracefully
                $("#verifyCurrentPassword").html("Error: Could not check password.");
            },
            complete: function() {
                // Hide loading spinner or other indication
            }
        });
    });

   $(document).ready(function(){
    var newPasswordInput = $("#new_password");
    var confirmPasswordInput = $("#confirm_password");
    var verifyConfirmPassword = $("#verifyConfirmPassword");

    $("#confirm_password").keyup(function(){
        var new_password = newPasswordInput.val();
        var confirm_password = confirmPasswordInput.val();

        if(new_password !== confirm_password) {
            verifyConfirmPassword.html("Passwords do not match!");
        } else {
            verifyConfirmPassword.html("Passwords match!");
        }
    });
});

});
