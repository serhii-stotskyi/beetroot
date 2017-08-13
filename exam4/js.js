$(document).ready(function () {
    $('#submit').on('click', function () {
        var data = $('#data').val();
        console.log(data);
        $.ajax({
            data: {
                data: data
            },
            url: 'count.php',
            dataType: 'json',
            type: 'post',
            beforeSend: function () {
            $('.message').remove();
            },
            success: function (response) {
                $('body').append("<p class='message'>" + response + "</p>");
            },
            error: function () {}
        })



    })

});