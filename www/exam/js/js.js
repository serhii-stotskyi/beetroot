$('#submit').click(function () {
    var
        city = $('#city').val();
    $.ajax({
        type: 'post',
        url: './php/php.php',
        data: {
            city: city
        },
        dataType: 'json',
        beforeSend: function () {
            $('#info').text("");
        },
        success: function (response) {
            if (response.success) {
                $("#info").text(response.message);
                $("#result").append("<p>" + response.firstCity + "-" + response.secondCity + "</p>");
            } else {
                $("#info").text(response.message);
            }

        },
        error: function (response) {
        }
    });
});
$('#reset').click(function () {
    $.ajax({
        type: 'post',
        url: './php/reset.php',
        dataType: 'json',
        success: function (response) {
            $("#info").text(response.message);
            $('#result').html('');

        },
        error: function (response) {
        }
    });
});


