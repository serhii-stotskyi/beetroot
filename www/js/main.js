/**
 * Created by alpha on 19.06.2017.
 */

$(document).ready(function () {
    $("#userForm").submit(function (e) {
        var login = $("#login").val(),
            email = $("#email").val(),
            home = $("#home").val(),
            password = $("#password").val();
        console.log("login", login);
        console.log("email", email);
        console.log("home", home);
        console.log("password", password);
        $.ajax({
            type: 'post',
            url: 'php/form.php',
            data: {
                login: login,
                email: email,
                home: home,
                password: password
            },
            dataType: 'json',
            beforSend: function () {
            },
            success: function (response) {
            },
            error: function () {
            },
            always: function () {

            }
        })

    })

});