$(document).ready(function () {

    $("#formSubmit").on("click", function () {
        var day = $('#day').val(),
            month = $('#month').val(),
            year = $('#year').val();
        if (day <= 31 && month <= 12 && (year.length === 4)) {
            $.ajax({
                type: 'post',
                url: 'countdown.php',
                data: {
                    day: day,
                    month: month,
                    year: year
                },
                dataType: 'json',
                beforeSend: function () {

                },
                success: function (response) {
                    if (response.success) {
                        $('body').append("<p>Our event will occur in " + response.years + " years " + response.months + " months " + response.days + " days " + response.hours + " hours " + response.minutes + " minutes." + "</p>");
                    }
                }
                ,
                error: function () {

                    //обработка ошибок
                },
                always: function () {
                    debugger;
                }
            });
        }
        else {
            alert('incorrect date')
        }
    });
});