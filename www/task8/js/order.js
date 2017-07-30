$(document).ready(function () {
    function calculatePrice() {
        var
            cardName = $('#productName').val(),
            promo = $('#promo').val(),
            cardCount = $('#count').val();
        $.ajax({
            type: 'POST',
            url: '../php/count.php',
            data: {
                cardCount: cardCount,
                cardName: cardName,
                promo: promo
            },
            dataType: 'json',
            success: function (response) {

                $("#info").text(response.message);
                $("#orderPrice").text(response.sum + " грн");
            },
            error: function () {
            }
        });
    }
    $('#makeOrder').click(function () {
        var
            cardName = $('#productName').val(),
            promo = $('#promo').val(),
            cardCount = $('#count').val();

        $.ajax({
            type: 'POST',
            url: '../php/order.php',
            data: {
                cardCount: cardCount,
                cardName: cardName,
                promo: promo
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
    $('#productCategory').on('change', function () {
        var categoryId = this.value;
        // console.log(categoryId);
        $.ajax({
            type: 'POST',
            url: '../php/products.php',
            data: {
                categoryId: categoryId

            },
            dataType: 'json',
            beforeSend: function () {
                $('#productName').remove();
            },
            success: function (response) {
                if(response.success){
                  $('<select id="productName" style="margin-top: 10px"><option disabled selected>Выберите товар</option></select>').insertAfter('#productCategory');

                    var goodsList = $('#productName');

                    response.productName.forEach(function (item, i, response) {
                        goodsList.append(
                            "<option value=" + item.product_name + ">" + item.product_name + "</option>"
                        )
                    })
                }else {
                    window.location.replace("../html/login.html");
                }
            },
            error: function () {
            }
        });
    })

});

