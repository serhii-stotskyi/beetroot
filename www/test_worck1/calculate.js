$(document).ready(function(){
	 $("#time").on('change',function () {
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
                    $("#cout").html("<span> " + response.messageBox  + " </span>");
                }
            },
            error: function () {
                
            }
        });

    });
});