/**
 * Created by alpha on 21.06.2017.
 */

//document.getElementById('newBuy').onmouseover = function() {
//        //var newBuy = $("newBuy").val(newBuy),
//        //    oldBuy = $("oldBuy").val(oldBuy)
//            window.location.href = 'index_registration.html';
//};

$(document).ready(function () {
    $("#submit").click(function () {
        var nameLastName = $('#nameLastName').val(),
            town = $('#town').val(),
            tel = $('#tel').val(),
            email = $('#email').val();
        //console.log("newBuy", newBuy);
        //console.log("oldBuy", oldBuy);
        //console.log("nameLastName", nameLastName);
        //console.log("town", town);
        //console.log("tel", tel);
        //console.log("email", email);
        $.ajax({
            type: 'post',
             url: 'formBuy.php',
              data: {
                //newBuy:newBuy,
                //oldBuy:oldBuy,
                nameLastName:nameLastName,
                town: town,
                tel: tel,
                email: email
            },
            dataType: 'json',
            //beforeSend: function() {
            //       //перед отправкой аякса на сервер
            //},
            success: function (response) {
                if (response.success) {
                    $("body").append("<p>" + response.order + "</p>");
                }

                //успешное завершение запроса

            },
            error: function() {
                //обработка ошибок

            },
            //always: function () {
            //}
        });
    });
    // console.log("ready!");
});