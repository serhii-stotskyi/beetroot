$(document).ready(function () {
    $('#orderStory').on('click', function () {
        $.ajax({
            type: 'post',
            url: '../php/orderstory.php',
            dataType: 'json',
            beforeSend: function () {},
            success: function (response) {
                $("body").append("<div id='order_list'></div>");
                var orderInfo = $("#order_list");

                response.forEach(function(item, i, response) {
                    orderInfo.append(
                        "<div class='order_info'>" +
                            "<span class='orderId'>"+ item["order_id"] +"</span>" +
                            "<span class='productId'>"+ item["product_id"] +"</span>" +
                            "<span class='quantity'>"+ item["quantity"] +"</span>" +
                            "<span class='orderSum'>"+ item["sum"] +"</span>" +
                        "</div>");
                });
            },
            error: function () {
                console.log('error')
            }
        })
    })
});