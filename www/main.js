$(document).ready(function () {
    $ ("#formSubmit").click(function(){

    var name = $("#Name").val(),
        surname = $("#Surname"). val(),
        number = $("#Number").val(),
        SelValue = $("#SelProduct option:selected").text();
    console.log("Name", name);
    console.log("Surname", surname);
    console.log("Number", number);
    console.log("Product", SelValue);

    $.ajax ({
        type: 'post',
        url: 'Store.php',
        data: {
            name: name,
            surname: surname,
            number: number,
            SelValue: SelValue
        },
        dataType: 'json',
        beforeSend: function () {

        },
        success: function (response) {

                 if (response.success) {
                    $("#box").html("<p>" + response.StoreInfo + "</p>");
                    alert("Заказ подтвержден");
                 }
        },
        error: function () {

        },
        always: function () {

        }
    });
});
    });