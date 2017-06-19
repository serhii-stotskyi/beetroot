
$(document).ready(function () {
    $('#userForm').submit (function () {
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
            dataType:'json'
        });

        }
    )

});