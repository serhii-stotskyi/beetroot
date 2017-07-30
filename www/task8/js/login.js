$(document).ready(function () {
    $('#submit').click(function () {
            var username = $('#username').val(),
                password = $('#password').val();
            $.ajax({
                type: 'post',
                url: '../php/login.php',
                data: {
                    username: username,
                    password: password
                },
                dataType: 'json',
                beforeSend: function () {
                    console.log('before');
                },
                success: function (response) {
                    console.log('success');
                    if(response.success){
                        window.location.replace("../html/shop.html");
                    }else {
                    $("#info").text(response.message);
                    }
                },
                error: function () {

                }
            });


        }
    );

});