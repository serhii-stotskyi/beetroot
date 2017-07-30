/**
 * Created by Admin on 18.06.2017.
 */
// ;(function ($) {
//     // $
//     // $( "input[type=radio][name=currency]:checked" ).val();
// function formSubmit() {
//     console.log("it works");
//     debugger;
// }
// })(jQuery);

$(document).ready(function () {
    $("#formSubmit").click(function () {
        var name = $("#firstName").val();
        var soname = $("#lastName").val();
        var email = $("#email").val();
        var password = $("#password").val();
// console.log("email",email);
// console.log("login",login);
// console.log("password", password);
// debugger;
        $.ajax({
            type: 'post',
            url: 'index.php',
            data: {
                name: name,
                soName: soname,
                email: email,
                password: password
            },
            dataType: 'json',
            beforeSend: function () {
                // debugger;
                //перед отправкой
            },
            success: function (response) {
                if(response.success){
                    $('body').append("<p>"+response.userInfo+"</p>");
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