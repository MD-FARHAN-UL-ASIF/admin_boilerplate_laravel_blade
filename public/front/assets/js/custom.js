// $(document).ready(function () {
//     //Register Form Validation
//     $("#registerForm").submit(function (e) {
//         e.preventDefault();
//         var formData = $("#registerForm").serialize();
//         $.ajax({
//             url: '/user/register',
//             type: 'post',
//             data: formData,
//             success: function (resp) {
//                 window.location.href = resp.redirectUrl;

//             }, error: function () {
//                 alert("Error");
//             }
//         });
//     })
// })