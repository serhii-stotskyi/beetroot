$(document).ready(function(){
	 $("#time").change(function () {
	 	var time= $("#time").val();
        $.ajax({
            type: "POST",
            url: "calculate.php",
            data: {
                time: time
            },
            dataType: "json",
            success: function (response) {
                if(response.success){
                    $("#cout").html("<div> " + response.color  +" </div>");
                }
            },
            error: function () {
            }
        });

    });
});