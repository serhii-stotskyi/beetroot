$(document).ready(function () {
    $('#exit').click(function () {
        $.ajax({
            type: 'POST',
            url: '../php/exit.php',
            dataType: 'json',
            success: function (response) {
                if(response.success){
                    window.location.replace("../index.html");
                }
            },
            error: function () {
            }
        });

    });

    });
