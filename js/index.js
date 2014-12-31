function validateLogin() {
    var emailLogin = $('#emailLogin').val();
    var passwordLogin = $('#passwordLogin').val();

    var data = {emailLogin: emailLogin, passwordLogin: passwordLogin, type: 'runner'};

    $('#loginErrorMsg').hide();
    $('#loginLoader').show();
    
    var url = '../src/app/ajaxReceivers/validateLogin.php';
    $.ajax({
        type: "POST",
        url: url,
        async: true,
        data: data,
        success: function (serverResponse) {
            if (serverResponse === '1') {
                window.location.replace('../pages/dashboard');
            } else {
                $('#loginLoader').hide();
                $('#loginErrorMsg').show();
                $('#loginErrorMsg').css("display","block");
            }
        },
        error: function (data) {
            alert("Error");
        }
    });
}

$(document).ready(function () {
    $('#forgortPass').click(function (event) {
        $(".pr-wrap").toggleClass("show-pass-reset");
    });

    $('.pass-reset-submit').click(function (event) {
        $(".pr-wrap").removeClass("show-pass-reset");
    });
});