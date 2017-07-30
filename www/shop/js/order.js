$(document).ready(function () {
    $('#makeOrder').click(function () {
        var
            cardName = $('#card').val(),
            cardCount = $('#Count').val();
        $.ajax({
            type: 'POST',
            url: '../php/order.php',
            data: {
                cardCount: cardCount,
                cardName: cardName
            },
            dataType: 'json',
            success: function () {
            },
            error: function () {
            }
        });

    });
    $('#count').keyup(function () {
        var
            cardName = $('#card').val(),
            promo = $('#promo').val(),
            cardCount = $('#count').val();
        $.ajax({
            type: 'POST',
            url: '../php/count.php',
            data: {
                cardCount: cardCount,
                cardName: cardName,
                promo:promo
            },
            dataType: 'json',
            success: function (response) {
                $("#info").text(response.message);
                $("#orderPrice").text(response.sum + " грн");
            },
            error: function () {
            }
        });

    });

});

