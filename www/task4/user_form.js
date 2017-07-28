
$(document).ready(function () {
    $('#formSubmit').click(function () {
        var email = $('#email').val(),
            login = $('#login').val(),
            password = $('#password').val();
        $.ajax({
            type: 'post',
            url : 'user_form.php',
            data:{email:email,
                  login:login,
                  password: password
                 },
            dataType:'json',
            success: function (response) {
                //debugger;
                if (response.success){
                    $("body").append("<p>" + response.userInfo +"</p>");
                }
                // успешное завершение запрса
            },
            error: function () {
                //обработка ошибок
            }
        });

        }

    )

});