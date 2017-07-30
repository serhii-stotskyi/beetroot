$(document).ready(function () {
    $("#input_13").click(function () {
        var firstName = $("#first_2").val(),
            lastName = $("#last_2").val(),
            email = $("#input_3").val(),
            phoneArea = $("#input_5_area").val(),
            phone = $("#input_5_phone").val(),
            address = $("#input_4_addr_line1").val(),
            address2 = $("#input_4_addr_line2").val(),
            city = $("#input_4_city").val(),
            state = $("#input_4_state").val(),
            postal = $("#input_4_postal").val(),
            country = $("#input_4_country").val();


// console.log("email",email);
// console.log("login",login);
// console.log("password", password);
// debugger;
            $.ajax({
            type: 'post',
            url: 'index.php',
            data: {
                firstName: firstName,
                lastName: lastName,
                email: email,
                phoneArea:phoneArea,
                phone:phone,
                address:address,
                address2:address2,
                city:city,
                state:state,
                postal:postal,
                country:country
            },
            dataType: 'json',
            beforeSend: function () {
                debugger;
                //перед отправкой
            },
            success: function (response) {
                if (response.success) {
                    $('body').append("<p>" + response.userInfo + "</p>");
                }
                // debugger;
                // alert("Success"+ responce)
                //успешное завершене
            },
            error: function () {

                //обработка ошибок
            },
            always: function () {
                debugger;
            }
        });
    });
});