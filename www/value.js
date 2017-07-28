
$(document).ready(function () {
    $("#userForm").submit(function (e) {
        //e.preventDefault();
        var email = $("#email").val(),
        login = $("#login").val(),
        password = $("#password").val();
        console.log('email',email);
        console.log('login',login);
        console.log('password',password);
    //debugger;
    $.ajax({
        type: 'post',
        url: 'shop.php',
        data: {email: email,
               login: login,
               password: password
        },
        dataType: 'json',
        beforeSend: function () {
            debugger;
            // перед отправкой аякса на сервер
        },
        success: function (responce) {
            // успешное завершение запрса
        },
        error: function () {
            //обработка ошибок
        },
        always: function () {
            //
        }
    })
});
});