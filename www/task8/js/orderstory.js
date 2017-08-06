$(document).ready(function () {
    $('#orderStory').on('click', function () {
        $.ajax({
            type: 'post',
            url: '../php/orderstory.php',
            dataType: 'json',
            beforeSend: function () {
                $("#order_list").remove();
            },
            success: function (response) {
                $("body").append("<div id='order_list'></div>");
                var orderInfo = $("#order_list");

                response.forEach(function (item, i, response) {
                    orderInfo.append(
                        "<div class='order_info'>" +
                        "<span class='orderId'>"+"№: "+ item["order_id"] + "</span>" +
                        "<span class='productId'>"+"id: " + item["product_id"] + "</span>" +
                        "<span class='quantity'>"+"кол-во:  " + item["quantity"] + "</span>" +
                        "<span class='orderSum'>"+"сумма: " + item["sum"] + "</span>" +
                        "</div>");
                });

                $("#order_list").append("<br><button id='storyRemove'>Скрыть историю заказов</button>");
            },
            error: function () {
                console.log('error')
            }
        })
    });
    $(document).on('click','#storyRemove',function (){
        $("#order_list").remove();
    });
});