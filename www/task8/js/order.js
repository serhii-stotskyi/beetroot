$(document).ready(function () {
    function calculatePrice() {
        var
            productName = $('#productName').val(),
            promo = $('#promo').val(),
            productCount = $('#count').val();
        $.ajax({
            type: 'POST',
            url: '../php/count.php',
            data: {
                productCount: productCount,
                productName: productName,
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
            productName = $('#productName').val(),
            productCount = $('#count').val();

        $.ajax({
            type: 'POST',
            url: '../php/order.php',
            data: {
                productCount: productCount,
                productName: productName
            },
            dataType: 'json',
            success: function () {
            },
            error: function () {
            }
        });

    });
    $(document).on('keyup change',"#count,#promo,#productName", function () {
        calculatePrice();

    });
    $('#productCategory').on('change', function () {
        var categoryId = this.value;
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
                  $('<br><select id="productName" style="margin-top: 10px"><option disabled selected>Выберите товар</option></select>').insertAfter('#productCategory');

                    var goodsList = $('#productName');

                    response.productName.forEach(function (item, i, response) {
                        goodsList.append(
                            "<option value=" + item.product_name + ">" + item.product_name +" "+" в наличии "+ item.available +  "</option>"
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

