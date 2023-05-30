$(document).ready(function () {
    let showPass = $("#show-pass");
    showPass.css("cursor", "pointer");
    var EmailInput = $("#email");
    var passInput = $("#password");
    var ErrorEmailMsg = $("#error_messg_email");
    var ErrorEmailPass = $("#error_messg_pass");
    var submitForm = $("#submitForm");
    submitForm.click(function (e) {
        if (
            EmailInput.val() === "" ||
            passInput.val() === "" ||
            !EmailInput.val().includes("@gmail.com")
        ) {
            e.preventDefault(); //if values are not null then form submit successfully else form not submit
        }
        if (EmailInput.val() === "") {
            ErrorEmailMsg.html("Please Enter email address").css(
                "color",
                "red"
            );
            return; // Stop form submission
        } else {
            ErrorEmailMsg.html("");
        }
        if (!EmailInput.val().includes("@gmail.com")) {
            ErrorEmailMsg.html("Invalid email address Add @ or gmail.com").css(
                "color",
                "red"
            );
            return;
        } else {
            ErrorEmailMsg.html("");
        }
        if (passInput.val() === "") {
            // Handle the case when password is not entered
            ErrorEmailPass.html("Please Enter Password").css("color", "red");
            return; // Stop form submission
        } else {
            ErrorEmailPass.html("");
        }
        // submitForm.submit()
    });
    showPass.click(function () {
        var passInput = $("#password").attr("type");
        var checkPassNull = $("#password").val();
        if (checkPassNull !== "") {
            if (passInput.includes("password")) {
                passInput = $("#password").attr("type", "text");
            } else {
                passInput = $("#password").attr("type", "password");
            }
        } else {
            alert("please Enter Your password to see");
        }
    });
});
