var templateRoot;

function resetPassword() {
    $('#resetPass').button('loading');

    var code = $('#code').val();
    var password = $('#password1').val();
    var data = {codigo: code, password: password};
    var url = templateRoot + 'src/app/ajaxReceivers/resetPassword.php';
    $.ajax({
        type: "POST",
        url: url,
        async: true,
        data: data,
        success: function (serverResponse) {
            if (serverResponse === '0') {
                $('#wrapPassword').html("<div class='alert alert-warning' id='successMessage'> <p>Não foi possível redefinir a sua senha, talvez o tempo de para redefiní-la tenha expirado</p> </div>");
            } else {
                $('#wrapPassword').html("<div class='alert alert-success' id='successMessage'> <p>Senha redefinida com sucesso</p> \n\
                                        <a href='"+templateRoot+"/pages/index'>Pagina Inicial</a></div>");
            }
        },
        error: function (data) {
            alert("Error");
        }
    });
}

$(document).ready(function () {
    templateRoot = $('#templateRoot').val();
    $('#resetPasswordForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh glyphicon-refresh-animate'
        },
        fields: {
            pass1: {
                validators: {
                    notEmpty: {
                        message: 'A senha não pode ser vazia'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'A senha deve ter entre 6 e 30 caracteres'
                    },
                    identical: {
                        field: 'pass2',
                        message: 'As senhas são diferentes'
                    }
                }
            },
            pass2: {
                validators: {
                    notEmpty: {
                        message: 'A confirmação de senha não pode ser vazia'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'A senha deve ter entre 6 e 30 caracteres'
                    },
                    identical: {
                        field: 'pass1',
                        message: 'As senhas são diferentes'
                    }
                }
            }
        }
    }).on('success.form.bv', function (e) {
        // Prevent form submission
        e.preventDefault();
        resetPassword();
    });
});