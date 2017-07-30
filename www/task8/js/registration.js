$(document).ready(function () {
    $('#formSubmit').click(function () {
            var email = $('#email').val(),
                username = $('#username').val(),
                password = $('#password').val(),
                rePassword = $('#rePassword').val(),
                country = $('#country').val(),
                city = $('#city').val();

            $.ajax({
                type: 'post',
                url: '../php/registration.php',
                data: {
                    email: email,
                    username: username,
                    password: password,
                    rePassword: rePassword,
                    country: country,
                    city: city

                },
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        $("#info").text(response.message);
                        $('body').append('<button><a href="../html/login.html">Войти</a></button>');
                    } else {
                        $("#info").text(response.message);

                    }
                },
                error: function () {

                }
            });


        }
    );

});