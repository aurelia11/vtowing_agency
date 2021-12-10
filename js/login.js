$(document).ready(function () {
    $("#submit").click(function () {
        var email = $("#email").val();
        var password = $("#password").val();
        if (email.length == "" || password.length == ""){
        $("#message").html("please fill out this field first").fadeIn();
        $("#message").addClass("error");
        return false;
    }else {
        $.ajax({
            type: 'POST',
            url: 'redirect.php',
            data: { email: email, password: password },
            success: function (feedback) {
                $('#text').html(feedback);
            }
        });
    }
});
$(".email_error_text").hide();
$(".password_error_text").hide();
var error_email = false;
var error_password = false;
$("#email").focusout(function () {
    check_email();
});
$("#password").focusout(function () {
    check_password();
});
function check_email() {
    $("#message").hide();
    var pattern = new RegExp(/^([a-zA-Z0–9_\.\-])+\@(([a-zA-Z0–9\-])+\.)+([a-zA-Z0–9]{2,4})+$/);
    if (pattern.test($("#email").val())) {
        $(".email_error_text").hide();
    } else {
        $(".email_error_text").html("Invalid email address");
        $(".email_error_text").show().addClass("error");
        error_email = true;
    }
}
function check_password() {
    $("#message").hide();
    var password_length = $("#password").val().length;
    if (password_length < 8) {
        $(".password_error_text").html("Should be at least 8 characters");
        $(".password_error_text").show().addClass("error");
        error_password = true;
    } else {
        $(".password_error_text").hide();
    }
}
    });