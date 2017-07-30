$(document).ready(function () {
    $('#orderStory').on('click', function () {
        $.ajax({
            type: 'post',
            url: '../php/orderstory.php',
            dataType: 'json',
            beforeSend: function () {
                console.log('beforeSend');
                $('#test').empty().html('order_id' + '<br>');
                $('#test1').empty().html('product_id');
                $('#test11').empty().html('quantity');
                $('#test111').empty().html('sum');
            },
            success: function (response) {
                console.log('success');
                if(response) {
                    var i;
                    var a;
                    var eee = '#test';

                    for(i=0; i < response.length; i++) {
                        for(a=0; a < response.length; a++) {
                            $(eee).append(response[i][a] + " " +  "<br> ");
                            // if (a === response.length - 1) {
                            //     $('#test').append(response[i][a]);
                            //     }
                            // else {
                            //     $('#test').append(response[i][a] + ", ");
                            // }
                            //$('#test').append("<p>" + "Welcome " + "</p>"  + "<p>" + response[i] + response[i][a] + "</p>"+ "<br>");
                        }
                        eee = eee + '1';
                        $(eee).append("<br>");

                    }
                }
            },
            error: function () {
                console.log('error')
            }
        })
    })
});