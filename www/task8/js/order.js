$(document).ready(function () {
    function calculatePrice() {
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
                debugger;
                $("#info").text(response.message);
                $("#orderPrice").text(response.sum + " грн");
            },
            error: function () {
            }
        });
    }
    $('#makeOrder').click(function () {
        var
            cardName = $('#card').val(),
            cardCount = $('#count').val();
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
    $(document).on('keyup change',"#count,#promo,#card", function () {
        calculatePrice();

    });

});

